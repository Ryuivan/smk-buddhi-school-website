<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('dashboard.subjects.index', [
            'title' => 'Subjects',
            'subjects' => $subjects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.subjects.create', [
            'title' => 'Create Subject',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:subjects',
        ]);

        $subject = new Subject;
        $subject->name = $request->name;
        $subject->save();

        return redirect('/dashboard/subjects')->with('success', 'Mata pelajaran berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.subjects.edit', [
            'title' => 'Edit Subject',
            'subject' => Subject::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->name != Subject::findOrFail($id)->name) {
            $rules['name'] = 'required|string|max:255|unique:subjects';
        }

        $validatedData = $request->validate($rules);

        Subject::findOrFail($id)->update($validatedData);
        return redirect('/dashboard/subjects')->with('success', 'Mata pelajaran berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subject::destroy($id);
        return redirect('/dashboard/subjects')->with('success', 'Mata pelajaran berhasil dihapus!');
    }
}
