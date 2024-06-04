<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Employee;
use App\Models\Company;

class StaffController extends Controller
{
    public function index()
    {
        $employees=Employee::orderBy('id', 'DESC')->paginate(10);
       // return $employees;
       return view ('employee.index',compact('employees'));
    }
    public function create()
    {
        $companies=Company::all();
       // return $companies;
         return view ('employee.create',compact('companies'));
    }

    
}
