<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'nama_hari' => 'senin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_hari' => 'selasa',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_hari' => 'rabu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_hari' => 'kamis',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_hari' => 'jumat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_hari' => 'sabtu',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ])->each(function( $hari){
            DB::table('hari')->insert($hari);
        });
    }
}
