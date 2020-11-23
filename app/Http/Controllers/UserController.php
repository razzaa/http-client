<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
class UserController extends Controller
{
    function showData(){
        $data= Http::get("https://reqres.in/api/users?page=1");
        return view('user',['collection'=>$data['data']]);
    }
}
