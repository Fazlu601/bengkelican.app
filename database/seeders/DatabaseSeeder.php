<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pelanggan;
use App\Models\Karyawan;
use App\Models\Product;
use App\Models\Shop_info;
use App\Models\Transaction;
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
        // \App\Models\User::factory(10)->create();

        Shop_info::create([
            "name" => "BENGKEL MOBIL ICAN",
            "address" => "Jl. Abdul Chatab RT.20 Kel.Pasir"
        ]);

        User::create([
            "username" => "Fazlu601",
            "name" => "Fazlu Rachman",
            "address" => "Kenali Asam Bawah",
            "password" => Hash::make('123')
        ]);

        User::create([
            "username" => "Daffa01",
            "name" => "Daffa Darmawan",
            "address" => "Bolong",
            "password" => Hash::make('123'),
            "is_supplier" => 1
        ]);

        Pelanggan::create([
            "name" => "Alex",
            "address" => "Jl. Abdul Muis RT. 15 Jeramba Bolong",
            "telephone" => "6285266940312"
        ]);

        Karyawan::create([
            "name" => "icipp",
            "address" => "Talang Bakung",
            "telephone" => "082252879012"
        ]);

        Product::create([
            "name" => "Velg Merah Avanza 2011",
            "price" => 300000,
            "type" => "sparepart",
            "stock" => 8
        ]);

        Product::create(  [
            "name" => "Cat Bamper Depan & Belakang",
            "price" => 620000,
            "type" => "service",
            "stock" => null
        ]);

        Transaction::create([
            "type" => "service",
            "total" => 1200000,
            "supplier" => "Aulia",
            "plat" => "BH 1802 DRE",
        ]);
    }
}
