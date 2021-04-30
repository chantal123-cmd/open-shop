<<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProduitController;
use App\Mail\AjoutProduit;
use App\Models\Produit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'accueil'])->name('accueil');
//Route::middleware(['auth', 'isAdmin'])->group(function () {
//});
Route::resource('produits', ProduitController::class);
Route::get('index', [FormationController::class, 'index']);

Route::get('ajouter-produit', [FormationController::class, 'ajouterProduit']);
Route::get('ajouter-produit-2', [FormationController::class, 'ajouterProduit2']);
Route::get('update-produit', [FormationController::class, 'updateproduit']);
Route::get('update-produit-2/{produit}', [FormationController::class, 'updateproduit2']);
Route::get('suppresion-produit', [FormationController::class, 'suppressionProduit']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('export', [ProduitController::class, 'export'])->name('export');

Route::get('test-mail', function () {
    return new AjoutProduit(Produit::orderByDesc('id')->first());
});

require __DIR__.'/auth.php';
