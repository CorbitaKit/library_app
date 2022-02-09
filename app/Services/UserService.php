<?php

    namespace App\Services;
    use App\Repositories\UserRepository;
    use App\Events\LibraryProcess;



    class UserService extends UserRepository{

        public function create($data){


            $new_user_id =  $this->createUser($data);

            //Fire an event if the user created is a librarian to create a library
            if($data->role == 3){
                event(new LibraryProcess($data,$new_user_id));
            }
        }


        public function getUser($id){
            return $this->model()->where('id',$id)->first();
        }

        public function getUsers(){
            return $this->model()->with('role')->get();
        }

        public function destroy($id){
            $this->model()->findOrFail($id)->delete();
        }

        public function update($data,$user_id){

            $user = $this->model()->findOrFail($user_id);


            $this->updateUser($data,$user);
        }

    }
