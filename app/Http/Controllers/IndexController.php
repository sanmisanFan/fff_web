<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class IndexController extends Controller
{
    //test DB connection
    public function index(){
        //echo "test information";
        $pdo = DB::connection()->getPdo();
        dd($pdo);
    }
}
