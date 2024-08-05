<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\list_donasi;
use App\Models\berita;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    public function index()
{
    // Ambil 10 data gambar dari database
    $galeriImages = DB::table('galeri')->take(10)->get();

    // Ambil berita dengan paginasi
    $search = berita::paginate(5);

    $tampilan = DB::table('tampilan')->take(3)->get();


    // Kirim data ke view
    return view('beranda', [
        'search' => $search,
        'galeriImages' => $galeriImages,
        'tampilan' =>  $tampilan
    ]);
}

        public function edit(string $id)
        {
            $result = DB::table('list_donasi')->where('id',$id)->get();
          
            return view('explore',['result' => $result]);
        }

        public function news()
        {
            $search = berita::orderBy('tanggal', 'desc')->paginate(5);
            return view('berita', ['search' => $search]);
        }
        
        public function showKKN()
        {
            $search = list_donasi::paginate(5);
 
            return view('kkn', ['search' => $search]);
        
        }  
        
    
}

