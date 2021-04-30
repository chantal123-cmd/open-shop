<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([

            "libelle" => 'Materiels electroniques',
            "description" => 'descriptions Materiels electroniques',
        ]);

        Category::create([

            "libelle" => 'Cosmetiques',
            "description" => 'descriptions Cosmetiques',
        ]);


    }
}
