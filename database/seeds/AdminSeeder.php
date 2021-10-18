<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin_'.\Str::random(5),
            'email' => "admin@gmail.com",
            'password' => Hash::make(123456789),
        ]);
    }
}
