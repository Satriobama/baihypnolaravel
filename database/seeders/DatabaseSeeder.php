<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('users')->truncate(); // Kosongkan tabel

        User::factory()->create([
            'username' => 'admin',
            'password' => Hash::make('admin12345'), // password is 'admin12345'
        ]);

        User::factory()->create([
            'username' => 'iniadmin',
            'password' => Hash::make('iniadmin123'),
        ]);

        User::factory()->create([
            'username' => 'baiduri123',
            'password' => Hash::make('jambore82'),
        ]);
    }
}
