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

        DB::table('tiendas')->insert([
            'name' => 'zara',
            'description' => 'tienda de ropa',
            'password' => 'zara1',
            'email' => 'zara@gmail.com',
            'likes' => 6,
        ]);

        DB::table('tiendas')->insert([
            'name' => 'eroski',
            'description' => 'tienda de todo',
            'password' => 'eroski',
            'email' => 'eroski@gmail.com',
            'likes' => 2,
        ]);
    }
}
