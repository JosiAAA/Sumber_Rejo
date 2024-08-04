<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Tampilan; // Make sure to import your model

class TampilanController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('images', 'public'); // Store in 'public/images' directory

            // Create a new Tampilan instance and save to the database
            $tampilan = new Tampilan();
            $tampilan->judul = $request->input('judul');
            $tampilan->deskripsi = $request->input('deskripsi');
            $tampilan->gambar = $path;
            $tampilan->save();

            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        }

        return redirect()->back()->with('error', 'Gambar gagal diupload.');
    }
}
