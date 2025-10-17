<?php

namespace Database\Seeders;

use App\Models\SchoolYear;
use Illuminate\Database\Seeder;

class SchoolYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i = 0; $i < 100; $i++)
        {
            $yearStart = 1950 + $i;
            $yearEnd = $yearStart + 1;

            SchoolYear::create([
                "year_start" => $yearStart,
                "year_end" => $yearEnd,
                "description" => fake()->realText()
            ]);

        }

    }
}
