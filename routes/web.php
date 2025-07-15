<?php

use App\Http\Controllers\EstagiosController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('inicio');
// });

Route::get('/',[EstagiosController::class, 'inicioEstagio'])->name('estagios');
//Ensino Superior
//Route::get('/estagio/formulario',[EstagiosController::class, 'formulario'])->name('estagios.formulario');
//Route::post('/estagio/formulario',[EstagiosController::class, 'create'])->name('estagios.create');
//Route::get('/estagio/protocolo',[EstagiosController::class,'protocolo'])->name('estagios.protocolo');
Route::get('/estagio/pdf/protocolo',[PdfController::class,'protocolo'])->name('estagios.pdf.protocolo');
//Novo Edital - Ensino Superior
Route::get('/estagio/formularioES',[EstagiosController::class, 'formularioNovoEdital'])->name('estagios.formularioNovoEdital');
Route::post('/estagio/formularioES',[EstagiosController::class, 'createNovoEdital'])->name('estagios.createNovoEdital');
Route::get('/estagio/protocoloES',[EstagiosController::class,'protocoloNovoEdital'])->name('estagios.protocoloNovoEdital');
Route::get('/estagio/pdf/protocoloES',[PdfController::class,'protocoloNovoEdital'])->name('estagios.pdf.protocoloNovoEdital');
Route::get('/estagio/finishES',[EstagiosController::class,'finishNovoEdital'])->name('estagios.finishNovoEdital');
//Ensino Médio
//Route::get('/estagio/formularioEM',[EstagiosController::class, 'formularioEM'])->name('estagios.formularioEM');
//Route::post('/estagio/formularioEM',[EstagiosController::class, 'createEM'])->name('estagios.createEM');
//Route::get('/estagio/protocoloEM',[EstagiosController::class,'protocoloEM'])->name('estagios.protocoloEM');
//Route::get('/estagio/pdf/protocoloEM',[PdfController::class,'protocoloEM'])->name('estagios.pdf.protocoloEM');

//Route::get('/estagio/cfinish',[EstagiosController::class,'finish'])->name('estagios.finish');

Route::get('/estagios', function () {
    return view('estagio');
});
