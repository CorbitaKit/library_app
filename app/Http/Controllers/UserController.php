<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
class UserController extends Controller
{

    protected $userService;


    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function create(UserRequest $request){

        $this->userService->create($request);

        return response('Created',201);
    }

    public function getUser($user_id){
        $user = $this->userService->getUser($user_id);

        return response(json_encode($user),200);

    }

    public function getUsers(){
        $users = $this->userService->getUsers();

        return response(json_encode($users),200);
    }

    public function delete($user_id){
        $this->userService->destroy($user_id);

        return response('Deleted',200);
    }
}
