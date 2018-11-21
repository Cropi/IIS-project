<?php

use Illuminate\Database\Seeder;

class TreatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('now');

        DB::table('treatments')->insert(array(
            array(
                'id'                 => 1,
                'diagnosis'          => 'Broken left leg',
                'state'              => 'In process',
                'price'              => '50',
                'user_id'            => '1',
                'animal_id'          => '1',
                'startDate'          => '2018-05-06 07:30:25',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('treatments')->insert(array(
            array(
                'id'                 => 2,
                'diagnosis'          => 'Broken right leg',
                'state'              => 'In process',
                'price'              => '50',
                'user_id'            => '1',
                'animal_id'          => '2',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('treatments')->insert(array(
            array(
                'id'                 => 3,
                'diagnosis'          => 'Infection',
                'state'              => 'In process',
                'price'              => '25',
                'user_id'            => '2',
                'animal_id'          => '3',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('treatments')->insert(array(
            array(
                'id'                 => 4,
                'diagnosis'          => 'Sick feeling',
                'state'              => 'In process',
                'price'              => '10',
                'user_id'            => '3',
                'animal_id'          => '3',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 5,
                'diagnosis'          => 'Infarct',
                'state'              => 'In process',
                'price'              => '100',
                'user_id'            => '2',
                'animal_id'          => '3',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 6,
                'diagnosis'          => 'Diabetic',
                'state'              => 'In process',
                'price'              => '125',
                'user_id'            => '4',
                'animal_id'          => '4',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 7,
                'diagnosis'          => 'Infarct',
                'state'              => 'Finished',
                'price'              => '100',
                'user_id'            => '5',
                'animal_id'          => '5',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 8,
                'diagnosis'          => 'Poisoned',
                'state'              => 'Finished',
                'price'              => '200',
                'user_id'            => '6',
                'animal_id'          => '6',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 9,
                'diagnosis'          => 'Sick feeling',
                'state'              => 'In process',
                'price'              => '10',
                'user_id'            => '7',
                'animal_id'          => '7',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 10,
                'diagnosis'          => 'Diabetes',
                'state'              => 'In process',
                'price'              => '125',
                'user_id'            => '7',
                'animal_id'          => '8',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 11,
                'diagnosis'          => 'Infection',
                'state'              => 'In process',
                'price'              => '25',
                'user_id'            => '8',
                'animal_id'          => '9',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 12,
                'diagnosis'          => 'Burned body',
                'state'              => 'In process',
                'price'              => '50',
                'user_id'            => '9',
                'animal_id'          => '10',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 13,
                'diagnosis'          => 'Infection',
                'state'              => 'In process',
                'price'              => '25',
                'user_id'            => '10',
                'animal_id'          => '11',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 14,
                'diagnosis'          => 'Broken right leg',
                'state'              => 'In process',
                'price'              => '50',
                'user_id'            => '11',
                'animal_id'          => '12',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 15,
                'diagnosis'          => 'Broken arm',
                'state'              => 'In process',
                'price'              => '42',
                'user_id'            => '12',
                'animal_id'          => '13',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 16,
                'diagnosis'          => 'Paralysation',
                'state'              => 'In process',
                'price'              => '350',
                'user_id'            => '13',
                'animal_id'          => '14',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 17,
                'diagnosis'          => 'Sick feeling',
                'state'              => 'In process',
                'price'              => '10',
                'user_id'            => '14',
                'animal_id'          => '15',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 18,
                'diagnosis'          => 'head ache',
                'state'              => 'In process',
                'price'              => '12',
                'user_id'            => '15',
                'animal_id'          => '16',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('treatments')->insert(array(
            array(
                'id'                 => 19,
                'diagnosis'          => 'Critical age',
                'state'              => 'In process',
                'price'              => '99',
                'user_id'            => '16',
                'animal_id'          => '17',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
    }
}
