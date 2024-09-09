<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Listing::factory(20)->create();

        User::factory()->create([
            'name' => 'Ernie Berndt',
            'email' => 'ernie@berndt.de',
        ]);
//        Listing::factory()->create([
//            'beds' => 4,
//            'baths' => 1,
//        ...etc....
//        ]);
    }
}
