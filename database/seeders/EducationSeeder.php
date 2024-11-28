<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'id'=> Str::uuid(),
            'name'=>'I Gde Adioka Prtama',
            'title'=> '-',
            'start_date'=>'2015-01-01',
            'end_date'=>'2020-01-01',
            'description'=>'the morning star is Son Of Dawn',
            ],
            [
            'id' => Str::uuid(),
            'name' => 'Son Of Dawn',
            'title' => 'Lord Of Lust',
            'start_date' => '2015-01-01',
            'end_date' => '2020-01-01',
            'description' => 'the morning star is Son Of Dawn',
            ]
        ];
        Education::insert($data);
    }

}
