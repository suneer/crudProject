<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Admin;

class ApiController extends Controllers
{

    public function login()
    {
         $admin=Admin::where('email',request('email'))->first();
         if(Hash::check(request('password'),$admin->password)){
            $token=$admin->createToken('frontend-app')->plainTextToken;
            return response()->json([
            
                $email=>request('email'),
                $password=>request('password'),
                'token'=>$token,
                'message'=>'login Succesfully',
                'status'=>200
            ]);
    
         }
         else{
            return response()->json([
            
                $email=>request('email'),
                $password=>request('password'),
                 'message'=>'Invalid Login Credentials',
                'status'=>250
            ]);
    
            

         }
        return response()->json([
            
            $email=request('email'),
            $password=request('password')
        ]);

    }
    public function getemployee()
    {
        $empId=auth()->employee()->id;
       
      $employee=Employee::find($empId);
      return response()->json([
        'status'=>200,
        'data'=>$employee,
        'message'=>'working fine'

      ]);
    }
    public function revoke(){
        $empId=auth()->employee()->id;
       
      $employee=Employee::find($empId);
      $employee->delete();
      return response()->json([
        'status'=>200,
        'message'=>'LoggedOut Succesfully'

      ]);

    }
}
