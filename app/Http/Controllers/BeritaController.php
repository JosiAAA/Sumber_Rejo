<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'role_pemilik' => 'required|string',
            'tanggal' => 'required|string',
            'jam' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

      // Menyimpan gambar langsung ke public/images
if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('image'), $imageName);
    $imagePath = 'image/' . $imageName;
}


        // Menyimpan data berita
        Berita::create([
            'judul' => $request->input('title'),
            'role_pemilik' => $request->input('role_pemilik'),
            'gambar' => $imagePath ?? null,
            'tanggal' => $request->input('tanggal'),
            'jam' => $request->input('jam'),
            'deskripsi' => $request->input('description'),
            'viewer' => '0', // Misalnya, default value untuk viewer
        ]);

        return redirect()->back()->with('success', 'Berita berhasil dikirim!');
    }
}
