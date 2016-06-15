<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mongo;

use DB;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class UserController extends Controller
{
    public function hello()
    {
    	$hello =  DB::connection('mongodb')->collection('users')->get();
    	 dd($hello);
    	
    }
}
