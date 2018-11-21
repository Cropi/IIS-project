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
                'type'               => 'Camel',
                'birthday'           => '2008-02-10',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 1,
             ),
        ));

        DB::table('animals')->insert(array(
            array(
                'id'                 => 2,
                'name'               => 'Emmitt',
                'type'               => 'Cat',
                'birthday'           => '2010-05-29',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 1,
             ),
        ));

        DB::table('animals')->insert(array(
            array(
                'id'                 => 3,
                'name'               => 'Twix',
                'type'               => 'Chicken',
                'birthday'           => '2017-01-25',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 2,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 4,
                'name'               => 'Dewey',
                'type'               => 'Donkey',
                'birthday'           => '2012-09-05',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 2,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 5,
                'name'               => 'Pretzel',
                'type'               => 'Dog',
                'birthday'           => '2016-05-20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 1,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 6,
                'name'               => 'Willy',
                'type'               => 'Horse',
                'birthday'           => '2017-01-05',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 3,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 7,
                'name'               => 'Floppy',
                'type'               => 'Perrot',
                'birthday'           => '2010-05-29',
                'lastVisit'          => '2008-06-21 09:00:00',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 3,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 8,
                'name'               => 'Mickey',
                'type'               => 'Pig',
                'birthday'           => '2014-06-21',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 3,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 9,
                'name'               => 'Gandalf',
                'type'               => 'Racoon',
                'birthday'           => '2018-01-01',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 4,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 10,
                'name'               => 'Yogurt',
                'type'               => 'Cat',
                'birthday'           => '2008-03-29',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 5,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 11,
                'name'               => 'Odie',
                'type'               => 'Cat',
                'birthday'           => '2013-02-28',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 6,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 12,
                'name'               => 'Natasha',
                'type'               => 'Cat',
                'birthday'           => '2014-05-18',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 7,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 13,
                'name'               => 'Hobo',
                'type'               => 'Dog',
                'birthday'           => '2013-09-30',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 6,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 14,
                'name'               => 'Stinky',
                'type'               => 'Dog',
                'birthday'           => '2006-01-29',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 7,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 15,
                'name'               => 'Fiddle',
                'type'               => 'Dog',
                'birthday'           => '2014-12-29',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 8,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 16,
                'name'               => 'Sanyika',
                'type'               => 'Dog',
                'birthday'           => '2010-03-03',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 9,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 17,
                'name'               => 'Hoagie',
                'type'               => 'Dog',
                'birthday'           => '2011-11-11',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 10,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 18,
                'name'               => 'Mic',
                'type'               => 'Rabbit',
                'birthday'           => '2005-05-05',
                'lastVisit'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 11,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 19,
                'name'               => 'Saint',
                'type'               => 'Rabbit',
                'birthday'           => '2009-09-09',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 12,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 20,
                'name'               => 'Barley',
                'type'               => 'Rabbit',
                'birthday'           => '2004-06-20',
                'lastVisit'          => '2008-06-20 07:00:00',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 12,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 21,
                'name'               => 'Coconut',
                'type'               => 'Rabbit',
                'birthday'           => '2014-02-28',
                'lastVisit'          => '2008-06-20 08:00:00',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 12,
             ),
        ));
        DB::table('animals')->insert(array(
            array(
                'id'                 => 22,
                'name'               => 'Deku',
                'type'               => 'Rabbit',
                'birthday'           => '2014-10-10',
                'lastVisit'          => '2008-06-20 08:25:00',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
                'owner_id'           => 12,
             ),
        ));
    }
}
