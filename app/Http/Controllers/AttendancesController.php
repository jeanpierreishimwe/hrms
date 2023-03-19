<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\department;
use App\Models\job_title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttendancesController extends Controller
{
    //



    function getAllEmployeeAttendences(){
        $employees=employee::with('DepartmentsDatas','JobsTitlesDatas')->whereDate('updated_at','!=',Carbon::today()->format("Y-m-d"))->get();
        $employees_money=employee::with('DepartmentsDatas','JobsTitlesDatas')->get();
        //dd($employees);
        $jobs=job_title::all();
        $depart=department::all();
        return view('attendances',[
            'employee'=>$employees,
            'jobs'=>$jobs,
            'depart'=>$depart,
            'stipends_money'=>$employees_money,
        ]);
    }

    function pay($id){

$findEmployee = employee::where('id',$id)->update([
    'stipends'=>'0'
]);
        return redirect()->back();
    }

    function present($id)
    {
        $findEmployee = employee::where('id',$id)->update([
            'stipends'=>DB::raw('stipends + 1')
        ]);

        return redirect()->back();

    }
    function absent($id)
    {
        $findEmployee = employee::where('id',$id)->update([
            'stipends'=>DB::raw('stipends + 0')
        ]);

        return redirect()->back();

    }
}


