<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Admin::create([
            'id' => Uuid::uuid4(),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'nip' => '200004112022011001',
            'nama' => 'ADMIN RAHMAN',
            'email' => 'admin@gmail.com',
        ]);
    }
}
