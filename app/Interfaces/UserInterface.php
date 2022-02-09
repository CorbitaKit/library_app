<?php

    namespace App\Interfaces;

    interface UserInterface{


        public function model();

        public function createUser($data);

        public function updateUser($data,$user);


    }
