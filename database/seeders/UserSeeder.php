<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        // Users Crrated Admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt(123456789),
            'is_admin' => 1,
        ]);

        // Users Crrated Admin
        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt(123456789),
            'is_admin' => 0,
        ]);
    }
}
