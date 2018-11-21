<?php

use Illuminate\Database\Seeder;

class MedicineTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('now');

        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Rabbit',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        // 2.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Rabbit',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 3.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '3',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '3',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '3',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '3',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 4.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '4',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '4',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '4',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 5.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '5',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '5',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '5',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Rabbit',
                'medicine_id'        => '5',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 6.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '6',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '6',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '6',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        // 7.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '7',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '7',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '7',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        // 8.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '8',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '8',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '8',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 9.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '9',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '9',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '9',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        // 10.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '10',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '10',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '10',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 11.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '11',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Racoon',
                'medicine_id'        => '11',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Rabbit',
                'medicine_id'        => '11',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 12.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '12',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Racoon',
                'medicine_id'        => '12',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Rabbit',
                'medicine_id'        => '12',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 13.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '13',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Racoon',
                'medicine_id'        => '13',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Rabbit',
                'medicine_id'        => '13',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 14.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '14',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Racoon',
                'medicine_id'        => '14',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Rabbit',
                'medicine_id'        => '14',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 15.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 16.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 17.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 18.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));


        // 19.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 20.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 21.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        // 22.
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Camel',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Cat',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Chicken',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Donkey',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Dog',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Horse',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Perrot',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicine_types')->insert(array(
            array(
                'type'               => 'Pig',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
    }
}
