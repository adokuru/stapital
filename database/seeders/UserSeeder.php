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
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'startups']);
        Role::create(['name' => 'stake-holders']);
        Role::create(['name' => 'investors']);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user->assignRole('admin');
        $user1 =User::create([
            'name' => 'Startups',
            'email' => 'startup@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user1->assignRole('startups');
        $user2 =User::create([
            'name' => 'Stake Holders',
            'email' => 'stakeholder@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user2->assignRole('stake-holders');
        $user3 =User::create([
            'name' => 'Investors',
            'email' => 'investor@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user3->assignRole('investors');
    }
}
