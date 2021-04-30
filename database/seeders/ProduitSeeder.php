<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Produit::factory(500)->create();





//         $produit=Produit::create([
// 'designation'=>'pantalon',
// 'prix'=>5000,
// 'description'=>'tres lourd',
// 'quantite'=>20,

//         ]);
    }
}
