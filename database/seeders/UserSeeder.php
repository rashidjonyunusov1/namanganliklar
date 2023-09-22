<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Shohrux',
            'email' => 'shohrux@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
        $user->assignRole([1]);

        $user = User::create([
            'name' => 'Abubakr',
            'email' => 'abubakr@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
        $user->assignRole([2]);

        $user = User::create([
            'name' => 'Diyorbek',
            'email' => 'diyorbek@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
        $user->assignRole([3]);
    }
}
