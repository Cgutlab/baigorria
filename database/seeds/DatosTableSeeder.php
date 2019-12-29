<?php

use Illuminate\Database\Seeder;

class DatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('datos')->insert(array (
         0 =>
         array (
           'id'           => 1,
           'tipo'         => 'correo',
           'texto'        => 'correo',
           'orden'        => 'AA'
         ),
         1 =>
         array (
           'id'           => 2,
           'tipo'         => 'direccion',
           'texto'        => 'direccion',
           'orden'        => 'BB'
         ),
         2 =>
         array (
           'id'           => 3,
           'tipo'         => 'telefono',
           'texto'        => 'telefono',
           'orden'        => 'CC'
         ),
       ));
    }
}
