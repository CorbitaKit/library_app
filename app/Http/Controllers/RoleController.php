<?php

namespace App\Http\Controllers;
use App\Repositories\RoleRepository;
use App\Http\Resources\Role as  RoleResource;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __invoke(RoleRepository $roleRepository){

        return response(json_encode($roleRepository->model()->get()),200);

    }
}
