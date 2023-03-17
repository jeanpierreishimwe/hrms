<?php

namespace App\Http\Controllers;
use App\Models\attendence;
use App\Models\employee;
use App\Models\department;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;


class AttendencesController extends Controller
{
    //
    function getAttendencesEmployees(){
        return view('attendence',[
            'attandances'=>attendence::with('EmployeesData','DepartmentsData')->get(),
            'employees'=>employee::all(),
            'departmentList'=>department::all(),
        ]);
    }

    function MakeEmployeesAttandances(Request $request){
      
        attendence::create([
            
            'employee_id'=>$request->attend_employee_id,
            'attendance_date'=>$request->attend_date_time,
            'attendance_status'=>$request->attend_status,
       ]);
        return redirect()->back();
    }

    function ViewAttendence(){
        return view('view_attendence',[
        'StatusAttandance'=>attendence::with('EmployeesData','DepartmentsData')->get(),
        'employeed'=>employee::all(),
        'departmentListing'=>department::all(),
    ]);
    }

    function PayStipends($id){
        $PayEmployees =attendence::where('id',Crypt::decrypt(($id)))->update([

            'stipends'=>'0',

        ]);
        return redirect()->back();
    }



}
