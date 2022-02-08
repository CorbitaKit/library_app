<?php

    namespace App\Repositories;
    use App\User;
    use Illuminate\Support\Facades\DB;
    use App\Helpers\UserHelper;
    use App\Events\LibraryProcess;
class UserRepository{

        // Initialize global data for userRepository class

        protected $model;
        protected $help;
        public function __construct(UserHelper $userhelper){

            $this->help =  $userhelper;
        }


        public function create($data){


            //Create database transaction for multiple database table entry
            try{


                DB::beginTransaction();

                //Transform raw data from front-end into object to save into user table
                $new_user = $this->help->transformToObject($data,new User);

                $new_user->save();

                if($data->role == 3){
                    event(new LibraryProcess($data,$new_user->id));
                }
                DB::commit();
            }
            catch(\Exception $e){
                dd($e);
                DB::rollback();
            }


        }
    }

?>
