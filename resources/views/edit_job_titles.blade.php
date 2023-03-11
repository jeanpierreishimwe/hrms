@extends('layouts.master')
@section ('breadcumb','Update-JOB')
@section('contents')
<div class="content">
   <div class="container-fluid">
       <div class="row">
          
           <div class="col-lg-12 col-md-12">
               <div class="card">
                   <div class="header">
                       <h4 class="title">Update</h4>
                   </div>
                   <div class="content">
                       <form action="/job_data_s/updating" method="POST">
                        @csrf
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label>Title</label>
                                       <input type="hidden" name="job_title_id"  value="{{Crypt::encrypt($job_data->id)}}" class="form-control border-input">
                                       <input type="text" class="form-control border-input" name="update_job_title" value="{{$job_data->job_title_name}}">
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label>Description</label>
                                       <textarea rows="5" class="form-control border-input" name="update_job_description">{{$job_data->description}}</textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="text-center">
                               <button type="submit" class="btn btn-info btn-fill btn-wd">Update Job</button>
                           </div>
                           <div class="clearfix"></div>
                       </form>
                   </div>
               </div>
           </div>


       </div>
   </div>
</div>
@endsection