<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ReponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reponse')->insert(
            [
                'nom' => 'essaye plus tard',
                'libelle' => 'Essaye plus tard',
            ],
        );
        DB::table('reponse')->insert(
            [
                'nom' => 'essaye encore',
                'libelle' => 'Essaye encore',
            ],
        );
        DB::table('reponse')->insert(
            [
                'nom' => 'oui absolument',
                'libelle' => 'Oui absolument',
            ],
        );
        DB::table('reponse')->insert(
            [
                'nom' => 'tres probable',
                'libelle' => 'Très probable',
            ]
        );
        DB::table('reponse')->insert(
            [
                'nom' => 'faut pas rever',
                'libelle' => 'Faut pas rêver',
            ],
        );
        DB::table('reponse')->insert(
            [
                'nom' => 'impossible',
                'libelle' => 'Impossible',
            ],
        );
    }
}
