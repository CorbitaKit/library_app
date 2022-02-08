<?php

    namespace App\Helpers;
    use Illuminate\Support\Facades\Hash;
    class UserHelper{


        public function transformToObject($data,$new_user){

            $new_user->name = $data->name;
            $new_user->email = $data->email;
            $new_user->password = Hash::make($data->password);
            $new_user->role_id = $data->role;


            return $new_user;
        }
    }
