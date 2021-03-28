<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\state;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        state::create([
            'name' => 'Abuja FCT',
            'countries_id'=> 1
        ]);
        state::create([
            'name' => 'Lagos',
            'countries_id'=> 1
        ]);
        state::create([
            'name' => 'Edo',
            'countries_id'=> 1
        ]);
        state::create([
            'name' => 'Ogun',
            'countries_id'=> 1
        ]);
        state::create([
            'name' => 'Cross River',
            'countries_id'=> 1
        ]);
    }
}
