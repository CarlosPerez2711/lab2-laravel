

<?php

use App\Http\Controllers\ServiciosController;

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::view('contacto', 'contacto')->name('contacto');

Route::get('servicios', [ServiciosController::class, 'index'])->name('servicios');


?>





