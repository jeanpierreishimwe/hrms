<?php

namespace App\Http\Controllers;
use App\Models\Job_title;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    function getAllJobTitle(){
        return view ('job-title');
    }
    function saveJobTitle(Request $request){
        //retutn $request->title;
        return $request->all();
        job_title::create([//$request-> $request->all(); you can use this one only to insert data request
            'job_title_name'=>$request->title,
            'description'=>$request->description,
            /*
            $job_title::create -> job_title();

                $job_title->job_title_name = request->title;
                $job_title->dexsription = request->title;
            ])
            */
        ]);
        return redirect('/');
       // return redirect('/')->back();   
    }
}
