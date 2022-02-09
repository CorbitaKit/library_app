<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;
use App\Http\Requests\BookRequest;
class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService){
        $this->bookService = $bookService;
    }

    public function create(BookRequest $request){

        $new_book_id = $this->bookService->create($request);

        return response("Created",201);
    }

    public function getBooks(){
        return response(json_encode($this->bookService->getBooks()),200);
    }

    public function getBook($book_id){
        return response(json_encode($this->bookService->getBook($book_id)),200);
    }
}
