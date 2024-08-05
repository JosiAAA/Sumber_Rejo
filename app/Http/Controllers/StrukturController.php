<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\struktur;

class StrukturController extends Controller
{
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'jabatan' => 'required|string|max:255',
        'keterangan' => 'required|string',
        'nama' => 'required|string|max:255',
        'nip' => 'required|integer',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Menyimpan gambar jika ada
    if ($request->hasFile('gambar')) {
        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);
        $imagePath = 'image/' . $imageName;
    }
    // Menyimpan data struktur organisasi
    struktur::create([
        'jabatan' => $request->input('jabatan'),
        'keterangan' => $request->input('keterangan'),
        'nama' => $request->input('nama'),
        'nip' => $request->input('nip'),
        'gambar' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Data berhasil disimpan!');
}
    }
