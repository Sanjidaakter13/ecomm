<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class CustomerController extends Controller
{
    public function userlist(){
        $users=User::all();

        return response()->json([
            'success'=>true,
            'message'=>'user data loaded from controller',
            'data'=>$users,
            'status'=>200,
        ]);
    }


    public function createuser(Request $request){
       
           $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
            ]);

            return response()->json([
                'success'=>true,
                'message'=>'customer created',
                'data'=>$user,
                'status'=>200,
            ]);

    }
}
