<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\LibraryBook;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){

            $new_book = new Book;

            $new_book->title = 'Book '.$i;
            $new_book->author = 'Author '.$i;
            $new_book->isbn = $i.'2345';
            $new_book->volume = '1';
            $new_book->save();

            $libraries = rand(1,5);

            for($j = 1; $j <= $libraries; $j++){
                LibraryBook::create([
                    'library_id' => $j,
                    'book_id' => $new_book->id
                ]);
            }
        }
    }
}
