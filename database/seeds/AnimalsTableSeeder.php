<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('now');

        DB::table('animals')->insert(array(
            array(
                'id'                 => 1,
                'name'               => 'Crash',
                'type'               => 'Cat',
                'birthday'           => '2008-07-29',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 1,
             ),
        ));

        DB::table('animals')->insert(array(
            array(
                'id'                 => 2,
                'name'               => 'Ada',
                'type'               => 'Dog',
                'birthday'           => '1996-08-29',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 1,
             ),
        ));

        DB::table('animals')->insert(array(
            array(
                'id'                 => 3,
                'name'               => 'Sanyika',
                'type'               => 'Perrot',
                'birthday'           => '2008-03-29',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 1,
             ),
        ));
    }
}
