<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Http\Resources\UserResource;


class UserController extends Controller
{
    /**
     * Obitiene todos los usuarios
     */
    public function index(){
        $data = User::all();

        return UserResource::collection($data);
    }
}
