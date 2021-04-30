<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;

class FormationController extends Controller







{
    public function index()
    {

        //$produits= Produit::all();
        //$produit= Produit::first();
        //$produit2= Produit::where(["prix"=>5000000, "quantite"=>500])->get();

        $produit1 = Produit::first();

        $user1 = User::first();

        $user1->produits() ->attach($produit1);
        dd($produit1->users);

        $category1 = Category::first();

        

        $produit1->category_id = $category1->id;
        $produit1->save();


        dd($category1->produits);
        dd($produit1->category);
    }




    public function ajouterProduit()
    {
        $produit = new Produit();   
        $produit->designation = 'Maxwell';
        $produit->prix = 8000;
        $produit->description = "Maxwell est un super café";
        $produit->quantite = 30;
        $produit->save();

        dd ($produit);  
       }
       public function ajouterProduit2( )
       
       {
       $produit= Produit::create([
            "designation"=> "ordinateur",
            "prix"=> 5000000,
            "description"=> "la description de l ordinateur",
            "quantite"=> 30,

        ]);


        dd($produit);
       }
       public function updateProduit()
        {
            $produit1= Produit::first();
            $produit1->designation = "avovita";
            $produit1->prix= 1800;
            $produit1->description = "pommade de soins corporelle";
            $produit1->quantite= 10;
            $produit1->save();

            dd($produit1);



        }
        public function updateProduit2( Produit $produit)
        {

              //$produit2 = Produit::findOrFail($id);

              dd($produit->designation);

             $result = Produit::where("id", $produit->id)->update([
                  "designation"=>"telephone",
                  "prix"=>50000,
                  "quantite"=> 26

              ]);

              dd($produit->designation, $result);


              

        }

        public function suppressionProduit()
        {

          $result =  Produit::destroy(1);
          dd($result);

        }

       
}
