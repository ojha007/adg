<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'amdivgroup@gmail.com'
        ], [
            'password' => Hash::make('admin@321'),
            'name' => 'American Diversity Group'
        ]);
    }
}
