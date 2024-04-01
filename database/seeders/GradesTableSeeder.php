<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();

        $this->createGrades();
    }

    protected function createGrades()
    {

        $d = [

            ['name' => 'A', 'mark_from' => 90, 'mark_to' => 100, 'remark' => 'Excellent'],
            ['name' => 'B', 'mark_from' => 80, 'mark_to' => 89, 'remark' => 'Very Good'],
            ['name' => 'C', 'mark_from' => 70, 'mark_to' => 79, 'remark' => 'Good'],
            ['name' => 'D', 'mark_from' => 60, 'mark_to' => 69, 'remark' => 'Pass'],
            ['name' => 'E', 'mark_from' => 50, 'mark_to' => 59, 'remark' => 'Poor'],
            ['name' => 'F', 'mark_from' => 0, 'mark_to' => 49, 'remark' => 'Fail'],


        ];
        DB::table('grades')->insert($d);
    }
}
