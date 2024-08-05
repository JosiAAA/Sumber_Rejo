<?php

// app/Http/Controllers/ImageController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{
    public function show($filename)
    {
        $path = storage_path('app/public/gambar/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}

