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
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'state'              => 'In process',
                'price'              => '50',
                'user_id'            => '2',
                'animal_id'          => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('treatments')->insert(array(
            array(
                'id'                 => 2,
                'diagnosis'          => 'Broken right leg',
                'startDate'          => $today->format('Y-m-d H:i:s'),
                'state'              => 'In process',
                'price'              => '50',
                'user_id'            => '2',
                'animal_id'          => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
    }
}
