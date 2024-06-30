<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromController extends Controller
{
    //pass name and email to the view in jason format
    // public function contact(Request $request){ }
    public function formhandle(Request $request){
        // dd($request->all());
        $name = $request->input('name');
        $email = $request->input('email');

        if($request->has('profile_picture')){
            $file = $request->file('profile_picture');
            $name = $file->getClientOriginalName();
            $file->storeAs('uploads',$name ,'public');
        }
        // return [
        //     'name' => $name,
        //     'email' => $email
        // ];
        return redirect(route('form.get'))->with(
            [
                'Success'=>'Form submitted successfully',
            ]
        );
    }
      
    
}


