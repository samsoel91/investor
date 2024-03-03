<?php

namespace Database\Seeders;

use App\Models\Daily_site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Carbon\Carbon;

class DailysiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Daily_site::create([
            'date'      => Carbon::create('2024', '01', '01'),
            'submitted' => 'Bukhari',
            'sign'      =>  'Givi Andriyanto',
            'file'      => 'dalban'
        ]);
    }
}
