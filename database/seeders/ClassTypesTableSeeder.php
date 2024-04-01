<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Batch 1', 'code' => 'wp1'],
            ['name' => 'Batch 2', 'code' => 'wp2'],
            ['name' => 'Batch 3', 'code' => 'wp3'],
            ['name' => 'Batch 4', 'code' => 'wp4'],
            ['name' => 'Batch 5', 'code' => 'wp5'],
            ['name' => 'Batch 6', 'code' => 'wp6'],
        ];

        DB::table('class_types')->insert($data);

    }
}
