<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => Str::uuid(),
                'name' => 'I Gde Adioka Prtama',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Son Of Dawn',
            ]
        ];
        School::insert($data);
    }
}
