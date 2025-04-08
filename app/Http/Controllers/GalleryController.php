<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()->filter(request(['search']))->paginate(6)->withQueryString();

        return view('dashboard.gallery.index', [
            'title' => 'Gallery',
            'galleries' => $galleries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $galleries = Gallery::all();
        return view('dashboard.gallery.create', [
            'title' => 'Create Gallery',
            'galleries' => $galleries,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:galleries',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar'))
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('gallery', 'public');
        
        $gallery = new Gallery;
        $gallery->name = $validatedData['name'];
        if ($request->file('gambar')) $gallery->gambar = $validatedData['gambar'];
        $gallery->user_id = auth()->user()->id;
        $gallery->save();

        return redirect('/dashboard/galleries')->with('success', 'Gallery created successfully!');
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
        return view('dashboard.gallery.edit', [
            'title' => 'Edit Gallery',
            'gallery' => Gallery::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:galleries,name,' . $id . ',id',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('gallery', 'public');
        }

        $gallery = Gallery::findOrFail($id);
        $gallery->name = $validatedData['name'];
        if ($request->file('gambar')) $gallery->gambar = $validatedData['gambar'];
        $gallery->user_id = auth()->user()->id;
        $gallery->save();

        return redirect('/dashboard/galleries')->with('success', 'Gallery updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->gambar) {
            Storage::delete($gallery->gambar);
        }
        Gallery::destroy($id);
        return redirect('/dashboard/galleries')->with('success', 'gallery deleted successfully!');
    }
}
