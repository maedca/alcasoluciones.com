<?php

use Illuminate\Database\Seeder;

class UserAdminSeed extends Seeder
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
            'name' => 'admin',
            'email' => 'test@example.com',
            'password' => bcrypt('admin')
        ]);

    }
}
