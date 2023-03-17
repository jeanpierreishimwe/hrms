@extends('layouts.master')
@section('breadcumb','Attandance')
@section('contents')
<div class="content">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <a type="submit"  class=" btn"href="view_Attandance/watch"  style="margin-left: 550px;"> view atendence</a>
                   <div class="header">
                       <h4 class="title">Take-Attandance <br> 2023 -03</h4>
                       <p class="category"></p>
                   </div>
                   <div class="content table-responsive table-full-width">
                       <table class="table table-striped text-capitalize">
                           <thead>
                               <th>ID</th>
                              <th>FirstName</th>
                              <th>LastName</th>
                              <th>Department</th>
                              <th>Attandance</th>
                              <th>date</th>
                           </thead>
                           <tbody>
                              <?php$key=0 ?>
                              @foreach ( $employees as $key => $employee_data )
                              <tr>
                                 <td>{{$key+1}}</td>
                                 <td>{{$employee_data->firstname}}</td>
                                 <td>{{$employee_data->lastname}}</td>
                                 <td>
                                 @foreach ( $departmentList as $departdata ) 
                                 @if ($departdata->id==$employee_data->department_id)
                                {{$departdata->department_name}}
                                @endif
                                 @endforeach
                              </td>
                              <form action="/Take_Attandance/Save" method="POST">
                                  @csrf
                                 <td>

                                    <select name="attend_status" class="form-control">
                                        <option value="none">choose Status</option>
                                        <option value="present">present</option>
                                        <option value="late">late</option>
                                        <option value="absent">absent</option>
                                    </select>
                                    <!--  <a href="" style="color:black;"><input type="button"  class="btn"  name="attend_present" value="present"></a>
                                      <a href="" style="color:black;"><input type="button"  class="text-dark btn" name="attend_late" value="absent"></a>-->
                                      <input type="hidden" class="form-control" name="attend_employee_id"  value="{{$employee_data->id}}">
                                </td>
                                   <td><input type="date" class="form-control"  name="attend_date_time"></td>
                                 <td><input type="submit" class="btn"></td>
                              </form>
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