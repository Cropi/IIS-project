<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('now');

        DB::table('owners')->insert(array(
            array(
                'id'                 => 1,
                'name'               => 'Reggie',
                'surname'            => 'Davidson',
                'adress'             => 'Liverpool 750',
                'personalID'         => 'AS744QDSA4',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));

        DB::table('owners')->insert(array(
            array(
                'id'                 => 2,
                'name'               => 'Ray',
                'surname'            => 'Moses',
                'adress'             => 'Liverpool 230',
                'personalID'         => 'IDOFPB5269D',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 3,
                'name'               => 'Mell',
                'surname'            => 'Reid',
                'adress'             => 'Liverpool 903',
                'personalID'         => 'POTYBIBN90',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 4,
                'name'               => 'Gale',
                'surname'            => 'Murray',
                'adress'             => 'Burnley 600',
                'personalID'         => 'MVHWPRLSPV',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 5,
                'name'               => 'Alexis',
                'surname'            => 'Mitchell',
                'adress'             => 'Burnley 400',
                'personalID'         => 'D8TPY3VLAK',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 6,
                'name'               => 'River',
                'surname'            => 'Hamilton',
                'adress'             => 'Burnley 900',
                'personalID'         => 'FPQNWMT83V',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 7,
                'name'               => 'Danny',
                'surname'            => 'Houghton',
                'adress'             => 'Burnley 20',
                'personalID'         => 'QPR3VMSJF3',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 8,
                'name'               => 'Ashton',
                'surname'            => 'Farmer',
                'adress'             => 'Leeds 903',
                'personalID'         => 'DISPF3SLV5',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 9,
                'name'               => 'Addison',
                'surname'            => 'Wyatt',
                'adress'             => 'Sheffield 360',
                'personalID'         => 'D8AJFPLB23',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 10,
                'name'               => 'Bev',
                'surname'            => 'Campos',
                'adress'             => 'Swansea 5630',
                'personalID'         => 'APB3DPB20S',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 11,
                'name'               => 'Hayden',
                'surname'            => 'Solis',
                'adress'             => 'Leicester 936',
                'personalID'         => 'S9RUT1BPAM',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 12,
                'name'               => 'Gabby',
                'surname'            => 'Dixon',
                'adress'             => 'Norwich 930',
                'personalID'         => 'D9SJFMG3CV',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
        DB::table('owners')->insert(array(
            array(
                'id'                 => 13,
                'name'               => 'Angel',
                'surname'            => 'Murray',
                'adress'             => 'Ipswich town 542',
                'personalID'         => 'A9BDMSJFLS',
                'created_at'         => $today->format('Y-m-d H:i:s'),
                'updated_at'         => $today->format('Y-m-d H:i:s'),
             ),
        ));
    }
}
