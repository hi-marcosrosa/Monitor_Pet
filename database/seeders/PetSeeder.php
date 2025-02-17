<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;
class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pet::insert([
            [
                'nome' => 'Jack',
                'descricao' => ' Cachorro muito levado!'
            ],
            [
                'nome' => 'Bob',
                'descricao' => ' Gato muto preguiçoso!'
            ]

        ]);
    }
}
