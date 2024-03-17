<?php

namespace Database\Seeders;

use App\Models\Child;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChildTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Child::factory()->count(8)->create();
    }
}
