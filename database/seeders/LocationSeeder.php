<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('locations')->insert([
            'name' => 'Oruro',
            'address' => 'Oruro, Bolivia',
            'city' => 'Oruro',
            'latitude' => '-17.9687641',
            'longitude' => '-67.1284819'            
        ]);
        \DB::table('locations')->insert([
            'name' => 'La Paz',
            'address' => 'La Paz, Bolivia',
            'city' => 'La Paz',
            'latitude' => '-16.5206962',
            'longitude' => '-68.2064795'            
        ]);
        \DB::table('locations')->insert([
            'name' => 'Cochabamba',
            'address' => 'Cochabamba, Bolivia',
            'city' => 'Cochabamba',
            'latitude' => '-17.3936955',
            'longitude' => '-66.1561057'            
        ]);
        \DB::table('locations')->insert([
            'name' => 'Santa Cruz',
            'address' => 'Santa Cruz, Bolivia',
            'city' => 'Santa Cruz',
            'latitude' => '-17.783357',
            'longitude' => '-63.182127'            
        ]);
        \DB::table('locations')->insert([
            'name' => 'Sucre',
            'address' => 'Sucre, Bolivia',
            'city' => 'Sucre',
            'latitude' => '-19.019585',
            'longitude' => '-65.2619616'            
        ]);
        \DB::table('locations')->insert([
            'name' => 'Potosi',
            'address' => 'Potosi, Bolivia',
            'city' => 'Potosi',
            'latitude' => '-19.5722802',
            'longitude' => '-65.7550066'            
        ]);
        \DB::table('locations')->insert([
            'name' => 'Tarija',
            'address' => 'Tarija, Bolivia',
            'city' => 'Tarija',
            'latitude' => '-21.5354965',
            'longitude' => '-64.7295597'            
        ]);
        \DB::table('locations')->insert([
            'name' => 'Trinidad',
            'address' => 'Trinidad, Bolivia',
            'city' => 'Trinidad',
            'latitude' => '-14.833333',
            'longitude' => '-64.999999'            
        ]);
        \DB::table('locations')->insert([
            'name' => 'Cobija',
            'address' => 'Cobija, Bolivia',
            'city' => 'Cobija',
            'latitude' => '-11.033333',
            'longitude' => '-68.733333'            
        ]);
    }
}
