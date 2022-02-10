<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public function user(){
        return $this->hasOne('App\User','id');
    }

    public function books(){
        return $this->belongsToMany('App\Book','library_books')
                    ->withPivot(['is_borrowed','return_date'])
                    ->as('library_books');
    }
}
