<?php

    namespace App\Helpers;

    class  BookHelper{

        public function transformToModefiedObject($data,$book){

            $book->title = $data->title;
            $book->author = $data->author;
            $book->volume = $data->volume;
            $book->isbn = $data->isbn;
            $book->status = 'IN';
            return $book;
        }
    }
