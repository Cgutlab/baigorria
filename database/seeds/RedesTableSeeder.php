<?php

use Illuminate\Database\Seeder;

class RedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('redes')->insert(array (
         0 =>
         array (
           'id'           => 1,
           'seccion'      => 'footer',
           'titulo'        => 'Facebook',
           'icono'         => 'fab fa-facebook-square',
           'imagen'        => '',
           'link'         => 'https://www.facebook.com/',
           'orden'        => 'AA',
         ),
         1 =>
         array (
           'id'           => 2,
           'seccion'      => 'footer',
           'titulo'        => 'Youtube',
           'icono'         => 'fab fa-youtube',
           'imagen'        => '',
           'link'         => 'https://www.youtube.com/',
           'orden'        => 'BB',
         ),
         2 =>
         array (
           'id'           => 3,
           'seccion'      => 'footer',
           'titulo'        => 'Instagram',
           'icono'         => 'fab fa-instagram',
           'imagen'        => '',
           'link'         => 'https://www.instagram.com/',
           'orden'        => 'CC',
         ),
       ));
    }
}
