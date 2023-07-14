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
                'last_name' => 'Mejias',
                'first_name' => 'Francis Michael',
                'middle_name' => 'Cabrera',
                'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'mikoremixes@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Aparicio',
                'first_name' => 'Denice Jane',
                'middle_name' => 'Bautista',
                'address' => 'Centro 2. Baogo, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'denicejaneaparicio1402@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Mejias II',
                'first_name' => 'Francis Michael II',
                'middle_name' => 'Cabrera II',
                'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'mejiasforfacebook@gmail.com',
                'initial_deposit' => 10000
            ],




            [
                'last_name' => 'Dupa',
                'first_name' => 'Kristin',
                'middle_name' => 'Sample',
                'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'dupakristine96@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Mueblas',
                'first_name' => 'Mark Lster',
                'middle_name' => 'Elle',
                'address' => 'Purok 4. Cagayan, Inabanga, Bohol',
                'birth_date' => '2002-7-8',
                'phone_number' => '09606765143',
                'email' => 'marklistermueblas3@gmail.com',
                'initial_deposit' => 10000
            ],


            // [
            //     'last_name' => 'Mejias',
            //     'first_name' => 'Francis Michael',
            //     'middle_name' => 'Cabrera',
            //     'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
            //     'birth_date' => '2002-7-8',
            //     'phone_number' => '09606765143',
            //     'email' => 'mikoremixes@gmail.com',
            //     'initial_deposit' => 10000
            // ],


            // [
            //     'last_name' => 'Mejias',
            //     'first_name' => 'Francis Michael',
            //     'middle_name' => 'Cabrera',
            //     'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
            //     'birth_date' => '2002-7-8',
            //     'phone_number' => '09606765143',
            //     'email' => 'mikoremixes@gmail.com',
            //     'initial_deposit' => 10000
            // ],



            // [
            //     'last_name' => 'Mejias',
            //     'first_name' => 'Francis Michael',
            //     'middle_name' => 'Cabrera',
            //     'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
            //     'birth_date' => '2002-7-8',
            //     'phone_number' => '09606765143',
            //     'email' => 'mikoremixes@gmail.com',
            //     'initial_deposit' => 10000
            // ],



            // [
            //     'last_name' => 'Mejias',
            //     'first_name' => 'Francis Michael',
            //     'middle_name' => 'Cabrera',
            //     'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
            //     'birth_date' => '2002-7-8',
            //     'phone_number' => '09606765143',
            //     'email' => 'mikoremixes@gmail.com',
            //     'initial_deposit' => 10000
            // ],


            // [
            //     'last_name' => 'Mejias',
            //     'first_name' => 'Francis Michael',
            //     'middle_name' => 'Cabrera',
            //     'address' => 'Purok 2. Cagayan, Inabanga, Bohol',
            //     'birth_date' => '2002-7-8',
            //     'phone_number' => '09606765143',
            //     'email' => 'mikoremixes@gmail.com',
            //     'initial_deposit' => 10000
            // ],


        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
