<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Mariel',
                'address' => 'Manila',
                'phone' => '0912345678',
                'capitalization' => 20000,
                'loan' => 10000
            ],
            [
                'name' => 'Mary',
                'address' => 'Cebu',
                'phone' => '0945621157',
                'capitalization' => 40000,
                'loan' => 300000
            ],
            [
                'name' => 'Maria',
                'address' => 'Tagbilara',
                'phone' => '0915454511',
                'capitalization' => 50000,
                'loan' => 500000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
