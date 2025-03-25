<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_supplier = [
            [
                'supplier_kode' => 'SP001',
                'supplier_nama' => 'PT Jaya Utama',
                'supplier_alamat' => 'Jl. Surabaya No. 10, Bandung',
                'created_at' => Carbon::now()
            ],
            [
                'supplier_kode' => 'SP002',
                'supplier_nama' => 'PT Makmur Satya',
                'supplier_alamat' => 'Jl. Jakarta No. 25, BanjarMasin',
                'created_at' => Carbon::now()
            ],
            [
                'supplier_kode' => 'SP003',
                'supplier_nama' => 'PT Sentosa Bersama',
                'supplier_alamat' => 'Jl. Soekarno No. 15, Depok',
                'created_at' => Carbon::now()
            ],
        ];

        DB::table('m_supplier')->insert($data_supplier);
    }
}