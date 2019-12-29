<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('sliders')->insert(array (
         0 =>
         array (
           'id'           => 1,
           'imagen'       => 'no-image.jpg',
           'titulo_es'    => 'titulo español',
           'subtitulo_es' => 'subtitulo español',
           'titulo_en'    => 'titulo english',
           'subtitulo_en' => 'subtitulo english',
           'titulo_br'    => 'titulo portugues',
           'subtitulo_br' => 'subtitulo portugues',
           'seccion'      => 'home',
           'orden'        => 'AA'
         ),
         1 =>
         array (
           'id'           => 2,
           'imagen'       => 'no-image.jpg',
           'titulo_es'    => 'titulo español',
           'subtitulo_es' => 'subtitulo español',
           'titulo_en'    => 'titulo english',
           'subtitulo_en' => 'subtitulo english',
           'titulo_br'    => 'titulo portugues',
           'subtitulo_br' => 'subtitulo portugues',
           'seccion'      => 'empresa',
           'orden'        => 'AA'
         ),
       ));
    }
}
