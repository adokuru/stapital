<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
        // \App\Models\User::factory(10)->create();
        $role = Role::create(['name' => 'Admin']);
        $role1 = Role::create(['name' => 'Startups']);
        $role2 = Role::create(['name' => 'Stake Holders']);
        $role3 = Role::create(['name' => 'Investors']);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user1 = User::create([
            'name' => 'Startups',
            'email' => 'startup@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user2 = User::create([
            'name' => 'Stake Holders',
            'email' => 'stakeholder@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user3 = User::create([
            'name' => 'Investors',
            'email' => 'investor@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
