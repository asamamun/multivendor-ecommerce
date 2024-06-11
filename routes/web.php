<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthCheckController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin route group
Route::middleware(['superadmin'])->group(function () {
    Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');    
});
//vendor route group
Route::middleware(['vendor'])->group(function () {
    Route::get('/vendordashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');    
});

Route::get('/home', [AuthCheckController::class, 'check']);
// Route::get('/home', [AdminController::class, 'show']);














require __DIR__.'/auth.php';
