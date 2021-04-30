<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;

class MainController extends Controller
{
    public function accueil()
    {
        // $user = User::orderByDesc('id')->first();
        //$user =user::all();
        //dd($users);

        //$collect1 = collect(["orange" , "Banane", "mangue"]);

        // $produits = Produit::all();

        //dd($collect2->sortByDesc('prix'));
        //dd($produits);
        // $produitsFiltres = $produits->filter(function ($produit, $key) {
        //     return $produit->prix > 100000 && $produit->prix < 500000;
        // });
        // dd($produitsFiltres);

        // dd($collect1)->orderBy();

        //dd($user->isAdmin());
        //$produits = Produit::orderByDesc('id')->first();

        $produits = Produit::all();

        return view('welcome', ['produits' => $produits]);
    }
}
