<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Bookshelf;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pustakawan = Bookshelf::insert([
            [
                'id' => '1',
                'code' => '620',
                'name' => 'Engineering',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'code' => '621',
                'name' => 'Mechanical',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'code' => '622',
                'name' => 'Topographical',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}