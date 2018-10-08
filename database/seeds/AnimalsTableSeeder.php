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
                'name'               => 'Mighty',
                'type'               => 'American bully',
                'birthday'           => '2005-07-29 20:15:12',
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
                'type'               => 'Dalmata',
                'birthday'           => '2000-07-29 20:15:12',
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
                'type'               => 'Dalmata',
                'birthday'           => '2008-03-29 20:15:12',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 1,
             ),
        ));
    }
}
