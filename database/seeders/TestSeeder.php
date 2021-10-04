<?php

namespace Database\Seeders;

use App\Models\TestModel;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TestModel::factory()
                ->count(50)
                ->create();
    }
}
