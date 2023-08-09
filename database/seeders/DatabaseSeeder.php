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
        $names = ['politica', 'economia', 'food', 'sport', 'tech', 'intrattenimento', 'videogame', 'motori', 'case', 'agricoltura'];
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
