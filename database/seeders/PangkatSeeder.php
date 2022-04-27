<?php

namespace Database\Seeders;

use App\Models\Pangkat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Pangkat::insert([
            [
                'id' => Uuid::uuid4(),
                'nama' => 'PPNPN',
                'golongan' => '-',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Pengatur',
                'golongan' => 'II/c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Pengatur Tingkat I',
                'golongan' => 'II/d',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
