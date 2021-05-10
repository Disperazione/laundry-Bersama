<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
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
        //
        DB::table('users')->insert([
            'nama' => 'Radit',
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('admin'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'nama' => 'Radit',
            'username' => 'kasir',
            'role' => 'kasir',
            'password' => Hash::make('kasir'),
            'created_at' => Carbon::now(),
        ]);
    }
}
