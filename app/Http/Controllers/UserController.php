<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('User.user_homecontent');
    }
    public  function  showBlog(){
        return view('User.blogs');
    }
}
