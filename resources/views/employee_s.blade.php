@extends('layouts.master')
@section ('breadcumb','Employees')
@section('contents')
<div class="content">
    <style>
        .content{zoom:92%;}
    </style>
   <div class="container-fluid">
       <div class="row">
         
           <div class="col-lg-8 col-md-7">
               <div class="card">
                   <div class="header">
                       <h4 class="title">Employee-List</h4>
                   </div>
                   <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title"></h4>
                                        <p class="category"></p>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <thead>
                                                <th>ID</th>
                                               <th>FirstName</th>
                                               <th>LastName</th>
                                               <th>Date Of Birth</th>
                                               <th>Job Titles</th>
                                               <th>Departments</th>
                                               <th>Op.No1</th>
                                               <th>Op.No2</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $key=0;
                                                    ?>
                                                @foreach ($employee as $key => $display_employees_info)
                                                   @if (!is_null($display_employees_info->department_id))
                                                       
                                                   <tr>
                                                      <td>{{$key+1}}</td>
                                                      <td>{{$display_employees_info->firstname}}</td>
                                                      <td>{{$display_employees_info->lastname}}</td>
                                                      <td>{{$display_employees_info->date_of_birth}}</td>
                                                      <td>@if (!is_null($display_employees_info->job_title_id ))
                                                       {{$display_employees_info->JobsTitlesDatas->job_title_name}}               
                                                      @endif</td>
                                                      <td>@if (!is_null($display_employees_info->department_id))
                                                          {{$display_employees_info->DepartmentsDatas->department_name}}
                                                      @endif</td>
                                                      <td style="border-radius:14px;"> <a class="btn btn-info btn-fill btn-wd"href="/Editing_employee/data/save/Edit/{{Crypt::encrypt( $display_employees_info->id)}}">edit</a> </td>
                                                      <td style="border-radius:14px;"> <a class="btn btn-danger btn-fill btn-wd" style="background:red;"href="#!" onclick="document.getElementById('delete-{{ $display_employees_info->id}}').submit()" class="text-danger">delete</a> </td>
   
                                                      <form  onsubmit="('are you sure')"
                                                      action="/trash/remove_employee/delete/{{ Crypt::encrypt($display_employees_info->id)}}"
                                                      method="POST"
                                                      id="delete-{{ $display_employees_info->id}}"
                                                      >
                                                   @csrf
                                                   @method('DELETE')
                                                   </form>
                                                   
                                                   </tr>       
                                                   @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                 
                                    </div>
                                </div>
                            </div>
                 
                 
                 
                 
                        </div>
                    </div>
                 </div>
                   
                 <!--table two-->
                 <div class="content mt-5" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Waiting List</h4>
                                        <p class="category"></p>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <thead>
                                                <th>ID</th>
                                               <th>FirstName</th>
                                               <th>LastName</th>
                                               <th>Date Of Birth</th>
                                               <th>Job Titles</th>
                                               <th>Departments</th>
                                               <th>Op.No1</th>
                                               <th>Op.No2</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $key=0;
                                                    ?>
                                                @foreach ($employee as $key => $display_employees_info)
                                                   @if (is_null($display_employees_info->department_id))
                                                       
                                                   <tr>
                                                      <td>{{$key+1}}</td>
                                                      <td>{{$display_employees_info->firstname}}</td>
                                                      <td>{{$display_employees_info->lastname}}</td>
                                                      <td>{{$display_employees_info->date_of_birth}}</td>
                                                      <td>@if (!is_null($display_employees_info->job_title_id ))
                                                       {{$display_employees_info->JobsTitlesDatas->job_title_name}}               
                                                      @endif</td>
                                                      <td>@if (!is_null($display_employees_info->department_id))
                                                          {{$display_employees_info->DepartmentsDatas->department_name}}
                                                      @endif</td>
                                                      <td style=""> <a class="btn btn-info btn-fill btn-wd" href="/Editing_employee/data/save/Edit/{{Crypt::encrypt( $display_employees_info->id)}}">edit</a> </td>
                                                      <td> <a href="#!"  class="btn btn-danger btn-fill btn-wd" style="background:red;"onclick="document.getElementById('delete-{{ $display_employees_info->id}}').submit()" class="text-danger"  style="bborder-radius:14px;">delete</a> </td>

   
                                                      <form  onsubmit="('are you sure')"
                                                      action="/trash/remove_employee/delete/{{ Crypt::encrypt($display_employees_info->id)}}"
                                                      method="POST"
                                                      id="delete-{{ $display_employees_info->id}}"
                                                      >
                                                   @csrf
                                                   @method('DELETE')
                                                   </form>
                                                   </tr>       
                                                   @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                 
                                    </div>
                                </div>
                            </div>
                 
                 
                 
                 
                        </div>
                    </div>
                 </div>
                 
               </div>
               
           </div>
           
           <div class="col-lg-4 col-md-5">
            <div class="card card-user">
               <h1 class="small text-center">  Register Employee</h1>
               <form action="add_employee/data/save/register" method="POST">
                @csrf
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>FirstName</label>
                                <input type="text" class="form-control border-input" name="regi_employee_fname">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>LasttName</label>
                                <input type="text" class="form-control border-input"  name="regi_employee_lname">
                                <input type="hidden" class="form-control border-input" name="attend_employee_id">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control border-input" name="regi_employee_dob">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Job Titles</label>

                                <select  class="form-control border-input" name="regis_employee_job_title">

                                    <option value="" >select job title</option>
                                    @if (!is_null($jobs))
                                    @foreach ($jobs as $job_listed)
                                        <option value="{{$job_listed->id}}">{{$job_listed->job_title_name}}</option>
                                    @endforeach
                                    @else 
                                    <option value="none">No Jobs Available</option>
                                    @endif                                 
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Departments</label>
                                        <select  class="form-control border-input" name="regi_employee_department_name">
                                            <option value="" >select department</option>
                                            @if (!is_null($depart))
                                            @foreach ($depart as $department_listed )
                                            <option value="{{$department_listed->id}}">{{$department_listed->department_name}}</option>
                                            @endforeach
                                            @else 
                                            <option value="none">No department Available</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                 
                 
                </div>
             
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Register Employee</button>
                </div>
            </form>
                </div>
            </div>
           
        </div>

       </div>
   </div>
</div>
@endsection