<?php

namespace Database\Seeders;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $names = ['Abbigliamento', 'Sport', 'Motori', 'Videogames', 'Elettronica', 'Arredamento', 'Giardinaggio', 'Cucina', 'Libri', 'Giocattoli'];
        foreach($names as $name)
        {
            Category::create(
                [
                    'name'=> $name,
                ]
            );
        }
    }
}
