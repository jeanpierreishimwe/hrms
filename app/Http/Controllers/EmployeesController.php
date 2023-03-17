<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\job_title;
use App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class EmployeesController extends Controller
{
    //

    function getAllEmployeesDatas(){
        $employees=employee::with('DepartmentsDatas','JobsTitlesDatas')->get();
            $jobs=job_title::all();
            $depart=department::all();
        
        return view('employee_s',[
            'employee'=>$employees,
            'jobs'=>$jobs,
            'depart'=>$depart,
        ]);
    }

    function PayStipends($id){
        $findEmployees =employee::where('id',$id)->update([

            'stipends'=>'0',
        ]);
        return redirect('/employee');
    }

    function RegisterEmployees(Request $request){
        employee::create([
            'firstname'=> $request->regi_employee_fname,
            'lastname'=> $request->regi_employee_lname,
            'date_of_birth'=> $request->regi_employee_dob,
            'job_title_id'=> $request->regis_employee_job_title,
            'department_id'=> $request->regi_employee_department_name,
        ]);
        return redirect()->back();
    }

    function EditingEmployeesDatas($id){

        $employeeToEdit=employee::findOrFail(Crypt::decrypt($id));
        $Editjobs=job_title::all();
        $Editdepart=department::all();
        return view ('editing_employee',[
            'employeeToEdit'=>$employeeToEdit,
            'Editjobs'=>$Editjobs,
            'Editdepart'=>$Editdepart 

        ]);

        

        
}

function UpdatingEmployeesDatas(Request $request){
    employee::where('id',Crypt::decrypt($request->employee_id))->update([
                'firstname'=>$request->update_employee_firstname,
                'lastname'=>$request->update_empoyee_lastname,
                'date_of_birth'=>$request->update_employee_dob,
                'job_title_id'=>$request->update_employee_job_title_name,
                'department_id'=>$request->update_employee_department_name,

    ]);
    return redirect('/employee_s');
}
function DeleteEmployee($id){
    employee::findOrFail(Crypt::decrypt($id))->delete();
        return redirect()->back();
}
}

