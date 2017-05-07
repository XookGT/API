<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //Cada Curso pertenece a un nivel y una categoria

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'name',
            'description',
            'starts',
            'rank',
            'id_categorie',
            'id_level',
    ];
}
