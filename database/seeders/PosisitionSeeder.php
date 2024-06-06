<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosisitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create([
            "nama"=>"Manager"
        ]);
        Position::create([
            "nama"=>"Admin"
        ]);
        Position::create([
            "nama"=>"Staff"
        ]);
        
    }
}
