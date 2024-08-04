<?php

namespace App\Http\Controllers;

use App\Models\list_donasi;
use App\Models\komentar;

use App\Models\berita;

use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->route('id');

        // Ambil berita yang memiliki ID sesuai dengan $id
        $result = DB::table('berita')->where('id', $id)->get();
        
        // Ambil berita-berita lain yang ID-nya tidak sama dengan $result->id
        $beritaLain = DB::table('berita')->where('id', '!=', $id)->take(10)->get();

        // Temukan berita berdasarkan ID
        $berita = berita::findOrFail($id);

        // Increment the view count
        $berita->incrementViews();

        // Ambil komentar-komentar yang terkait dengan berita ini
        $komentar = komentar::where('target', $id)->get();
        $jumlahKomentar = komentar::where('target', $id)->count();

        return view('halamanberita', [
            'result' => $result,
            'beritaLain' => $beritaLain,
            'komentar' => $komentar,
            'jumlahKomentar' => $jumlahKomentar,
        ]);
    }
public function showStrukturOrganisasi()
{
    $struktur = DB::table('struktur_organisasi')->get(); // Ganti dengan query yang sesuai
    return view('struktur', ['struktur' => $struktur]);
}

    public function store(Request $request)
    {
        DB::table('komentar')->insert([
            'pemilik' => $request->pemilik,
            'komen' => $request->komen,
            'target' => $request->target,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan');
    }

    public function showKKN()
    {
        // Ambil data dari tabel 'list_kkn'
        $kkn = DB::table('list_kkn')->get(); // Ganti dengan query yang sesuai
    
        // Ambil data dari tabel 'list_donasi'
        $search = DB::table('kkn_50')->paginate(5); // Ganti dengan query yang sesuai
    
        // Kirim kedua data tersebut ke view
        return view('kkn', ['kkn' => $kkn, 'search' => $search]);
    }
    
    
    public function showKKNTes()
    {
        // Ambil data dari tabel 'list_kkn'
        $kkn = DB::table('list_kkn')->get(); // Ganti dengan query yang sesuai
    
        // Ambil data dari tabel 'list_donasi'
        $search = DB::table('kkn_50')->paginate(5); // Ganti dengan query yang sesuai
    
        // Kirim kedua data tersebut ke view
        return view('peta', ['kkn' => $kkn, 'search' => $search]);
    }
// Controller
public function showImages()
{
    // Ambil data gambar dari database
    $results = DB::table('galeri')->get(); // Sesuaikan dengan tabel dan kolom Anda

    // Kirim data ke view
    return view('galeri', ['results' => $results]);
}
// Controller Method
public function showGaleri()
{
    // Ambil 10 data gambar dari database
    $results = DB::table('galeri')->take(10)->get();

    // Kirim data ke view
    return view('beranda', ['results' => $results]);
}


}
