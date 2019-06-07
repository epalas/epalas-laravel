<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PhotoTableSeeder extends Seeder {

    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('photos')->truncate();
            DB::table('photos')->insert([
                'id' => 1,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 1,
                'alt' => 'Syrah du Valais « Grand Métral »',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 2,
                'url' => 'img/vins/blanc.jpg',
                'idVin' => 2,
                'alt' => 'Chablis - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 3,
                'url' => 'img/vins/blanc.jpg',
                'idVin' => 3,
                'alt' => 'Nuits-St-Croix « Vendanges Tardives »',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 4,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 4,
                'alt' => 'Nuits-St-Georges, 1er cru Aux Boudots - 2013',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 5,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 5,
                'alt' => 'Corton-Bressandes « Grand Cru » - 2013',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 6,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 6,
                'alt' => 'Nuits-St-Georges, 1er cru Les Chênes Carteaux - 2014',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 7,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 7,
                'alt' => 'MEURSAULT « Clos de Tavaux » Monopole AC 2015 - Domaine François Gaunoux - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 8,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 8,
                'alt' => 'Etna Rosso DOC - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 9,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 9,
                'alt' => 'NUITS-ST-GEORGES 1er cru "Les Pruliers" 2016 - Domaine Philippe Gavignet - 2016',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 10,
                'url' => 'img/vins/blanc.jpg',
                'idVin' => 10,
                'alt' => 'CHABLIS "Les Vieilles Vignes" - 2017',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 11,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 11,
                'alt' => 'SANTENAY 1er cru "La Comme" - Ch. Philippe le Hardi - 2016',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 12,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 12,
                'alt' => 'Château les Cruzelles - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 13,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 13,
                'alt' => 'Château Grand Corbin-Despagne - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 14,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 14,
                'alt' => 'Château Lynch-Moussas - 2015',
                'estGalerie' => 1,
            ]);
    
            DB::table('photos')->insert([
                'id' => 15,
                'url' => 'img/vins/blanc.jpg',
                'idVin' => 15,
                'alt' => 'Château les Justices - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 16,
                'url' => 'img/vins/blanc.jpg',
                'idVin' => 16,
                'alt' => 'Château Boyd-Cantenac - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 17,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 17,
                'alt' => 'Château Cambon la Pelouse - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 18,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 18,
                'alt' => 'Château Duhart-Milon Rothschild - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 19,
                'url' => 'img/vins/blanc.jpg',
                'idVin' => 19,
                'alt' => 'Château Respide-Médeville - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 20,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 20,
                'alt' => 'Ribera Del Duero DO « Reserva » - 2013',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 21,
                'url' => 'img/vins/blanc.jpg',
                'idVin' => 21,
                'alt' => 'Château Smith Haut-Lafitte BLANC - 2014',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 22,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 22,
                'alt' => 'Château Meyney - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 23,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 23,
                'alt' => 'Barolo « Castelletto » DOCG - 2011',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 24,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 24,
                'alt' => 'Langhe Nebbiolo DOC - 2014',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'id' => 25,
                'url' => 'img/vins/rouge.jpg',
                'idVin' => 25,
                'alt' => 'Mount Hermon rouge - 2014',
                'estGalerie' => 0,
            ]);
            // rosey
            DB::table('photos')->insert([
                'id' => 26,
                'url' => 'img/vins/rosey.jpg',
                'idVin' => 26,
                'alt' => 'Oeil de Perdrix - 2017',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 27,
                'url' => 'img/vins/rosey.jpg',
                'idVin' => 27,
                'alt' => 'Dôle Blanche - 2018',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 28,
                'url' => 'img/vins/rosey.jpg',
                'idVin' => 28,
                'alt' => 'Rosé de Gamay VdP Romand - 2017',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 29,
                'url' => 'img/vins/rosey.jpg',
                'idVin' => 29,
                'alt' => 'Apologia Pink - 2017',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 30,
                'url' => 'img/vins/rosey.jpg',
                'idVin' => 30,
                'alt' => 'Rosé de Gamay VdP Schwyz - 2016',
                'estGalerie' => 0,
            ]);
            // mousseux
            DB::table('photos')->insert([
                'id' => 31,
                'url' => 'img/vins/mousseux.jpg',
                'idVin' => 31,
                'alt' => 'Champagne Charles Mignon - 2018',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 32,
                'url' => 'img/vins/mousseux.jpg',
                'idVin' => 32,
                'alt' => 'Crémant Alsace - 2016',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 33,
                'url' => 'img/vins/mousseux.jpg',
                'idVin' => 33,
                'alt' => 'Champagne Gonet-Médeville - 2016',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 34,
                'url' => 'img/vins/mousseux.jpg',
                'idVin' => 34,
                'alt' => 'Prosecco di Valdobbiadene - 2016',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 35,
                'url' => 'img/vins/mousseux.jpg',
                'idVin' => 35,
                'alt' => 'Champagne Taittinger - 2016',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 36,
                'url' => 'img/vins/mousseux.jpg',
                'idVin' => 36,
                'alt' => 'Champagne Louis Roederer - 2016',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'id' => 37,
                'url' => 'img/vins/mousseux.jpg',
                'idVin' => 37,
                'alt' => 'Crémant Yverdon-les-Bains - 2016',
                'estGalerie' => 0,
            ]);
    }
}