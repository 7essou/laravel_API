<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_Artist extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            [
                'id' => 1,
                'Nickname' => '7essou',
                'Categorie' => 'clothes Customizing',
                'city' => 'Toufite',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'Nickname' => 'Mohamed',
                'Categorie' => 'shoes Customizing',
                'city' => 'Toufite',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'Nickname' => 'Amine',
                'Categorie' => 'portrait',
                'city' => 'Toufite',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'Nickname' => 'Rachiied',
                'Categorie' => 'clothes',
                'city' => 'fes',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'Nickname' => 'MedArt',
                'Categorie' => 'clothes',
                'city' => 'fes',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id' => 6,
                'Nickname' => 'CraftMan',
                'Categorie' => 'clothes',
                'city' => 'fes',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id' => 7,
                'Nickname' => 'Hedoon',
                'Categorie' => 'clothes',
                'city' => 'fes',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id' => 8,
                'Nickname' => 'Redoon',
                'Categorie' => 'clothes',
                'city' => 'fes',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'Nickname' => 'BnbO',
                'Categorie' => 'clothes',
                'city' => 'fes',
                'Profil_img' => '',
                'desc_img' => '',
                'Adresse' => 'Istghrghor Tounfite',
                'about' => 'i will costumize your clothes with your favorit desind...',
                'Service_desc' => 'i will costumize your clothes with your favorit desind...',
                'prix' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        }
}
