<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Pelicula extends Model
{
    use Searchable;

    protected $table = 'peliculas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function searchableAs()
    {
        return 'id';
    }


    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}


// class Post extends Model
// {
//     use Searchable;
// }