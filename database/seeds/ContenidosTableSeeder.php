<?php

use Illuminate\Database\Seeder;

class ContenidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('contenidos')->insert(array (
         0 =>
         array (
           'id'           => 1,
           'imagen'       => 'no-imagen.jpg',
           'titulo_es'    => 'titulo español',
           'subtitulo_es' => 'subtitulo español',
           'texto_es'     => 'texto español',
           'titulo_en'    => 'titulo english',
           'subtitulo_en' => 'subtitulo english',
           'texto_en'     => 'texto english',
           'titulo_br'    => 'titulo portugues',
           'subtitulo_br' => 'subtitulo portugues',
           'texto_br'     => 'texto portugues',
           'ruta'         => '#',
           'seccion'      => 'home'
         ),
         1 =>
         array (
           'id'           => 2,
           'imagen'       => 'no-imagen.jpg',
           'titulo_es'    => 'titulo español',
           'subtitulo_es' => 'subtitulo español',
           'texto_es'     => 'texto español',
           'titulo_en'    => 'titulo english',
           'subtitulo_en' => 'subtitulo english',
           'texto_en'     => 'texto english',
           'titulo_br'    => 'titulo portugues',
           'subtitulo_br' => 'subtitulo portugues',
           'texto_br'     => 'texto portugues',
           'ruta'         => '#',
           'seccion'      => 'empresa'
         ),
         2 =>
         array (
           'id'           => 3,
           'imagen'       => 'no-imagen.jpg',
           'titulo_es'    => 'titulo español',
           'subtitulo_es' => 'subtitulo español',
           'texto_es'     => 'texto español',
           'titulo_en'    => 'titulo english',
           'subtitulo_en' => 'subtitulo english',
           'texto_en'     => 'texto english',
           'titulo_br'    => 'titulo portugues',
           'subtitulo_br' => 'subtitulo portugues',
           'texto_br'     => 'texto portugues',
           'ruta'         => '#',
           'seccion'      => 'contacto'
         ),
       ));
    }
}
