<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\auth\SignInController;
use App\Http\Controllers\produk\MasterProdukController;
use App\Http\Controllers\publication\PublicationController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if(Auth::check()){
        return redirect()->route('dashboard-home');
    } else{
        return redirect()->route('public-home');
    }
})->name('home');

//Public
Route::get('/', function(){
    return view('public_view.index');
})->name('public-home');

Route::get('/tentang-kami', function(){
    return view('public_view.about');
})->name('public-about');

Route::get('/kontak', function(){
    return view('public_view.contact');
})->name('public-kontak');

// Auth
Route::prefix('admin')->group(function () {
    Route::resource('sign-in', SignInController::class);
    Route::get('sign-out', [SignInController::class, 'signOut'])->name('sign-out');

    Route::middleware(['auth'])->group(function () {
        // Main Page Route
        Route::get('/dashboard', [Analytics::class, 'index'])->name('dashboard-home');

        // Produk
        Route::resource('produk', MasterProdukController::class);
        
        // Publikasi
        Route::resource('publikasi', PublicationController::class);

    });
});