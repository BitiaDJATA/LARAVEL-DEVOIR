<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotationController;
use App\Http\Controllers\InternauteController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::get('/creationDeCompte', function () {
    return view('signup');
})->name('signup.blade')->middleware('guest');
Route::post("/store", [InternauteController::class, "signUp"])
    ->name("users.store")
    ->middleware('guest');

Route::get("/login", [AuthController::class, "showLogin"])
    ->name("login")
    ->middleware('guest');

Route::post("/login", [InternauteController::class, "login"])
    ->name("login.post")
    ->middleware('guest');


Route::get('/index', [UniversityController::class, "index_two"])->name('index.blade');


Route::post("/logout", [AuthController::class, "logout"])->name('logout');
Route::get('notations', [NotationController::class, 'index'])->name('notations.index');
Route::get('notations/create', [NotationController::class, 'create'])->name('notations.create');
Route::post('notations', [NotationController::class, 'store'])->name('notations.store');
Route::get('notations/{id}', [NotationController::class, 'show'])->name('notations.show');
Route::get('notations/{id}/edit', [NotationController::class, 'edit'])->name('notations.edit');
Route::put('notations/{id}', [NotationController::class, 'update'])->name('notations.update');
Route::delete('notations/{id}', [NotationController::class, 'destroy'])->name('notations.destroy');

//route commentaire
Route::get('Commentaires', [CommentaireController::class, 'index'])->name('Commentaires.index');
Route::get('Commentaires/create', [CommentaireController::class, 'create'])->name('Commentaires.create');
Route::post('Commentaires', [CommentaireController::class, 'store'])->name('Commentaires.store');
Route::get('Commentaires/{id}', [CommentaireController::class, 'show'])->name('Commentaires.show');
Route::get('Commentaires/{id}/edit', [CommentaireController::class, 'edit'])->name('Commentaires.edit');
Route::put('Commentaires/{id}', [CommentaireController::class, 'update'])->name('Commentaires.update');
Route::delete('Commentaires/{id}', [CommentaireController::class, 'destroy'])->name('Commentaires.destroy');

//route internautes
Route::get('Internautes', [InternauteController::class, 'index'])->name('Internautes.index');
Route::get('Internautes/create', [InternauteController::class, 'create'])->name('Internautes.create');
Route::post('Internautes', [InternauteController::class, 'store'])->name('Internautes.store');
Route::get('Internautes/{id}', [InternauteController::class, 'show'])->name('Internautes.show');
Route::get('Internautes/{id}/edit', [InternauteController::class, 'edit'])->name('Internautes.edit');
Route::put('Internautes/{id}', [InternauteController::class, 'update'])->name('Internautes.update');
Route::delete('Internautes/{id}', [InternauteController::class, 'destroy'])->name('Internautes.destroy');

//route university
Route::get('Universities', [UniversityController::class, 'index'])->name('Universities.index');
Route::get('Universities/create', [UniversityController::class, 'create'])->name('Universities.create');
Route::post('Universities', [UniversityController::class, 'store'])->name('Universities.store');
Route::get('Universities/{id}', [UniversityController::class, 'show'])->name('Universities.show');
Route::get('Universities/{id}/edit', [UniversityController::class, 'edit'])->name('Universities.edit');
Route::put('Universities/{id}', [UniversityController::class, 'update'])->name('Universities.update');
Route::delete('Universities/{id}', [UniversityController::class, 'destroy'])->name('Universities.destroy');


Route::get('/index/collection', [UniversityController::class, "index_three"])->name('listView.blade');

Route::get('/list', [UniversityController::class, "index"])->name('list.blade');

Route::get('/detaillist/{id}', [UniversityController::class, "show_univers"])->name('detaillist.show');

Route::get('/mapage', function () {
    return view('mapage');
})->name('mapage.blade');

Route::get('/admin', [UniversityController::class, "index"])->name('admin.blade');
Route::get('/admin/comments', [CommentaireController::class, "index"])->name('adminManage.blade');
Route::get('/admin/notations', [NotationController::class, "index"])->name('adminNotation.blade');
Route::get('/modererCom', function () {
    return view('modererCom');
})->name('modererCom.blade');

