<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends CommonController{
    //test
    public function login(){
        //echo "hahahah";
        return view('admin.login');
    }
}
