<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(30)->create();
        $cl = [
            [
                'last_name' => 'Mejias',
                'first_name' => 'Francis Michael',
                'middle_name' => 'Cabrera',
                'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Cenita',
                'first_name' => 'Zeus Gyro',
                'middle_name' => 'Mejias',
                'address' => ' Purok 4. Cagayan, Inabanga, Bohol',
                'birth_date' => '1996-11-03',
                'phone_number' => '09307665033',
                'email' => 'zeusgyro@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
