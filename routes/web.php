<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main_controler;
use App\Http\Controllers\aboute_controler;

use Illuminate\Http\Request;

// Route::view('/', 'welcome')->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::view('dashboard', 'dashboard')->name('dashboard');
// });


Route::get('/', [main_controler::class, "get_info_index"])->name('home');

Route::get("/aboute", [aboute_controler::class, "get_view"])->name('aboute');

Route::post("/aboute", [aboute_controler::class, "post_on_view"])->name('aboute.post');

Route::get("/aboute/{id}", [aboute_controler::class, "message_for_id"])->name("aboute.get.id");

Route::post("/aboute/{id}/delete", [aboute_controler::class, "delete"])->name("aboute.delete.id");

Route::post("/aboute/{id}/edit", [aboute_controler::class, "edit_mes"])->name("aboute.edit");


require __DIR__.'/settings.php';
