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
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imagePath = 'gambar/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/gambar'), $imagePath);
        }

        // Store the gallery data
        Galeri::create([
            'gambar' => $imagePath,
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}

