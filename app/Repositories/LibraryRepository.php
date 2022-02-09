<?php

    namespace App\Repositories;
    use App\Interfaces\LibraryInterface;
    use App\Library;

    class  LibraryRepository implements LibraryInterface{

        public function model() : object{
            return new Library;
        }
    }
