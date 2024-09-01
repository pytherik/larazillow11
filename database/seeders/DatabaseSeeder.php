<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Listing::factory(20)->create();

//        Listing::factory()->create([
//            'beds' => 4,
//            'baths' => 1,
//        ...etc....
//        ]);
    }
}
