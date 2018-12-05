<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddDataController extends Controller
{
    
    public function index()
    {
       return view('formview');
       //return view('formview');
    }

    public function store(Request $request){
       // dd($request->all());
          // for validating
        $this->validate($request,
            ['email'=>'required|email',
              'name'=>'required'],
              [
                'email.required'=>'email can not be empty',       // this is coustom validation message
                'email'=>'email is not in correct format',      // this is coustom validation message
                'name.required'=>'name can not be empty'        // this is coustom validation message
          ]
        );
    }

   
}
