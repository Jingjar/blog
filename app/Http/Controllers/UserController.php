<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    //
    public function hello($id)
    {
        return 'User' . $id;
    }
}