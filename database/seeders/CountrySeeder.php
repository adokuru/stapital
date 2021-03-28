<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        country::create([
            'name' => 'Nigeria',
            'short_name' => 'NGN',
            'phonecode' => 234
        ]);
    }
}
