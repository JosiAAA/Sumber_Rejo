<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\YourPostController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UploadGaleriController;
use App\Http\Controllers\TampilanController;

Route::post('/upload_tampilan/store', [TampilanController::class, 'store'])->name('upload_tampilan/store');
Route::get('/upload_tampilan', function () {
    return view('upload_tampilan'); // Pastikan view 'form.blade.php' ada di folder 'resources/views'
});

Route::post('/upload_galeri/store', [UploadGaleriController::class, 'store'])->name('upload_galeri/store');
Route::get('/upload_galeri', function () {
    return view('upload_galeri'); // Pastikan view 'form.blade.php' ada di folder 'resources/views'
});

// Menampilkan form (jika perlu)
Route::get('/upload_berita', function () {
    return view('upload_berita'); // Pastikan view 'form.blade.php' ada di folder 'resources/views'
});

// Mengirim form
Route::post('/submit_berita/post', [BeritaController::class, 'store'])->name('submit_berita/store');
// Menampilkan form (jika perlu)
Route::get('/upload_struktur', function () {
    return view('upload_struktur'); // Pastikan view 'form.blade.php' ada di folder 'resources/views'
});

// Mengirim form
Route::post('/submit_struktur/post', [StrukturController::class, 'store'])->name('submit_struktur/store');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});
Route::get('', function () {
    return view('beranda');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/mode', function () {
    return view('backup');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/posting', function () {
    return view('posting');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/peta', function () {
    return view('peta');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/visimisi', function () {
    return view('visimisi');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/geografis', function () {
    return view('geografis');
});
Route::get('/demografi', function () {
    return view('demografi');
});
Route::get('/struktur', function () {
    return view('struktur');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/kkn', function () {
    return view('kkn');
});
Route::get('/tesberanda', function () {
    return view('tesberanda');
});
Route::get('/halamanberita', function () {
    return view('halamanberita');
});

Route::get('/testingtes', function () {
    return view('testingtes');
});


Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/upload', function () {
    return view('upload');
});


Route::get('/halamanberita/{id}', [KomentarController::class, 'index']);



Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('auth');
Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/beranda');
})->name('logout');
Route::get('/galeri',[KomentarController::class,'showImages']);
Route::get('/struktur',[KomentarController::class,'showStrukturOrganisasi']);
Route::get('/kkn',[KomentarController::class,'showKKN']);
Route::get('/peta',[KomentarController::class,'showKKNTes']);
Route::get('/search', 'SearchController@index');
Route::get('/beranda', 'SearchController@index');
Route::get('/berita', 'SearchController@news');
Route::get('', 'SearchController@index');
Route::post('/struktur',[KomentarController::class,'index']);

Route::post('/posting/store',[PostController::class,'store']);

Route::get('/explore', function () {
    return view('explore');
}); 
Route::get('/explore/{id}',[SearchController::class,'edit']);

Route::post('/donate', [PostController::class, 'donate'])->name('donate');
Route::post('/topup', [TopupController::class, 'topup'])->name('topup');

Route::post('/explore/{id}/store',[KomentarController::class,'store']);

Route::post('halamanberita/testing/store',[KomentarController::class,'store']);

Route::get('/explore/{id}', [KomentarController::class, 'index']);
Route::get('/postinganuser/{id}', [YourPostController::class, 'index']);

Route::get('/postinganuser/{id}', 'YourPostController@index');
Route::get('/delete/{id}',[PostController::class,'destroy']);



Route::post('/follow', [FollowController::class, 'toggleFollow'])->name('toggleFollow');
Route::get('/explore/{id}', [KomentarController::class, 'index'])->name('explore.show');

