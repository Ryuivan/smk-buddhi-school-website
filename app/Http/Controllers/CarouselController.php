<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;    
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::latest()->filter(request(['search']))->paginate(6)->withQueryString();

        return view('dashboard.carousels.index', [
            'title' => 'Carousels',
            'carousels' => $carousels,
        ]);
    }

    public function create()
    {
        $carousels = Carousel::all();

        return view('dashboard.carousels.create', [
            'title' => 'Create Carousel',
            'carousels' => $carousels,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:225|unique:carousels',
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('carousels', 'public');
        }

        $carousel = Carousel::create([
            'name' => $validatedData['name'],
            'gambar' => $validatedData['gambar'] ?? null,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('dashboard/carousels')->with('success', 'Carousel successfully created!');
    }

    public function edit(string $id)
    {
        $carousel = Carousel::findOrFail($id);

        return view('dashboard.carousels.edit', [
            'title' => 'Edit Carousel',
            'carousel' => $carousel,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $carousel = Carousel::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:225|unique:carousels,name,' . $carousel->id,
            'gambar' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('gambar')) {
            Storage::delete($carousel->gambar);
            $validatedData['gambar'] = $request->file('gambar')->storePublicly('carousels', 'public');
        }

        $carousel->update([
            'name' => $validatedData['name'],
            'gambar' => $validatedData['gambar'] ?? $carousel->gambar,
        ]);

        return redirect('/dashboard/carousels')->with('success', 'Carousel successfully updated!');
    }

    public function destroy(string $id)
    {
        $carousel = Carousel::findOrFail($id);
        
        if ($carousel->gambar) {
            Storage::delete($carousel->gambar);
        }

        $carousel->delete();

        return redirect('/dashboard/carousels')->with('success', 'Carousel successfully deleted!');
    }
}
