<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Party;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = District::all()->keyBy('name');
        $ostjyllandId = $districts['Østjyllands Storkreds']->id;

        /**
         * Socialdemokratiet
         */

        $party = Party::create([
            'name' => 'Socialdemokratiet',
            'icon' => '/images/parties/socialdemokratiet.png',
            'descriptor' => 'A',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Malte Larsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Leif Lahn Jensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Erik Særkjær',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Camilla Fabricius',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Anders Kühnau',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Mathias Thybo',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Pia Halkjær',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Thomas Monberg',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Nicolai Wammen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Dorthe Hindborg',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Louise Stenmann',
                'district_id' => $ostjyllandId,
            ]
        ]);

        /**
         * Radikale Venstre
         */

        $party = Party::create([
            'name' => 'Radikale Venstre',
            'icon' => '/images/parties/radikale.png',
            'descriptor' => 'B',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Line Rasmussen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Mathias Sikora',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Bjarke Jensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Katrine Robsøe',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Rikke Christensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Rune Christiansen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Anne Sophie Callesen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Hanne Roed',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Rabih Azad-Ahmad',
                'district_id' => $ostjyllandId,
            ]
        ]);
        /**
         * Det Konservative Folkeparti
         */

        $party = Party::create([
            'name' => 'Det Konservative Folkeparti',
            'icon' => '/images/parties/konservative.png',
            'descriptor' => 'C',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Bia Ndamukunda',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Mona Juul',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Peter Sporleder',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Charlotte Green',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Anders Krojgaard Lund',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Caroline Svejsø',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Michael Faust Horsbøl',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Viktor Thyregod Sivertsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Morten Sørensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Bjørn Jensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Jacob Skjærris',
                'district_id' => $ostjyllandId,
            ]
        ]);


        /**
         * SF - Socialistisk Folkeparti
         */

        $party = Party::create([
            'name' => 'SF - Socialistisk Folkeparti',
            'icon' => '/images/parties/sf.png',
            'descriptor' => 'F',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Kirsten Normann Andersen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Charlotte Vindeløv',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Rasmus T. Mortensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Sofie Lippert',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Søren Lahn Sloth',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Carina Sarkkinen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Charlotte Broman Mølbæk',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Morten Siig Henriksen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Anna Brændemose',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Paw Hedegaard Amdisen',
                'district_id' => $ostjyllandId,
            ]
        ]);

        /**
         * Borgernes Parti - Lars Boje Mathiesen
         */

        $party = Party::create([
            'name' => 'Borgernes Parti - Lars Boje Mathiesen',
            'icon' => '/images/parties/bp.png',
            'descriptor' => 'H',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Lars Boje Mathiesen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Michael Bang Pedersen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Viviane Ellasofie Karlsen',
                'district_id' => $ostjyllandId,
            ]
        ]);
        /**
         * Liberal Alliance
         */

        $party = Party::create([
            'name' => 'Liberal Alliance',
            'icon' => '/images/parties/la.png',
            'descriptor' => 'I',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Jens Meilvang',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Niels Povlsgaard',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Kim Møller-Nielsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Alex Vanopslagh',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Søren Jensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Louise Svenstrup',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Louise Brown',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Lars Abildskov',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Chris Hvidberg',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Michael Klausen',
                'district_id' => $ostjyllandId,
            ]
        ]);
        /**
         * Moderaterne
         */

        $party = Party::create([
            'name' => 'Moderaterne',
            'icon' => '/images/parties/moderaterne.png',
            'descriptor' => 'M',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Christina Egelund',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Sten Larsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Peter Have',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Caroline Stage',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Susan Kronborg',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Sara Pernille Jespersen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Søren Vanting',
                'district_id' => $ostjyllandId,
            ]
        ]);
        /**
         * Dansk Folkeparti
         */

        $party = Party::create([
            'name' => 'Dansk Folkeparti',
            'icon' => '/images/parties/df.png',
            'descriptor' => 'O',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Nick Zimmermann',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Mercedes Czank',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Nana Harring',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Michael Nedersøe',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Jens Kannegaard Lundager',
                'district_id' => $ostjyllandId,
            ]
        ]);
        /**
         * Venstre, Danmarks Liberale Parti
         */

        $party = Party::create([
            'name' => 'Venstre, Danmarks Liberale Parti',
            'icon' => '/images/parties/venstre.png',
            'descriptor' => 'V',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Troels Lund Poulsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Mathilde Hjort Bressum',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Hans Skou',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Erik Veje Rasmussen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Emil M. D. Christensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Sebastian Støckler',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Henrik Rejnholt Andersen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Louise Høeg',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Karina Aamann',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Gert Bjerregaard',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Louise Louring',
                'district_id' => $ostjyllandId,
            ]
        ]);
        /**
         * Danmarksdemokraterne - Inger Støjberg
         */

        $party = Party::create([
            'name' => 'Danmarksdemokraterne - Inger Støjberg',
            'icon' => '/images/parties/danmarksdemokraterne.png',
            'descriptor' => 'Æ',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Magnus Bigum',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Lone Glarbo',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Hans Kristian Skibby',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Erik Poulsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Rune Mikkelsen',
                'district_id' => $ostjyllandId,
            ]
        ]);
        /**
         * Enhedslisten
         */

        $party = Party::create([
            'name' => 'Enhedslisten',
            'icon' => '/images/parties/enhedslisten.png',
            'descriptor' => 'Ø',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Marin Laursen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Lisbeth Ivanhoe',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Kristjar Skajaa',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Trine Mach',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Maria Sørensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Dennis Munk',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Maria Temponeras',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Christina Hedegaard Hansen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Edith Vels',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Jakob Jensen',
                'district_id' => $ostjyllandId,
            ]
        ]);
        /**
         * Alternativet
         */

        $party = Party::create([
            'name' => 'Alternativet',
            'icon' => '/images/parties/alternativet.png',
            'descriptor' => 'Å',
        ]);

        $party->candidates()->createMany([
            [
                'name' => 'Torsten Gejl',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Kim Sørensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Marcus Bech Pedersen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Nikoline Erbs Hillers-Bendtsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Karina Konrad',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Sasja Elkjær Krogsdal',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Gitte Dreier Jacobsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Anna Calero',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Mads Damgaard Mortensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Bjørn Olsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Thomas Quist Mortensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Hanne K. Mortensen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Tina Kjær',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Lissi Bagge',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Thomas Due Nielsen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Steffen Hedegaard Attermann Brinch',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Juma Nellemann Kruse',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Thor Clasen Jonasen',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Pernille Skærsø',
                'district_id' => $ostjyllandId,
            ],
            [
                'name' => 'Tenna Duch Schaldemose',
                'district_id' => $ostjyllandId,
            ]
        ]);

    }
}
