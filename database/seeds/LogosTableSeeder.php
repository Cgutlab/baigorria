<?php

use Illuminate\Database\Seeder;

class LogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('logos')->insert(array (
         0 =>
         array (
           'id'           => 1,
           'tipo'         => 'header',
           'imagen'       => 'no-image.png',
           'orden'        => 'AA'
         ),
         1 =>
         array (
           'id'           => 2,
           'tipo'         => 'footer',
           'imagen'       => 'no-image.png',
           'orden'        => 'BB'
         ),
         2 =>
         array (
           'id'           => 3,
           'tipo'         => 'favicon',
           'imagen'       => 'no-image.png',
           'orden'        => 'CC'
         ),
       ));
    }
}
