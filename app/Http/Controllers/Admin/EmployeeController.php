<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;

class EmployeeController extends Controller
{
    public function index(){
        $employees= Employee::orderBy('id', 'ASC')->paginate(10);
        
        return view ('employee.index',compact('employees'));
      
    }
    public function create()
    {
        $companies=Company::all();
         return view ('employee.create',compact('companies'));
    }
    public function save()
{
    
    $employee= request()->post();
    Employee::create($employee);
    return redirect()->route('admin.employee.index');
    
}
public function edit($id){
    $employee=Employee::find($id);
    $companies=Company::all();
    
        return view('employee.edit', compact('employee','companies'));

}
public function update(Request $request){
    $input=request()->all();
    $employee=Employee::find($request->id);
    

    $employee->update($input);
    return redirect()->route('admin.employee.index');

}
public function delete($id){
    $employee=Employee::find($id);
    $employee->delete();
    return redirect()->route('admin.employee.index');


}
}

