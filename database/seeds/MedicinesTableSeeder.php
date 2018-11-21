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
                'name'               => 'Penicillin',
                'type'               => 'tablet',
                'activeIngredients'  => 'antibiotic',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 2,
                'name'               => 'Insulin',
                'type'               => 'tablet',
                'activeIngredients'  => 'conversion of sugar to energy',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 3,
                'name'               => 'Smallpox vaccine',
                'type'               => 'injection',
                'activeIngredients'  => 'vaccine',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 4,
                'name'               => 'Morphine',
                'type'               => 'injection',
                'activeIngredients'  => 'tranquilizer',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('medicines')->insert(array(
            array(
                'id'                 => 5,
                'name'               => 'Aspirin',
                'type'               => 'tablet',
                'activeIngredients'  => 'against muscle pain',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 6,
                'name'               => 'Polio vaccine',
                'type'               => 'injection',
                'activeIngredients'  => 'vaccine',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 7,
                'name'               => 'Ether',
                'type'               => 'tablet',
                'activeIngredients'  => 'anaesthetic',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 8,
                'name'               => 'Aflamin',
                'type'               => 'creme',
                'activeIngredients'  => 'sedative',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 9,
                'name'               => 'Algoflex',
                'type'               => 'tablet',
                'activeIngredients'  => 'against headache',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 10,
                'name'               => 'Algopyrin',
                'type'               => 'liquid',
                'activeIngredients'  => 'against toothache',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 11,
                'name'               => 'Penicillin 400',
                'type'               => 'tablet',
                'activeIngredients'  => 'antibiotic',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 12,
                'name'               => 'Penicillin 500',
                'type'               => 'tablet',
                'activeIngredients'  => 'antibiotic',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 13,
                'name'               => 'Penicillin 750',
                'type'               => 'tablet',
                'activeIngredients'  => 'antibiotic',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 14,
                'name'               => 'Penicillin 1000',
                'type'               => 'tablet',
                'activeIngredients'  => 'antibiotic',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 15,
                'name'               => 'Ibalgin 600',
                'type'               => 'capsule',
                'activeIngredients'  => 'sedative',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 16,
                'name'               => 'Ibalgin 750',
                'type'               => 'capsule',
                'activeIngredients'  => 'sedative',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 17,
                'name'               => 'Ibalgin 1000',
                'type'               => 'injection',
                'activeIngredients'  => 'sedative',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 18,
                'name'               => 'Brexin 400',
                'type'               => 'injection',
                'activeIngredients'  => 'muscle pain',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 19,
                'name'               => 'Brexin 700',
                'type'               => 'capsule',
                'activeIngredients'  => 'muscle pain',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 20,
                'name'               => 'Brexin 850',
                'type'               => 'capsule',
                'activeIngredients'  => 'muscle pain',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 21,
                'name'               => 'Coldrex 750',
                'type'               => 'tablet',
                'activeIngredients'  => 'against coughing',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('medicines')->insert(array(
            array(
                'id'                 => 22,
                'name'               => 'Coldrex 1000',
                'type'               => 'tablet',
                'activeIngredients'  => 'against coughing',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

    }
}
