<?php

    namespace App\Interfaces;

    interface  BookInterface{

        public function model() : object;

        public function createBook(object $data) : int;
    }
