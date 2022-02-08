<?php

    namespace App\Repositories;
    use App\User;
    use Illuminate\Support\Facades\DB;
    use App\Helpers\UserHelper;

    use App\Interfaces\UserInterface;
class UserRepository implements UserInterface{

        // Initialize global data for userRepository class

        protected $model;
        protected $help;
        public function __construct(UserHelper $userhelper){

            $this->help =  $userhelper;
        }


        public function model(){
            return new User;
        }

        public function createUser($data){

            //Transform raw data from front-end into object to save into user table
            $new_user = $this->help->transformToObject($data,new User);

            $new_user->save();




        }






    }

?>
