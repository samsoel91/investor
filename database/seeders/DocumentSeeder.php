<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Document::create([
            'namefile'  => 'Document Pertama',
            'date'      => Carbon::create('2024', '01', '01'),
            'file'      => 'dalban'
        ]);
    }
}
