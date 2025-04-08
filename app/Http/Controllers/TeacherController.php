<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.teachers.index', [
            'title' => 'Teachers',
            'teachers' => Teacher::latest()->filter(request(['search']))->paginate(6)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('dashboard.teachers.create', [
            'title' => 'Create Teacher',
            'subjects' => $subjects,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:teachers', 
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar'))
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('teachers', 'public');
        
        $teacher = new Teacher;
        $teacher->name = $validatedData['name'];
        if ($request->file('gambar')) $teacher->gambar = $validatedData['gambar'];
        $teacher->user_id = auth()->user()->id;
        $teacher->save();

        return redirect('/dashboard/teachers')->with('success', 'Teacher created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.teachers.edit', [
            'title' => 'Edit Teacher',
            'teacher' => Teacher::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:teachers,name,' . $id,
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('teachers', 'public');
        }

        $teacher = Teacher::findOrFail($id);
        $teacher->name = $validatedData['name'];
        if ($request->file('gambar')) $teacher->gambar = $validatedData['gambar'];
        $teacher->user_id = auth()->user()->id;
        $teacher->save();

        return redirect('/dashboard/teachers')->with('success', 'Teacher updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        if ($teacher->gambar) {
            Storage::delete($teacher->gambar);
        }
        Teacher::destroy($id);
        return redirect('/dashboard/teachers')->with('success', 'Teacher deleted successfully!');
    }
}
