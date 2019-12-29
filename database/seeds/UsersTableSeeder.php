<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
     		\DB::table('users')->insert(array (
     			0 =>
     			array (
     				'id'           => 1,
     				'user'         => 'pablo',
     				'email'         => 'soporte@osole.es',
     				'role'         => 'admin',
     				'password'     => Hash::make('pablo')
     			),
     			1 =>
     			array (
     				'id'           => 2,
     				'user'         => 'carlos',
     				'email'         => 'cgutlab@gmail.com',
     				'role'         => 'user',
     				'password'     => Hash::make('carlos')
     			),
     		));
     }
}
