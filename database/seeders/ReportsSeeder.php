<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reports::factory()->create([
            'reports' => 'Odio',
        ],[
            'reports' => 'Sexo',
        ],[
            'reports' => 'Salud',
        ],[
            'reports' => 'Violencia',
        ],[
            'reports' => 'Identidad',
        ],[
            'reports' => 'Spam',
        ],[
            'reports' => 'Acoso',
        ]);
    }
}
