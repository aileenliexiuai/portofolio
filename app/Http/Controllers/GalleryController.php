<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
      $galleries = Gallery::all();
     return view('dashboard.gallery.index', compact('galleries'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gallery.create');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    $request->validate([
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
        'title.required' => "Title is required",
        'image.required' => "Image is required",
        'image.image' => "Uploaded file must be an image",
        'image.mimes' => "Supported image formats are jpeg, png, jpg, gif",
        'image.max' => "Image size cannot exceed 2MB",
    ]);

    // Menyimpan gambar yang diunggah
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);

    // Membuat data baru untuk galeri
    $galleryData = [
        'title' => $request->title,
        'image_path' => $imageName,
        'isi' => $request->isi,
    ];

    // Menyimpan data baru ke dalam database
    Gallery::create($galleryData);
    
    return redirect()->route('gallery.index')->with('success', 'Photo added successfully');
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
        $galleries = Gallery::where('id', $id)->first();
        return view('dashboard.gallery.edit')->with('data',$galleries );
    }

    /**
     * Update the specified resource in storage.
     */
    /**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // jika ingin mengizinkan update gambar
    ]);

    $gallery = Gallery::findOrFail($id);
    $gallery->title = $request->title;

    if ($request->hasFile('image')) {
        // Menghapus gambar lama sebelum mengganti dengan yang baru
        if ($gallery->image_path) {
            Storage::delete('images/' . $gallery->image_path);
        }

        // Menyimpan gambar baru
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $gallery->image_path = $imageName;
    }

    $gallery->isi = $request->isi; // Update isi galeri

    $gallery->save();

    return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        Storage::delete($gallery->image_path);
    
        $gallery->delete();
    
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
