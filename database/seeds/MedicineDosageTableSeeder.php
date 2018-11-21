<?php

use Illuminate\Database\Seeder;

class MedicineDosageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('now');

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '4',
                'treatment_id'       => '1',
                'user_id'            => '1',
                'user_id_given_by'   => '1',
                'disease'            => 'tranquilizer',
                // 'amount1'            => '',
                // 'amount2'            => '',
                // 'timeToConsume1'     => '',
                // 'timeToConsume2'     => '',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '5',
                'treatment_id'       => '1',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Against pain',
                'amount1'            => '1',
                'amount2'            => 'hour',
                'timeToConsume1'     => '2',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '4',
                'treatment_id'       => '2',
                'user_id'            => '1',
                'user_id_given_by'   => '1',
                'disease'            => 'tranquilizer',
                // 'amount1'            => '',
                // 'amount2'            => '',
                // 'timeToConsume1'     => '',
                // 'timeToConsume2'     => '',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '5',
                'treatment_id'       => '2',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Against pain',
                'amount1'            => '1',
                'amount2'            => 'hour',
                'timeToConsume1'     => '2',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '6',
                'treatment_id'       => '3',
                'user_id'            => '1',
                'user_id_given_by'   => '1',
                'disease'            => 'against poison',
                // 'amount1'            => '',
                // 'amount2'            => '',
                // 'timeToConsume1'     => '',
                // 'timeToConsume2'     => '',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '7',
                'treatment_id'       => '3',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'anaesthetic',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '6',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '11',
                'treatment_id'       => '4',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'muscle pain',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '10',
                'timeToConsume2'     => 'day',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '12',
                'treatment_id'       => '4',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'muscle pain',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '10',
                'timeToConsume2'     => 'day',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '13',
                'treatment_id'       => '4',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'muscle pain',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '10',
                'timeToConsume2'     => 'day',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '19',
                'treatment_id'       => '5',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '3',
                'amount2'            => 'day',
                'timeToConsume1'     => '5',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '20',
                'treatment_id'       => '5',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '4',
                'amount2'            => 'day',
                'timeToConsume1'     => '4',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '21',
                'treatment_id'       => '5',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '3',
                'amount2'            => 'day',
                'timeToConsume1'     => '3',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '2',
                'treatment_id'       => '6',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '6',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '2',
                'treatment_id'       => '6',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '4',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '2',
                'treatment_id'       => '6',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '2',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '2',
                'treatment_id'       => '6',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '8',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));


        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '7',
                'treatment_id'       => '7',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '8',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '8',
                'treatment_id'       => '7',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '3',
                'amount2'            => 'day',
                'timeToConsume1'     => '2',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '9',
                'treatment_id'       => '7',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'hearth',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '2',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '6',
                'treatment_id'       => '8',
                'user_id'            => '1',
                'user_id_given_by'   => '1',
                'disease'            => 'poison',
                // 'amount1'            => '2',
                // 'amount2'            => 'day',
                // 'timeToConsume1'     => '2',
                // 'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '6',
                'treatment_id'       => '8',
                'user_id'            => '1',
                'user_id_given_by'   => '1',
                'disease'            => 'poison',
                // 'amount1'            => '2',
                // 'amount2'            => 'day',
                // 'timeToConsume1'     => '2',
                // 'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '1',
                'treatment_id'       => '9',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'muscle pain',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '3',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '11',
                'treatment_id'       => '9',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'muscle pain',
                'amount1'            => '1',
                'amount2'            => 'day',
                'timeToConsume1'     => '10',
                'timeToConsume2'     => 'day',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '2',
                'treatment_id'       => '10',
                'user_id'            => '1',
                'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                // 'amount1'            => '1',
                // 'amount2'            => 'day',
                // 'timeToConsume1'     => '10',
                // 'timeToConsume2'     => 'day',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '2',
                'treatment_id'       => '10',
                'user_id'            => '1',
                'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                // 'amount1'            => '1',
                // 'amount2'            => 'day',
                // 'timeToConsume1'     => '10',
                // 'timeToConsume2'     => 'day',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '2',
                'treatment_id'       => '10',
                'user_id'            => '1',
                'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                // 'amount1'            => '1',
                // 'amount2'            => 'day',
                // 'timeToConsume1'     => '10',
                // 'timeToConsume2'     => 'day',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '13',
                'treatment_id'       => '10',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                'amount1'            => '1',
                'amount2'            => 'day',
                'timeToConsume1'     => '10',
                'timeToConsume2'     => 'day',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '1',
                'treatment_id'       => '11',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '2',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '11',
                'treatment_id'       => '11',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                'amount1'            => '3',
                'amount2'            => 'day',
                'timeToConsume1'     => '3',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '12',
                'treatment_id'       => '11',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                'amount1'            => '1',
                'amount2'            => 'day',
                'timeToConsume1'     => '1',
                'timeToConsume2'     => 'month',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));


        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '17',
                'treatment_id'       => '12',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                'amount1'            => '2',
                'amount2'            => 'day',
                'timeToConsume1'     => '2',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '17',
                'treatment_id'       => '12',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                'amount1'            => '5',
                'amount2'            => 'week',
                'timeToConsume1'     => '1',
                'timeToConsume2'     => 'month',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '17',
                'treatment_id'       => '12',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                'amount1'            => '1',
                'amount2'            => 'day',
                'timeToConsume1'     => '3',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('dosages')->insert(array(
            array(
                'medicine_id'        => '17',
                'treatment_id'       => '12',
                'user_id'            => '1',
                // 'user_id_given_by'   => '1',
                'disease'            => 'Diabetes',
                'amount1'            => '4',
                'amount2'            => 'day',
                'timeToConsume1'     => '1',
                'timeToConsume2'     => 'week',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
    }
}
