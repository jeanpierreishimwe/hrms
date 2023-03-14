@extends('layouts.master')
@section ('breadcumb','Update ')
@section('contents')
<div class="content">
   <div class="container-fluid">
       <div class="row">
          
           <div class="col-lg-12 col-md-12">
               <div class="card">
                   <div class="header">
                       <h4 class="title">Employee Info</h4>
                   </div>
                   <div class="content">
                       <form action="/updating/edit_employee/save/update" method="POST">
                          @csrf

                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label>Employee First Name</label>
                                       <input type="hidden" class="form-control border-input" name="employee_id" value="{{Crypt::encrypt($employeeToEdit->id)}}">
                                       <input type="text" class="form-control border-input" name="update_employee_firstname" value="{{$employeeToEdit->firstname}}">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label>Employee Last Name</label>
                                       <input type="text" class="form-control border-input" name="update_empoyee_lastname"  value="{{$employeeToEdit->lastname}}">
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label>Date Of Birth</label>
                                       <input type="date" class="form-control border-input" name="update_employee_dob" value="{{$employeeToEdit->date_of_birth}}">
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Job Title</label>
                                       <select  class="form-control border-input" name="update_employee_job_title_name" value="{{Crypt::encrypt($employeeToEdit->job_title_id)}}">
                                          <option value="">select job title </option>
                                          @if (!is_null($Editjobs))
                                          @foreach ($Editjobs as $updateJobs )
                                              @if ($updateJobs->id==$employeeToEdit->job_title_id)
                                              <option selected="selected" value="{{$updateJobs->id}}">{{$updateJobs->job_title_name}}</option>           
                                              @else
                                              <option value="{{$updateJobs->id}}">{{$updateJobs->job_title_name}}</option>           
                                              @endif
                                          @endforeach
                                          @endif
                                       </select>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Department </label>
                                       <select  class="form-control border-input" name="update_employee_department_name" value="{{Crypt::encrypt($employeeToEdit->department_id)}}">
                                          @if (!is_null($Editdepart))
                                              @foreach ($Editdepart as $updatedepartment )
                                                  @if ($updatedepartment->id==$employeeToEdit->department_id)
                                                   <option selected="selected" value="{{$updatedepartment->id}}">{{$updatedepartment->department_name}}</option>
                                                   @else
                                                   <option value="{{$updatedepartment->id}}">{{$updatedepartment->department_name}}</option>
                                                   @endif
                                              @endforeach
                                          @endif
                                       </select>
                                   </div>
                               </div>
                               
                           </div>
                           <div class="text-center">
                               <button type="submit" class="btn btn-info btn-fill btn-wd">Update Employee</button>
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