<?php

namespace Database\Seeders;

use App\Models\entries;
use App\Models\wallet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class entriesSeeder extends Seeder
{
    public function run()
    {
        //
        entries::truncate();
        DB::table('entries')->insert([
            'value' => random_int(1000,100000),
        ]);
    }
}
