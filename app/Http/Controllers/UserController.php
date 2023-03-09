<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\salary;
use App\Models\employee;
use App\Models\department;
use App\Models\job_title;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getAllData(){
       // return \App\Models\User::all()->get();
       // return \App\Models\User::all()->first();
        // return  User::where('email','email2@gmail.com')->get()->first();
         //\App\Models\User::count();
         return view('welcome',[
             'user_count'=>User::count(),//to display number of users that are in database of users table
             'department_count'=>department::count(),//to display number of users that are in database of users table
             'employee_count'=>employee::count(),//to display number of users that are in database of users table
             'jobs_count'=>job_title::count(),//to display number of users that are in database of users table
             'users'=>User::all(),//to display all data of usrs email,phone,names.locations
         ]);
    }
}
