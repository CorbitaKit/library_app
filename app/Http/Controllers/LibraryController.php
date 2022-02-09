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
}
