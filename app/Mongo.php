<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Mongo;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Mongo extends Eloquent
{
	protected $connection = 'mongodb';

     protected $collection = 'users';

     public function users()
     {
     	//$user = DB::connection('mongodb')->collection('users')->get();
     	return $this->connection;
     }
}
