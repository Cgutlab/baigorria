<?php

use Illuminate\Database\Seeder;

class MetadatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('metadatos')->insert(array (
         0 =>
         array (
           'id'           => 1,
           'keyword'      => 'keywords',
           'texto'        => 'descripcion',
           'seccion'      => 'home',
           'orden'        => 'AA'
         ),
         1 =>
         array (
           'id'           => 2,
           'keyword'      => 'keywords',
           'texto'        => 'descripcion',
           'seccion'      => 'empresa',
           'orden'        => 'BB'
         ),
         2 =>
         array (
           'id'           => 3,
           'keyword'      => 'keywords',
           'texto'        => 'descripcion',
           'seccion'      => 'contacto',
           'orden'        => 'CC'
         ),
       ));
    }
}
