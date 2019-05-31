<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VinTableSeeder extends Seeder {

    public function run() {
        DB::table('vins')->delete();
        $i = rand(1, 7);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 1,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Syrah du Valais "Grand Métral"',
            'annee' =>'2014',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 1,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 2,
            'idType' => 2,
            'idStock' => $i,
            'nom' => 'Chablis',
            'annee' =>'2015',
            'description' => 'Description',
            'alcool' => 12.5,
            'apogee' => '',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 3,
            'idType' => 2,
            'idStock' => $i,
            'nom' => 'Gewürztraminer de Riquewihr «Vendanges Tardives» ',
            'annee' =>'2009',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 1,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 4,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Nuits-St-Georges',
            'annee' =>'2013',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '2016 - 2030',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '1er cru Aux Boudots',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 5,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Corton-Bressandes "Grand Cru"',
            'annee' =>'2013',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '2022 - 2043',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => 'Grand Cru',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 6,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Nuits-St-Georges',
            'annee' =>'2014',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '2018 - 2028',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '1er cru Les Chênes Carteaux',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 7,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'MEURSAULT "Clos de Tavaux" ',
            'annee' =>'2014',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => 'Monopole AC 2015',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 8,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Etna Rosso DOC',
            'annee' =>'2015',
            'description' => 'Description',
            'alcool' => 14.5,
            'apogee' => '2017 - 2025',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 1,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 9,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Les Pruliers',
            'annee' =>'2016',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '2020 - 2026',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 10,
            'idType' => 2,
            'idStock' => $i,
            'nom' => 'CHABLIS "Les Vieilles Vignes"',
            'annee' =>'2014',
            'description' => 'Description',
            'alcool' => 12.5,
            'apogee' => '',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 11,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'La Comme',
            'annee' =>'2016',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '1er Cru',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 12,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Château les Cruzelles',
            'annee' =>'2015',
            'description' => 'Le Château Duhart-Milon Rothschild est un 4ème grand cru classé sur la commune de Pauillac à Bordeaux. Cette propriété de 75 ha appartient depuis 1962 à la branche française des Rothschild, celle qui est aussi propriétaire du Château Lafite-Rothschild, le célèbre 1er grand cru classé. L’assemblage est médocain classique avec environ 75% de Cabernet-Sauvignon pour 25% de Merlot. Depuis la fin des années 70, les vins du Château Duhart-Milon Rothschild ont retrouvé le lustre qui était le sien, lors du classement de 1855. Dans le style de leur grand frère, Lafite, les vins de Duhart Milon associent finesse et élégance.',
            'alcool' => 13.5,
            'apogee' => '2017 - 2027',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '4ème grand cru classé',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 13,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Château Grand Corbin-Despagne',
            'annee' =>'2015',
            'description' => 'Description',
            'alcool' => 13.5,
            'apogee' => '2021 - 2045',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => 'Grand cru classé',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 14,
            'idType' => 1,
            'idStock' => $i,
            'nom' => '',
            'annee' =>'2015',
            'description' => 'Description',
            'alcool' => 13.5,
            'apogee' => '2021 - 2045',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => 'Grand cru classé',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 15,
            'idType' => 2,
            'idStock' => $i,
            'nom' => 'Château les Justices',
            'annee' =>'2015',
            'description' => 'Description',
            'alcool' => 13.5,
            'apogee' => '2018 - 2035',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '4ème grand cru classé',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 16,
            'idType' => 2,
            'idStock' => $i,
            'nom' => 'Château Boyd-Cantenac',
            'annee' =>'2015',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '2025 - 2050',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '3ème grand cru classé',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 17,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Château Cambon la Pelouse',
            'annee' =>'2015',
            'description' => 'Figurant parmi les plus anciens châteaux du Médoc, la propriété expédie ses vins en Angleterre dès le XVIIe siècle et en Hollande à partir du XVIIIe siècle. Sous la révolution, le château a appartenu à la famille de Cambon, à qui il doit son nom. Le vignoble, entièrement décimé lors du gel de 1956 et partiellement transformé alors en champ céréalier, a été replanté en 1975 et a une moyenne d’âge d’une trentaine d’années.',
            'alcool' => 13.5,
            'apogee' => '2022 - 2038',
            'tempCons' => '13',
            'tempServ' => '14',
            'titre' => 'Cru Bourgeois supérieur',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 18,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Château Duhart-Milon Rothschild',
            'annee' =>'2015',
            'description' => 'Le Château Duhart-Milon Rothschild est un 4ème grand cru classé sur la commune de Pauillac à Bordeaux. Cette propriété de 75 ha appartient depuis 1962 à la branche française des Rothschild, celle qui est aussi propriétaire du Château Lafite-Rothschild, le célèbre 1er grand cru classé. L’assemblage est médocain classique avec environ 75% de Cabernet-Sauvignon pour 25% de Merlot. Depuis la fin des années 70, les vins du Château Duhart-Milon Rothschild ont retrouvé le lustre qui était le sien, lors du classement de 1855. Dans le style de leur grand frère, Lafite, les vins de Duhart Milon associent finesse et élégance.',
            'alcool' => 13.5,
            'apogee' => '2023 - 2040',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '4ème grand cru classé',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 19,
            'idType' => 2,
            'idStock' => $i,
            'nom' => 'Château Respide-Médeville',
            'annee' =>'2015',
            'description' => 'Description',
            'alcool' => 13.5,
            'apogee' => '2018 - 2035',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '4ème grand cru classé',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 20,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Ribera Del Duero DO "Reserva"',
            'annee' =>'2014',
            'description' => 'Description',
            'alcool' => 14,
            'apogee' => '2018 - 2032',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 21,
            'idType' => 2,
            'idStock' => $i,
            'nom' => 'Château Smith Haut-Lafitte',
            'annee' =>'2014',
            'description' => 'Description',
            'alcool' => 13.5,
            'apogee' => '',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 1
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 22,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Château Meyney',
            'annee' =>'2015',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '2025 - 2046',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => 'Cru bourgeois supérieur',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 23,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Barolo « Castelletto »',
            'annee' =>'2011',
            'description' => 'Description',
            'alcool' => 14.5,
            'apogee' => '2019 - 2033',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 24,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Langhe Nebbiolo DOC',
            'annee' =>'2014',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '2015 - 2020',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
        DB::table('vins')->insert([
            'idCondi' => 1,  
            'idProd' => 25,
            'idType' => 1,
            'idStock' => $i,
            'nom' => 'Mount Hermon rouge',
            'annee' =>'2014',
            'description' => 'Description',
            'alcool' => 13,
            'apogee' => '',
            'tempCons' => '16',
            'tempServ' => '15',
            'titre' => '',
            'finDeSerie' => 0,
            'estBio' => 0,
            'estPrimeur' => 0
        ]);
    }
}