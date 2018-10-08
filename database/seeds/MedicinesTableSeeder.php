<?php

use Illuminate\Database\Seeder;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('now');

        DB::table('medicines')->insert(array(
            array(
                'id'                 => 1,
                'name'               => 'Paralen',
                'type'               => 'tablet',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('medicines')->insert(array(
            array(
                'id'                 => 2,
                'name'               => 'Ibalgin',
                'type'               => 'tablet',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

    }
}
