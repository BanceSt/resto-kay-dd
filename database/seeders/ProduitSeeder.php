<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Entrée
        DB::table('produits')->insert([
            ["name" => "Salade chèvre chaud",
             "description" => "Une salade composée avec du fromage de chèvre servis sur des tranches de pains",
             "img" => "/storage/produits/salade-chevre-chaud.jpg",
             "price" => 3.99],

            ["name" => "Bruschetta au jambom",
             "description" => null,
             "img" => "/storage/produits/Bruschetta_jambom.jpg",
             "price" => 3.99],

            ["name" => "Antipasti",
             "description" => null,
             "img" => "/storage/produits/antipasti.png",
             "price" => 3.99],
        ]);
    }
}
