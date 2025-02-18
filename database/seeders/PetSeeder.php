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
                'nome' => 'Simba',
                'descricao' => '  Simba é um Labrador Retriever enérgico e brincalhão. Adora nadar e buscar objetos. Aspectos: Pelagem amarela, olhos castanhos, porte grande. Possíveis Problemas de Saúde: Displasia coxofemoral, otite Medicamentos:
    Condroitina e Glucosamina (diariamente às 8h)
    Otomax (pomada auricular, 2x por semana)'
            ],
            [
                'nome' => 'Luna',
                'descricao' => '  Luna é uma gata Persa calma e carinhosa, que adora se enrolar no colo e dormir por longas horas. Aspectos: Pelagem longa e branca, olhos azuis, porte médio. Possíveis Problemas de Saúde: Doença renal policística, problemas respiratórios Medicamentos:
    Benazepril (diariamente às 10h)
    Salbutamol (inalador, em caso de necessidade)'
            ],
            [
                'nome' => 'Bella',
                'descricao' => ' Bella é uma gata Siamês curiosa e ativa, gosta de explorar a casa e brincar com brinquedos. Aspectos: Pelagem curta e clara com extremidades escuras, olhos azuis, porte pequeno. Possíveis Problemas de Saúde: Estrabismo, problemas dentários Medicamentos:
    Amoxicilina (em caso de infecção dental, 2x ao dia, 8h e 20h)
'
            ],
            [
                'nome' => 'Rex',
                'descricao' => '  Rex é um Pastor Alemão leal e protetor, excelente para tarefas de guarda e companhia. Aspectos: Pelagem preta e marrom, olhos castanhos, porte grande. Possíveis Problemas de Saúde: Problemas digestivos, displasia coxofemoral Medicamentos:
    Ração gastrointestinal (2x ao dia, 7h e 19h)
    Carprofeno (se necessário, 1x ao dia)
!'
            ],
            [
                'nome' => 'Max',
                'descricao' => ' Max é um Golden Retriever amigável e inteligente, ótimo com crianças e outros animais. Aspectos: Pelagem dourada, olhos castanhos, porte grande. Possíveis Problemas de Saúde: Displasia coxofemoral, alergias cutâneas Medicamentos:
    Anti-histamínico (se necessário, 1x ao dia)
    Suplemento de ômega-3 (diariamente às 9h)'
            ],
            [
                'nome' => 'Mia',
                'descricao' => ' Mia é uma gata Maine Coon sociável e afetuosa, conhecida por sua grande pelagem e presença majestosa. Aspectos: Pelagem longa e cinza, olhos verdes, porte grande. Possíveis Problemas de Saúde: Cardiomiopatia hipertrófica, obesidade Medicamentos:
    Atenolol (diariamente às 8h)
    Ração para controle de peso (3x ao dia, 7h, 12h, 19h)'
            ]

        ]);
    }
}








