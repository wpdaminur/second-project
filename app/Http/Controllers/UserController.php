<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class UserController extends Controller
{
    protected $fullName;
    public function fullName(Request $request)
    {
        //return $request->first_name.''.$request->last_name;
        $this->fullName= $request->first_name.' '.$request->last_name;
        return view('test',['result' => $this->fullName]);
    }
}
