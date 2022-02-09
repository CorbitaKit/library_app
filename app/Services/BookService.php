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

        public function getBooks() : object{
            return $this->model()->get();
        }

        public function getBook(int $book_id) : object{
            $book = $this->model()->with('library')->where('id',$book_id)->first();


            return $book;
        }
    }
