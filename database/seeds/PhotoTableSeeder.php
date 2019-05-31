<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PhotoTableSeeder extends Seeder {

    public function run() {
        DB::table('photos')->delete();
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/image/500x500/9df78eab33525d08d6e5fb8d27136e95/S/y/Syrah-Grand-Metral-Provins.png.png',
                'idVin' => 1,
                'alt' => 'test',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/C/h/Chablis-Pommier.png.png',
                'idVin' => 2,
                'alt' => 'Chablis - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/D/o/Dopff-Gewurztraminer-vendange-tardive.png.png',
                'idVin' => 3,
                'alt' => 'Gewürztraminer de Riquewihr «Vendanges Tardives»',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/N/u/Nuits-Saint-Georges-Mugneret.png_2.png',
                'idVin' => 4,
                'alt' => 'Nuits-St-Georges, 1er cru Aux Boudots - 2013',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/C/o/Corton_Bressandes_Chandon_Briailles.png_2.png',
                'idVin' => 5,
                'alt' => 'Corton-Bressandes "Grand Cru" - 2013',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/N/u/Nuits-st-Georges-Chenes-Carteaux-Gouges.png_4.png',
                'idVin' => 6,
                'alt' => 'Nuits-St-Georges, 1er cru Les Chênes Carteaux - 2014',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/M/E/MEURSAULT_CLOS_DE_TAVAUX_Monopole_2015.png_1.png',
                'idVin' => 7,
                'alt' => 'MEURSAULT "Clos de Tavaux" Monopole AC 2015 - Domaine François Gaunoux - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/T/e/Terre-Nere-Etna-Rosso.png_3.png',
                'idVin' => 8,
                'alt' => 'Etna Rosso DOC - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/L/e/Les_Pruliers.png.png',
                'idVin' => 9,
                'alt' => 'NUITS-ST-GEORGES 1er cru "Les Pruliers" 2016 - Domaine Philippe Gavignet - 2016',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/c/h/chablis_les_vieilles_vignes_2017.png.png',
                'idVin' => 10,
                'alt' => 'CHABLIS "Les Vieilles Vignes" - 2017',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/U/n/Untitled-3.png.png',
                'idVin' => 11,
                'alt' => 'SANTENAY 1er cru "La Comme" - Ch. Philippe le Hardi - 2016',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/C/h/Chateau-les-Cruzelles.png_3.png',
                'idVin' => 12,
                'alt' => 'Château les Cruzelles - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/C/h/Chateau_Grand_Corbin_Despagne.png_10.png',
                'idVin' => 13,
                'alt' => 'Château Grand Corbin-Despagne - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/C/h/Chateau_Lynch_Moussas.png.png',
                'idVin' => 14,
                'alt' => 'Château Lynch-Moussas - 2015',
                'estGalerie' => 1,
            ]);
    
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/c/h/chateau-les-justices.PNG_17.png',
                'idVin' => 15,
                'alt' => 'Château les Justices - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/c/h/chateau_boyd_cantenac.png_37.png',
                'idVin' => 16,
                'alt' => 'Château Boyd-Cantenac - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/C/h/Chateau_Cambon_la_Pelouse.png_3.png',
                'idVin' => 17,
                'alt' => 'Château Cambon la Pelouse - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/c/h/chateau-duhart-milon-rothschild.png_7.png',
                'idVin' => 18,
                'alt' => 'Château Duhart-Milon Rothschild - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/c/h/chateau-respide-medeville.png_7.png',
                'idVin' => 19,
                'alt' => 'Château Respide-Médeville - 2015',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/r/i/ribera_del_douro_Fuentespina.png_7.png',
                'idVin' => 20,
                'alt' => 'Ribera Del Duero DO "Reserva" - 2013',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/C/h/Chateau_Smith_Haut_Lafitte_Blanc.png_4.png',
                'idVin' => 21,
                'alt' => 'Château Smith Haut-Lafitte BLANC - 2014',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/C/h/Chateau-Meyney.png_15.png',
                'idVin' => 22,
                'alt' => 'Château Meyney - 2015',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/b/a/barolo-castelletto-manzone.PNG_4.png',
                'idVin' => 23,
                'alt' => 'Barolo « Castelletto » DOCG - 2011',
                'estGalerie' => 0,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/L/a/Langhe_Nebbiolo_Cantina_del_pino.png_3.png',
                'idVin' => 24,
                'alt' => 'Langhe Nebbiolo DOC - 2014',
                'estGalerie' => 1,
            ]);
            DB::table('photos')->insert([
                'url' => 'https://www.gazzar.ch/media/catalog/product/cache/1/thumbnail/80x322/9df78eab33525d08d6e5fb8d27136e95/M/o/Mount-Hermon-red.png_3.png',
                'idVin' => 25,
                'alt' => 'Mount Hermon rouge - 2014',
                'estGalerie' => 0,
            ]);
    }
}