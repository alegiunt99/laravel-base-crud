<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = config('comics');

	    foreach($data as $item){

            $newComic = new Comic();
            $newComic->title = $item['title'];
            $newComic->thumb = $item['thumb'];
            $newComic->price = $item['price'];
            $newComic->series = $item['series'];
            $newComic->sale_date = $item['sale_date'];
            $newComic->type = $item['type'];
            
            $newComic->save();


        }
    }

}