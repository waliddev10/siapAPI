<?php

namespace Database\Seeders;

use App\Models\KategoriPenugasan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;

class KategoriPenugasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return KategoriPenugasan::insert([
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Review Laporan Keuangan PD',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Pemeriksaan Kas Opname',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Evaluasi SAKIP/LKjIP PD',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
