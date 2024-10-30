<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helpers;
use App\Models\Album;
use Faker\Generator as Faker;
class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //vado a prendere i dati dal mio csv euso il metodo creato per aprirlo in lettura
        $albumData = Helpers::getCsv(__DIR__ . '/bts.csv');

        foreach ($albumData as $indice=>$riga){
            if( $indice != 0){
                $newAlbum = new Album();
                $newAlbum->title = $riga[0];
                $newAlbum->date_release =$riga[1];
                $newAlbum->img_url= $riga[2];
                $newAlbum->number_of_tracks = $riga[3];
                $newAlbum->main_track = $riga[4];
                $newAlbum->description= $riga[5];
                $newAlbum->save();
            }
        }
    }
}
