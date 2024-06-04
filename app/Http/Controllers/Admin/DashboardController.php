<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $employees=Employee::orderBy('id', 'ASC')->paginate(4);
       return view('admin.dashboard',compact('employees'));
    }
   
}
