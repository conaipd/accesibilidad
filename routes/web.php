<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('/home');
});

// Ruta para /a/c1
Route::get('/a/c1', function () {
    return view('/a/c1');
});

// Ruta para /a/c2
Route::get('/a/c2', function () {
    return view('/a/c2');
});

// Ruta para /a/c3
Route::get('/a/c3', function () {
    return view('/a/c3');
});

// Ruta para /a/c4
Route::get('/a/c4', function () {
    return view('/a/c4');
});

// Ruta para /a/c5
Route::get('/a/c5', function () {
    return view('/a/c5');
});

// Ruta para /a/c6
Route::get('/a/c6', function () {
    return view('/a/c6');
});

// Ruta para /a/c7
Route::get('/a/c7', function () {
    return view('/a/c7');
});

// Ruta para /a/c8
Route::get('/a/c8', function () {
    return view('/a/c8');
});

// Ruta para /a/c9
Route::get('/a/c9', function () {
    return view('/a/c9');
});

// Ruta para /a/c10
Route::get('/a/c10', function () {
    return view('/a/c10');
});

// Ruta para /a/c11
Route::get('/a/c11', function () {
    return view('/a/c11');
});

// Ruta para /a/c12
Route::get('/a/c12', function () {
    return view('/a/c12');
});

// Ruta para /a/c13
Route::get('/a/c13', function () {
    return view('/a/c13');
});

// Ruta para /a/c14
Route::get('/a/c14', function () {
    return view('/a/c14');
});

// Ruta para /a/c15
Route::get('/a/c15', function () {
    return view('/a/c15');
});

// Ruta para /a/c16
Route::get('/a/c16', function () {
    return view('/a/c16');
});

// Ruta para /a/c17
Route::get('/a/c17', function () {
    return view('/a/c17');
});

// Ruta para /a/c18
Route::get('/a/c18', function () {
    return view('/a/c18');
});

// Ruta para /a/c19
Route::get('/a/c19', function () {
    return view('/a/c19');
});

// Ruta para el formulario con identificación de errores
Route::get('/formulario', [FormController::class, 'showForm'])->name('formulario.show');
Route::post('/formulario', [FormController::class, 'handleForm'])->name('formulario.handle');
Route::get('/formulario-se', [FormController::class, 'showFormWithoutErrors'])->name('formulario.sinErrores');
Route::post('/formulario-se', [FormController::class, 'handleFormWithoutErrors'])->name('formulariosinerrores.handle');



// Ruta para /a/c20
Route::get('/a/c20', function () {
    return view('/a/c20');
});




// Ruta para /aa/c1
Route::get('/aa/c1', function () {
    return view('/aa/c1');
});

// Ruta para /aa/c2
Route::get('/aa/c2', function () {
    return view('/aa/c2');
});

// Ruta para /aa/c3
Route::get('/aa/c3', function () {
    return view('/aa/c3');
});

// Ruta para /aa/c4
Route::get('/aa/c4', function () {
    return view('/aa/c4');
});

// Ruta para /aa/c5
Route::get('/aa/c5', function () {
    return view('/aa/c5');
});

// Ruta para /aa/c6
Route::get('/aa/c6', function () {
    return view('/aa/c6');
});

// Ruta para /aa/c7
Route::get('/aa/c7', function () {
    return view('/aa/c7');
});

// Ruta para /aa/c8
Route::get('/aa/c8', function () {
    return view('/aa/c8');
});

// Ruta para /aa/c9
Route::get('/aa/c9', function () {
    return view('/aa/c9');
});

// Ruta para /aa/c10
Route::get('/aa/c10', function () {
    return view('/aa/c10');
});

// Ruta para /aa/c11
Route::get('/aa/c11', function () {
    return view('/aa/c11');
});





Route::get('/aaa/c1', function () { 
    return view('/aaa/c1'); 
});

Route::get('/aaa/c2', function () { 
    return view('/aaa/c2'); 
});

Route::get('/aaa/c3', function () { 
    return view('/aaa/c3'); 
});

Route::get('/aaa/c4', function () { 
    return view('/aaa/c4'); 
});

Route::get('/aaa/c5', function () { 
    return view('/aaa/c5'); 
});

Route::get('/aaa/c6', function () { 
    return view('/aaa/c6'); 
});

Route::get('/aaa/c7', function () { 
    return view('/aaa/c7'); 
});

Route::get('/aaa/c8', function () { 
    return view('/aaa/c8'); 
});

Route::get('/aaa/c9', function () { 
    return view('/aaa/c9'); 
});

Route::get('/aaa/c10', function () { 
    return view('/aaa/c10'); 
});

Route::get('/aaa/c11', function () { 
    return view('/aaa/c11'); 
});

Route::get('/aaa/c12', function () { 
    return view('/aaa/c12'); 
});

Route::get('/aaa/c13', function () { 
    return view('/aaa/c13'); 
});

Route::get('/aaa/c14', function () { 
    return view('/aaa/c14'); 
});

Route::get('/aaa/c15', function () { 
    return view('/aaa/c15'); 
});

