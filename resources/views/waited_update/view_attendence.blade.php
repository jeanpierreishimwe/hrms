@extends('layouts.master')
@section('breadcumb','Table List')
@section('contents')
<div class="content">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="header">
                       <h4 class="title">Striped Table</h4>
                       <p class="category">Here is a subtitle for this table</p>
                   </div>
                   <div class="content table-responsive table-full-width">
                       <table class="table table-striped">
                           <thead>
                               <th>ID</th>
                              <th>FirstName</th>
                              <th>LastName</th>
                              <th>Department</th>
                              <th>Stnipest</th>
                              <th>Absent</th>
                              <th>Action</th>
                           </thead>
                           <tbody>
                            <?php $key=0;?>
                          
                            @foreach ($employeed as $key =>  $employee_listed )
                            <tr>
                               <td>{{$key+1}}</td>
                               <td>{{$employee_listed->firstname}}</td>
                               <td>{{$employee_listed->lastname}}</td>
                               <td>Laravel</td>
                               <td>
                                   @foreach ($StatusAttandance as  $list_money)
                                   @if($employee_listed->id==$list_money->employee_id)
                                   @if ($list_money->attendance_status=='present')
                                   @if ($EmployeesData=$employee_listed->id>0) 
                                   <input type="text" class="form-control" value="{{ $emp=$EmployeesData=$employee_listed->id > 0 }}">
                                 {{ $list_money->stipends}}
                                   @endif
                                   @endif
                                   @endif
                                   @endforeach     
                                </td>
                                
                                <td>
                                    <td>
                                        @foreach ($StatusAttandance as  $list_money)
                                        @if($employee_listed->id==$list_money->employee_id)
                                        @if ($list_money->attendance_status=='absent')
                                        @if ($EmployeesData=$employee_listed->id>0) 
                                        <input type="text" class="form-control" value="{{ $emp=$EmployeesData=$employee_listed->id > 0 }}">
                                      {{ $list_money->stipends=0}}
                                        @endif
                                        @endif
                                        @endif
                                        @endforeach     
                                     </td>
                                </td>
                                {{-- <td style="border-radius:14px;"> <a class="btn btn-danger btn-fill btn-wd" style="background:red;"href="#!" onclick="document.getElementById('delete-{{$list_money->id}}').submit()" class="text-danger">delete</a> </td>

                                <form  onsubmit="('are you sure')"
                                action="/trash_Attandance/delete/{{ Crypt::encrypt($list_money->id)}}"
                                method="POST"
                                id="delete-{{$list_money->id}}"
                                >
                                @csrf
                                @method('DELETE')
                                </form> --}}
                            
                            </tr>
                                
                            @endforeach
                                
                          
                                 
                          
                           </tbody>
                       </table>

                   </div>
               </div>
           </div>


        


       </div>
   </div>
</div>
@endsection