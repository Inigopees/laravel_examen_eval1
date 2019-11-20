<?php

use Illuminate\Database\Seeder;

class tiendas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert([
            'name' => 'game',
            'description' => 'tienda de juegos',
            'password' => 'game1',
            'email' => 'game@gmail.com',
            'likes' => 5,
        ]);
    }
}
