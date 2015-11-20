<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         DB::table('contact-us')->insert([
            'isi' => "Wisma 77 tower 2, 9th floor
            <br>Jl. Letjen S. Parman Kav. 77
            <br>Slipi, Jakarta Barat 11410 Indonesia
            <br>PT. Mediapura Digital Indonesia
            <br>Telp +6221 296 75920 Ext 134",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

         $this->command->info("berhasil seed");

        Model::reguard();
    }
}
