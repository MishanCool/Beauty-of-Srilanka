<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewPlaceModel extends Model
{
    protected $table = 'add_places';

    protected $fillable = [
        'author', 'district', 'title', 'body', 'image',
    ];
}
