<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pannau;

class PanneauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $panneaux = [
            ['code_pannau' => 'P-AGOE-01', 'zone' => 'Agoè', 'prix_mensuel' => 250000, 'occupe' => True],
            ['code_pannau' => 'P-AGOE-02', 'zone' => 'Agoè', 'prix_mensuel' => 180000, 'occupe' => False],
            ['code_pannau' => 'P-AGOE-03', 'zone' => 'Agoè', 'prix_mensuel' => 220000, 'occupe' => True],

            ['code_pannau' => 'P-ADID-01', 'zone' => 'Adidogomé', 'prix_mensuel' => 300000, 'occupe' => True],
            ['code_pannau' => 'P-ADID-02', 'zone' => 'Adidogomé', 'prix_mensuel' => 280000, 'occupe' => False],
            ['code_pannau' => 'P-ADID-03', 'zone' => 'Adidogomé', 'prix_mensuel' => 260000, 'occupe' => False],

            ['code_pannau' => 'P-AMOU-01', 'zone' => 'Amoutivé', 'prix_mensuel' => 400000, 'occupe' => True],
            ['code_pannau' => 'P-AMOU-02', 'zone' => 'Amoutivé', 'prix_mensuel' => 450000, 'occupe' => False],
            ['code_pannau' => 'P-AMOU-03', 'zone' => 'Amoutivé', 'prix_mensuel' => 380000, 'occupe' => True],

            ['code_pannau' => 'P-HEDZ-01', 'zone' => 'Hédzranawoé', 'prix_mensuel' => 270000, 'occupe' => True],
            ['code_pannau' => 'P-HEDZ-02', 'zone' => 'Hédzranawoé', 'prix_mensuel' => 240000, 'occupe' => False],

            ['code_pannau' => 'P-BE-01', 'zone' => 'Bè', 'prix_mensuel' => 350000, 'occupe' => True],
            ['code_pannau' => 'P-BE-02', 'zone' => 'Bè', 'prix_mensuel' => 330000, 'occupe' => False],

            ['code_pannau' => 'P-TOTSI-01', 'zone' => 'Totsi', 'prix_mensuel' => 210000, 'occupe' => True],
            ['code_pannau' => 'P-TOTSI-02', 'zone' => 'Totsi', 'prix_mensuel' => 230000, 'occupe' => False],

            ['code_pannau' => 'P-TOKOIN-01', 'zone' => 'Tokoin', 'prix_mensuel' => 420000, 'occupe' => True],
            ['code_pannau' => 'P-TOKOIN-02', 'zone' => 'Tokoin', 'prix_mensuel' => 390000, 'occupe' => False],

            ['code_pannau' => 'P-DJID-01', 'zone' => 'Djidjolé', 'prix_mensuel' => 260000, 'occupe' => True],
            ['code_pannau' => 'P-DJID-02', 'zone' => 'Djidjolé', 'prix_mensuel' => 250000, 'occupe' => False],

            ['code_pannau' => 'P-AKODE-01', 'zone' => 'Akodesséwa', 'prix_mensuel' => 320000, 'occupe' => True],
            ['code_pannau' => 'P-AKODE-02', 'zone' => 'Akodesséwa', 'prix_mensuel' => 340000, 'occupe' => False],
        ];

        foreach ($panneaux as $panneau) {
            Pannau::create($panneau);
        }
    }
}
