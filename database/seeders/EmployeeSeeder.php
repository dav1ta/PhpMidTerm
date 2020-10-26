<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => "David",
            'surname' => "Chanturia",
            'position' => "here",
            'phone' => "5983342131",
            'is_hired' => true,

        ]);

        DB::table('employees')->insert([
            'name' => "petre",
            'surname' => "petriashvili",
            'position' => "aqvs",
            'phone' => "5983342131",
            'is_hired' => false,

        ]);
        DB::table('employees')->insert([
            'name' => "Davit",
            'surname' => "Davitia",
            'position' => "ar aqvs",
            'phone' => "5983342131",
            'is_hired' => true,

        ]);
    }
}
