<?php

    namespace App\Repositories;
    use App\Interfaces\LibraryInterface;
    use App\Library;
    use App\LibraryBook;
    class  LibraryRepository implements LibraryInterface{

        public function model() : object{
            return new Library;
        }

        public function doBorrowBook(object $data) : void{

            $library_book = self::getLibraryBook($data);

            $library_book->update(['is_borrowed' => 1, 'return_date' => $data->return_date]);
        }

        public function doReturnBook(object $data) : void{

            $library_book = self::getLibraryBook($data);

            $library_book->update(['is_borrowed' => 0, 'return_date' => null]);
        }

        private static function getLibraryBook(object $data) : object{

            return LibraryBook::where('book_id',$data->book_id)
                              ->where('library_id',$data->library_id)
                              ->first();
        }
    }
