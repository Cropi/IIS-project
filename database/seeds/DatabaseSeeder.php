<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(OwnersTableSeeder::class);
        $this->call(AnimalsTableSeeder::class);
        $this->call(MedicinesTableSeeder::class);
        $this->call(TreatmentsTableSeeder::class);
    }
}
