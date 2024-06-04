<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\StaffController;



Route::name('admin.')->group(function () {
    Route::get('admin/login', [LoginController::class,'login'])->name('login');
Route::post('admin/do-login', [LoginController::class,'doLogin'])->name('do.login');
Route::get('admin/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
Route::get('admin/company/create', [CompanyController::class,'create'])->name('company.create');
Route::post('admin/company/save', [CompanyController::class,'save'])->name('company.save');
Route::get('admin/company/index', [CompanyController::class,'index'])->name('company.index');
Route::get('admin/company/edit/{id}', [CompanyController::class,'edit'])->name('company.edit');
Route::post('admin/company/update', [CompanyController::class,'update'])->name('company.update');
Route::get('admin/company/delete/{id}', [CompanyController::class,'delete'])->name('company.delete');
Route::get('admin/employee/index', [EmployeeController::class,'index'])->name('employee.index');
Route::get('admin/employee/create', [EmployeeController::class,'create'])->name('employee.create');
Route::post('admin/employee/save', [EmployeeController::class,'save'])->name('employee.save');
Route::get('admin/employee/edit/{id}', [EmployeeController::class,'edit'])->name('employee.edit');
Route::post('admin/employee/update', [EmployeeController::class,'update'])->name('employee.update');
Route::get('admin/employee/delete/{id}', [EmployeeController::class,'delete'])->name('employee.delete');
Route::get('admin/logout', [LoginController::class,'logout'])->name('logout');
Route::get('admin/staff/index', [StaffController::class,'index'])->name('staff.index');
Route::get('admin/staff/create', [StaffController::class,'create'])->name('staff.create');

   
});
