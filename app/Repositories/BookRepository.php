<?php

    namespace App\Repositories;
    use App\Interfaces\BookInterface;
    use App\Book;
    use App\Helpers\BookHelper;

    class BookRepository implements BookInterface{
        protected $help;

        public function __construct(BookHelper $help){
            $this->help = $help;
        }
        public function model() : object{
            return new Book;
        }

        public function createBook(object $data) : int{
            $new_book = $this->help->transformToModefiedObject($data,new Book);

            $new_book->save();

            return $new_book->id;
        }
    }
