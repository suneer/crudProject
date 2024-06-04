<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;


class CompanyController extends Controller
{
    public function create(){
        return view ('company.create');
    }
    public function index(){

        $companies = Company::orderBy('id', 'DESC')->paginate(10);
       // return $companies;
        return view('company.index', compact('companies'));
    }
    public function save(Request $request){
        request()->validate(['name'=>'required','email'=>'required','logo'=>'required','website'=>'required']);
        $company=$request->post();  
      

        if($request->hasFile('logo')){
            $extension =$request-> logo->extension(); 
            $filename=Str::random(6)."_".time()."_company".".".$extension;
          
           
            $request->logo->storeAs('images',$filename);
            $company['logo']=$filename;
        }
       
       
       Company::create($company);
        return redirect()->route('admin.company.index');
       // return "success";
       // return redirect()->route('company.index')->with('success','Company has been created successfully.');

     
         
    }
    public function edit($id){
       $company=Company::find($id);
        return view('company.edit', compact('company'));
    }
    public function update(Request $request){
      //  $input=request()->all();
       // $id=request('id');
        $company=Company::find($request->id);
        if($request->hasFile('logo')){
            Storage::delete('images/'.$company->logo);
            $extension =$request-> logo->extension(); 
            $filename=Str::random(6)."_".time()."_company".".".$extension;
          
           
            $request->logo->storeAs('images',$filename);
           // $input['logo']=$filename;
        }
       // $company=update($input);
        $company->update([
            'name'=>request('name'),
            'email'=>request('email'),
            'logo'=> '$filename',
            'website'=>request('website')
        ]);
        return redirect()->route('admin.company.index');
        
    }
    public function delete($id){
        
        $company=Company::find($id);
        if(!empty($company)){
            Storage::delete('images/'.$company->logo);
        }
        
        $company->delete();
        return redirect()->route('admin.company.index');
    }
    
}
