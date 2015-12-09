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

        DB::table('occupants')->insert([
            'name' => 'Khusus Perempuan'
        ]);
        DB::table('occupants')->insert([
            'name' => 'Khusus Laki-laki'
        ]);
        DB::table('occupants')->insert([
            'name' => 'Perempuan dan Laki-laki'
        ]);

        DB::table('periods')->insert([
            'name' => 'harian'
        ]);
        DB::table('periods')->insert([
            'name' => 'bulanan'
        ]);
        DB::table('periods')->insert([
            'name' => 'tahunan'
        ]);

        DB::table('facilities')->insert([
            'name' => 'Air Conditioner'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'TV'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'TV Kabel'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'Kamar Mandi Dalam'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'Internet'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'Meja dan Kursi'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'Kipas Angin'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'Lemari'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'Kulkas'    
        ]);

        DB::table('facilities')->insert([
            'name' => 'Air panas'    
        ]);

        

         $this->command->info("berhasil seed");

        Model::reguard();
    }
}
