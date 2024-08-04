<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use App\Models\Berita;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'word_file' => 'required|mimes:doc,docx',
        ]);

        $file = $request->file('word_file');
        $filePath = $file->storeAs('uploads', $file->getClientOriginalName());

        $phpWord = IOFactory::load(storage_path('app/' . $filePath));

        $section = $phpWord->getSections()[0];
        $table = $section->getElements()[0];

        $data = [
            'judul' => $table->getRow(1)->getCell(0)->getText(),
            'gambar' => $table->getRow(1)->getCell(1)->getText(),
            'isi' => $table->getRow(1)->getCell(2)->getText(),
        ];

        Berita::create([
            'judul' => $data['judul'],
            'gambar' => $data['gambar'],
            'isi' => $data['isi'],
        ]);

        return back()->with('success', 'File uploaded and data stored successfully.');
    }
}
