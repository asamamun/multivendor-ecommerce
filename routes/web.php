<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\AuthCheckController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//first loading page start here
Route::get('/', function () {
    return view('home.index');
})->name('home');




// every dashboard start here
Route::get('/dashboard', function () {
    if (Auth::user()->roles ==='admin') {
        return redirect()->intended(route('admin.dashboard', absolute:false));
    }
    if (Auth::user()->roles ==='vendor') {
        return redirect()->intended(route('verdor.dashboard', absolute:false));
    }
    if (Auth::user()->roles ==='user') {
        return redirect()->intended(route('user.dashboard', absolute:false));
    }
 })->middleware(['auth'])->name('dashboard'); 
//  every dashboard end here


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin route gro
Route::middleware(['superadmin'])->group(function () {
    Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard'); 
    // Route::resource('categories', CategoryController::class)->names('category');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubcategoryController::class);
      
});


//vendor route group
Route::middleware(['vendor'])->group(function () {
    Route::get('/vendordashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');    
});

Route::get('/home', [AuthCheckController::class, 'check']);

















require __DIR__.'/auth.php';
