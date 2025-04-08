<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::latest()->filter(request(['search']))->paginate(6)->withQueryString();

        return view('dashboard.ekstrakurikulers.index', [
            'title' => 'Ekstrakurikuler',
            'ekstrakurikulers' => $ekstrakurikulers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('dashboard.ekstrakurikulers.create', [
            'title' => 'Create Ekstrakurikuler',
            'ekstrakurikulers' => $ekstrakurikulers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:ekstrakurikulers',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('ekstrakurikulers', 'public');
        }

        $ekstrakurikuler = new Ekstrakurikuler;
        $ekstrakurikuler->name = $validatedData['name'];
        if ($request->file('gambar')) {
            $ekstrakurikuler->gambar = $validatedData['gambar'];
        }
        $ekstrakurikuler->user_id = auth()->user()->id;

        $ekstrakurikuler->save();
        return redirect('/dashboard/extracurriculars')->with('success', 'Extracurricular created successfully!');
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
        return view('dashboard.ekstrakurikulers.edit', [
            'title' => 'Edit Ekstrakurikuler',
            'ekstrakurikuler' => Ekstrakurikuler::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:ekstrakurikulers,name,' . $id, 
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('ekstrakurikulers', 'public');
        }

        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        $ekstrakurikuler->name = $validatedData['name'];
        if ($request->file('gambar')) $ekstrakurikuler->gambar = $validatedData['gambar'];
        $ekstrakurikuler->user_id = auth()->user()->id;
        $ekstrakurikuler->save();

        return redirect('/dashboard/extracurriculars')->with('success', 'Extracurricular updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        if ($ekstrakurikuler->gambar) {
            Storage::delete($ekstrakurikuler->gambar);
        }
        Ekstrakurikuler::destroy($id);
        return redirect('/dashboard/extracurriculars')->with('success', 'Extracurricular deleted successfully!');
    }
}
