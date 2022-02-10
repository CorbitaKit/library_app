<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LibraryService;

class LibraryController extends Controller
{

    protected $libraryService;

    public function __construct(LibraryService $libraryService){
        $this->libraryService = $libraryService;
    }


    public function getLibraries(){

        return response(json_encode($this->libraryService->getLibraries()),200);

    }

    public function getLibraryList(){
        return response(json_encode($this->libraryService->getLibraryList()),200);
    }

    public function getLibraryBooks($library_id){
        return response(json_encode($this->libraryService->getLibraryBooks($library_id)),200);
    }

    public  function borrowBook(Request $request){
        $this->libraryService->borrowBook($request);

        return response('success',200);
    }

    public function returnBook(Request $request){
        $this->libraryService->returnBook($request);

        return response('success',200);
    }
}
