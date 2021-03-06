<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        //
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@darmabangsa.sch.id',
            'password' => bcrypt('secret123'),
            'roles' => "ADMIN",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'User Satu',
            'email' => 'user@darmabangsa.sch.id',
            'password' => bcrypt('secret123'),
            'roles' => "ADMIN",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
