<?php

    namespace App\Interfaces;

    interface LibraryInterface{

        public function model() : object;

        public function doBorrowBook(object $data) : void;

        public function doReturnBook(object $data) : void;
    }
