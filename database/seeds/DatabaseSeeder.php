<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('employees')->insert([
            'first_name'=> Str::random(5),
            'last_name' => Str::random(5),
            'company'	=> '1',
            'email'		=> Str::random(10).'@gmail.com',
            'phone'		=> Str::random(10),
        ]);
    }
}
