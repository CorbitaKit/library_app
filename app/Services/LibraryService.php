<?php

    namespace App\Services;

    use App\Repositories\LibraryRepository;
    use  App\Http\Resources\LibraryResource;
    class LibraryService extends LibraryRepository{


        public function getLibraries() : object{
            return  LibraryResource::collection($this->model()->get());
        }
    }
