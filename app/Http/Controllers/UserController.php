<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\repositories\UserRepository;
class UserController extends Controller
{


    public function create(UserRequest $request,UserRepository $userRepo){

        $userRepo->create($request);

        return response('Created',200);
    }
}
