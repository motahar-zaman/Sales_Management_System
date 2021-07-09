<?php


namespace App\Controllers\Authentication;

use App\Controllers\BaseController;


class AuthController extends BaseController
{
    public function index(){
        return view("login", ["title" => "Login"]);
    }
}