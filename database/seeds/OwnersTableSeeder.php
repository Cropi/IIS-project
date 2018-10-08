<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('now');

        DB::table('owners')->insert(array(
            array(
                'id'                 => 1,
                'name'               => 'Attila',
                'adress'             => 'Las Vegas',
                'surname'            => 'Lakatos',
                'personalID'         => 'ECECEC',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('owners')->insert(array(
            array(
                'id'                 => 2,
                'name'               => 'Tomas',
                'adress'             => 'Strekov',
                'surname'            => 'Danczi',
                'personalID'         => 'NEVITEL',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
    }
}
