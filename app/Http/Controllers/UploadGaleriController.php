<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class UploadGaleriController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $imagePath = 'image/' . $imageName;
        }

        // Store the gallery data
        Galeri::create([
            'gambar' => $imagePath,
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}

