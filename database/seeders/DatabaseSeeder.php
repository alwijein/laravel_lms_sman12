<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {





        $this->call(UsersSeeder::class);
        $this->call(HariSeeder::class);
        $this->call(KehadiranSeeder::class);

        // Kelas::factory(10)->create();
        // Pelajaran::factory(10)->create();
        // Siswa::factory(10)->create();
        // Guru::factory(10)->create();
    }
}
