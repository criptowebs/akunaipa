<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Department;
use App\Models\Favorite;
use App\Models\ImagesPublication;
use App\Models\Municipalitie;
use App\Models\Prices_publication;
use App\Models\Publication;
use App\Models\User;
use App\Models\UserState;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // \App\Models\User::factory(10)->create();

        // Department::factory(5)->create();
        // Municipalitie::factory(5)->create();
        // Categorie::factory(1)->create();
        // User::factory(100)->create();
        // UserState::factory(1)->create();
        Publication::factory(20)->create();
        // Favorite::factory(100)->create();
        // ImagesPublication::factory(100)->create();
        // Prices_publication::factory(99)->create();
    }
}
