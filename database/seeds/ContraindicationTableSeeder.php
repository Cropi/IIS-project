<?php

use Illuminate\Database\Seeder;

class ContraindicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('now');

        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '4',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '7',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '8',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '9',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '10',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '11',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '12',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '13',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '14',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'head ache',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '3',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '6',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '9',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '10',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '11',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '12',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '13',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '14',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'debilitation',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));


        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '2',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '3',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '5',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '6',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '9',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '10',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '18',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '19',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '20',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '21',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'sick feeling',
                'medicine_id'        => '22',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));



        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '1',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '3',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '5',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '7',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '8',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '9',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '10',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '11',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '13',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '14',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '15',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '16',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('contraindications')->insert(array(
            array(
                'disease'            => 'stomachache',
                'medicine_id'        => '17',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));



    }
}
