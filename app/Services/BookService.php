<?php

    namespace App\Services;
    use App\Repositories\BookRepository;
    use App\Events\LibraryBookProcess;


class BookService extends BookRepository{


        public function create(object $data) : int{

            $new_book_id = $this->createBook($data);

            event(new LibraryBookProcess($data->libraries,$new_book_id));

            return $new_book_id;
        }
    }
