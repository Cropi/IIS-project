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
                'role'               => 'nurse',
                'adress'             => 'NewCastle',
                'bankAccountNumber'  => 'BankAccNum',
                'wage'               => '42',
                'remember_token'     => NULL,
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'lastLogin'          => $today->format('Y-m-d H:i:s'),
            ),
        ));

        DB::table('users')->insert(array(
            array(
                'id'                 => 2,
                'name'               => 'Attila Lakatos',
                'email'              => 'aaa@aaa.aaa',
                'password'           => bcrypt('aaaaaa'),
                'role'               => 'veterinarian',
                'adress'             => 'Komarno',
                'bankAccountNumber'  => 'ASD123',
                'wage'               => '420',
                'remember_token'     => NULL,
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'lastLogin'          => $today->format('Y-m-d H:i:s'),
            ),
        ));

        DB::table('users')->insert(array(
            array(
                'id'                 => 3,
                'name'               => 'nurse',
                'email'              => 'nurse@nurse.nurse',
                'password'           => bcrypt('aaaaaa'),
                'role'               => 'nurse',
                'adress'             => 'Komarno',
                'bankAccountNumber'  => 'ASD123',
                'wage'               => '420',
                'remember_token'     => NULL,
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'lastLogin'          => $today->format('Y-m-d H:i:s'),
            ),
        ));

    }
}
