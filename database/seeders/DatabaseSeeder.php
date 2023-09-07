<?php

namespace Database\Seeders;

use App\Models\Category;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->categories();

        $this->users();

    }

        public function categories(): void
    {
        $names = [
            'Abbigliamento',
            'Sport',
            'Motori',
            'Videogame',
            'Elettronica',
            'Arredamento',
            'Giardinaggio',
            'Cucina',
            'Libri',
            'Giocattoli'];
            
        foreach($names as $name)
        {
            Category::create(
                [
                    'name'=> $name,
                ]
            );
        }
    }

    public function users(): void
    {
        User::create([
            'name' => 'Max',
            'role' => 'admin',
            'email' => 'maxattianesekr94@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Alessandro',
            'role' => 'admin',
            'email' => 'ale@example.it',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Francesco',
            'role' => 'revisor',
            'email' => 'francesco@example.it',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Nunzia',
            'role' => 'revisor',
            'email' => 'nunzia@example.it',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Chiara',
            'role' => 'revisor',
            'email' => 'chiara@example.it',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'example',
            'role' => 'user',
            'email' => 'example@example.it',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);
    }
}
