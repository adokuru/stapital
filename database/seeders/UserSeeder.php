<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Startups']);
        Role::create(['name' => 'Stake Holders']);
        Role::create(['name' => 'Investors']);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Startups',
            'email' => 'startup@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Stake Holders',
            'email' => 'stakeholder@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Investors',
            'email' => 'investor@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
