<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibraryBook extends Model
{

    protected $fillable = ['is_borrowed','return_date'];


    public function status(){
        if(! $this->is_borrowed){
            return "IN";
        }

        return "OUT";
    }
}
