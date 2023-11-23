<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('products');

        foreach($products as $product){
            $new_comic = new Comic();
            $new_comic->title = $product['title'];
            $new_comic->slug = $this->generateSlug($new_comic->title);
            $new_comic->description = $product['description'];
            $new_comic->thumb = $product['thumb'];
            $new_comic->price = $product['price'];
            $new_comic->series = $product['series'];
            $new_comic->sale_date = $product['sale_date'];
            $new_comic->type = $product['type'];
            //$new_comic->artists = $product['artists'];
            //$new_comic->writers = $product['writers'];

            $new_comic->save();
        }
    }

    private function generateSlug($reference){
        /*
            1. generare lo slug
            2. fare una quesry al db per controllare se lo slug esiste già nel database
            3. controllare se lo slug esiste già nel database
            4. se esiste aggiungere 1 allo slug generato e così via fino a quando non trovo una slug inesistente
        */

        //1.
        $slug =  Str::slug($reference, '-');
        $original_slug = $slug;

        //2.
        $exists = Comic::where('slug', $slug)->first();
        $c = 1;

        //3.
        while($exists){
            $slug = $original_slug. '-'. $c;
            $exists = Comic::where('slug', $slug)->first();

            $c++;
        }

        return $slug;
    }
}
