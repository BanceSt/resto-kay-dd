<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tags')->insert([
            ["name" => "entrée"],
            ["name" => "plat principal"],
            ["name" => "dessert"],
            ["name" => "accompagnement"],
            ["name" => "boisson"],
            ["name" => "pizzas et quiches"],
            ["name" => "spécialités locales"],
            ["name" => "salades"],
            ["name" => "sandwish et burger"],
            ["name" => "soupes"]
        ]);

    }
}
