<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '1', 
            'nama' => 'Admin', 
            'email' => 'admin@gmail.com', 
            'password' => bcrypt('123'), 
            'telp' => '085772948273',
            'jenis_kel' => 'laki-laki', 
            'level' => 'admin',
            'alamat' => 'Jalan Madura',
            'rt' => '1',
            'rw' => '11',
            'kode_pos' => '16514',
            'province_id' => '32',
            'regency_id' => '3276',
            'district_id' => '3276061',
            'village_id' => '3276061001',
            'remember_token' => Str::random(60),
        ]);

        // User::create([
        //     'nik' => '3304', 
        //     'nama' => 'Petugas1', 
        //     'email' => 'petugas1@gmail.com', 
        //     'password' => bcrypt('12345'), 
        //     'telp' => '085772948374',
        //     'jenis_kel' => 'laki-laki', 
        //     'level' => 'petugas',
        //     'alamat' => 'jl.ternate',
        //     'rt' => '3',
        //     'rw' => '13',
        //     'kode_pos' => '16514',
        //     'province_id' => '11',
        //     'regency_id' => '121',
        //     'district_id' => '212',
        //     'village_id' => '1221',
        //     'remember_token' => Str::random(60),
        // ]);
    }
}
