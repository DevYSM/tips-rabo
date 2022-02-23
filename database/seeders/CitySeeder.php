<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['id' => 1, 'name' => 'Egypt'],
            ['id' => 2, 'name' => 'Saudi Arabia'],
        ];
        $zones = [
            ['id' => 1, 'city_id' => 1, 'name' => 'Giza'],
            ['id' => 2, 'city_id' => 1, 'name' => 'Cairo'],
            ['id' => 3, 'city_id' => 2, 'name' => 'Makkah'],
        ];
        $areas = [
            // Giza Areas
            ['id' => 1, 'zone_id' => 1, 'name' => 'Al ‘Ayyāţ'],
            ['id' => 2, 'zone_id' => 1, 'name' => 'Al Bawīţī'],
            ['id' => 3, 'zone_id' => 1, 'name' => 'Al Ḩawāmidīyah'],
            // Cairo Areas
            ['id' => 4, 'zone_id' => 2, 'name' => 'Halwan'],
            ['id' => 5, 'zone_id' => 2, 'name' => 'New Cairo'],
            // Makkah Areas
            ['id' => 6, 'zone_id' => 3, 'name' => 'Abha'],
            ['id' => 7, 'zone_id' => 3, 'name' => 'Abu `Urwah'],
            ['id' => 8, 'zone_id' => 3, 'name' => 'Al Ashraf'],
            ['id' => 9, 'zone_id' => 3, 'name' => 'Abu Shu`ayb'],
        ];

        
    }
}
