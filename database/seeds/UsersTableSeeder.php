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
        $today = new DateTime('now');

        DB::table('users')->insert(array(
            array(
                'id'                 => 1,
                'name'               => 'a',
                'email'              => 'a@a.a',
                'password'           => bcrypt('a'),
                'role'               => 'csira',
                'adress'             => 'NewCastle',
                'bankAccountNumber'  => 'BankAccNum',
                'wage'               => '42',
                'remember_token'     => NULL,
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
            ),
        ));
    }
}