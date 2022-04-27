<?php

namespace Database\Seeders;

use App\Models\Bidang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Bidang::insert([
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Bidang Perekonomian',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Bidang Kesejahteraan Rakyat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Bidang Khusus',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4(),
                'nama' => 'Bidang Pemberdayaan Aparatur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
