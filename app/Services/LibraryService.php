<?php

    namespace App\Services;

    use App\Repositories\LibraryRepository;
    use  App\Http\Resources\LibraryResource;
    class LibraryService extends LibraryRepository{


        public function getLibraries() : object{
            return  LibraryResource::collection($this->model()->get());
        }

        public function getLibraryList() : object{
            return $this->model()->get();
        }

        public function getLibraryBooks(int $library_id) : object{

            $books = $this->model()->with('books')->where('id',$library_id)->get();


            return $books;
        }

        public function borrowBook(object $data) : void{

            $this->doBorrowBook($data);
        }

        public function returnBook(object $data) : void{
            $this->doReturnBook($data);
        }
    }
