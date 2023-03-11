<?php

namespace App\Http\Controllers;
use App\Models\job_title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class JobTitlesController extends Controller
{
    //
    function getAllJobs(){
        return view('job_titles',[
            'jobs_list'=>job_title::all(),
        ]);
    }

    function SaveJobsData(Request $request){
        job_title::create([
             'job_title_name'=>$request->add_job_title,
             'description'=>$request->add_job_description,
        ]);
        return redirect()->back();
    }
 
    function EditingJobDatas($id){
        return view('edit_job_titles',[
            'job_data'=>job_title::findOrFail(Crypt::decrypt($id)),
        ]);
    }
    function UpdatingJobData(Request $request){
        job_title::where('id',Crypt::decrypt($request->job_title_id))->update([
            'job_title_name'=>$request->update_job_title,
            'description'=>$request->update_job_description,
        ]);
        return redirect('/job_titles');
    }

    function DeleteJobDatas($id){
        job_title::findOrFail(Crypt::decrypt($id))->delete();
        return redirect()->back();
    }
}
