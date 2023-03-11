<?php

namespace App\Http\Controllers;
use App\models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DepartmentController extends Controller
{
    function getAllDepartment(){
        return view('depart',[
            'department_list'=>department::all(),
        ]);
    }
    function SaveDepartments(Request $request){
        department::create([
            'department_name'=>$request->title,
            'description'=>$request->description,

        ]);
        return redirect('/depart');
    }

    function DeleteDepartments($id){
         department::findOrFail(Crypt::decrypt($id))->delete();
        return redirect('/depart');
    }
    function EditingDepartment($id){
        return view('edit_depart',[
            'edit_department'=> department::findOrFail(Crypt::decrypt($id)),
        ]);

    }
    function UpdateDepartments(Request $request){
        department::where('id',Crypt::decrypt($request->department_id))->update([
           'department_name'=>$request->department_name,
           'description'=>$request->description,

        ]);

        return redirect('/depart');
        //return redirect()->back();
    }
}
