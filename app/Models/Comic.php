<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    public static function generateSlug($reference){
        /*
            1. generaro lo slug
            2. faccio una query al db per controllare se lo slug esiste già nel database
            3. controllo se lo slug esiste già nel database
            4. se esiste aggiungo 1 allo slug generato e così via fino a quando non trovo una slug inesistente
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
