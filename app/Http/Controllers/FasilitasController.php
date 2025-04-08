<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitass = Fasilitas::latest()->filter(request(['search']))->paginate(6)->withQueryString();

        return view('dashboard.fasilitas.index', [
            'title' => 'Facilities',
            'fasilitass' => $fasilitass,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fasilitass = Fasilitas::all();
        return view('dashboard.fasilitas.create', [
            'title' => 'Create Facility',
            'fasilitass' => $fasilitass,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:fasilitas',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar'))
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('fasilitas', 'public');
        
        $fasilitas = new Fasilitas;
        $fasilitas->name = $validatedData['name'];
        if ($request->file('gambar')) $fasilitas->gambar = $validatedData['gambar'];
        $fasilitas->user_id = auth()->user()->id;
        $fasilitas->save();

        return redirect('/dashboard/facilities')->with('success', 'Facility created successfully!');
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
        return view('dashboard.fasilitas.edit', [
            'title' => 'Edit Facility',
            'fasilitas' => Fasilitas::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:fasilitas,name,' . $id . ',id',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('fasilitas', 'public');
        }

        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->name = $validatedData['name'];
        if ($request->file('gambar')) $fasilitas->gambar = $validatedData['gambar'];
        $fasilitas->user_id = auth()->user()->id;
        $fasilitas->save();

        return redirect('/dashboard/facilities')->with('success', 'Facility updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        if ($fasilitas->gambar) {
            Storage::delete($fasilitas->gambar);
        }
        Fasilitas::destroy($id);
        return redirect('/dashboard/facilities')->with('success', 'Facility deleted successfully!');
    }
}
