<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasis = Prestasi::latest()->filter(request(['search']))->paginate(6)->withQueryString();

        return view('dashboard.achievement.index', [
            'title' => 'Achievement',
            'prestasis' => $prestasis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prestasis = Prestasi::all();
        return view('dashboard.achievement.create', [
            'title' => 'Create Achievement',
            'prestasis' => $prestasis,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:prestasis',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar'))
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('prestasi', 'public');
        
        $prestasi = new Prestasi;
        $prestasi->name = $validatedData['name'];
        if ($request->file('gambar')) $prestasi->gambar = $validatedData['gambar'];
        $prestasi->user_id = auth()->user()->id;
        $prestasi->save();

        return redirect('/dashboard/achievement')->with('success', 'Achievement successfully created!');
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
        return view('dashboard.achievement.edit', [
            'title' => 'Edit Prestasi',
            'prestasi' => Prestasi::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:prestasis,name,' . $id . ',id',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('prestasi', 'public');
        }

        $prestasi = Prestasi::findOrFail($id);
        $prestasi->name = $validatedData['name'];
        if ($request->file('gambar')) $prestasi->gambar = $validatedData['gambar'];
        $prestasi->user_id = auth()->user()->id;
        $prestasi->save();

        return redirect('/dashboard/achievement')->with('success', 'Achievement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        if ($prestasi->gambar) {
            Storage::delete($prestasi->gambar);
        }
        Prestasi::destroy($id);
        return redirect('/dashboard/achievement')->with('success', 'Achievement deleted successfully!');
    }
}
