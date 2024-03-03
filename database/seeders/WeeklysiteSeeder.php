<?php

namespace Database\Seeders;

use App\Models\Weekly_site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WeeklysiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weekly_site::create([
            'date'      => Carbon::create('2024', '01', '09'),
            'submitted' => 'Bukhari',
            'sign'      =>  'Givi Andriyanto',
            'file'      => 'dalban'
        ]);
    }
}
