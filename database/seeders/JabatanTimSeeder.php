<?php

namespace Database\Seeders;

use App\Models\JabatanTim;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;

class JabatanTimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return JabatanTim::insert([
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Penanggungjawab',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Pengendali Teknis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Ketua Tim',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Anggota Tim',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
