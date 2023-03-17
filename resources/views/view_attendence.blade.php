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
                              <th>Attendance Status</th>
                           </thead>
                           <tbody><?php $key=0
                          
                           ?>
                              @foreach ($StatusAttandance as $key=>$employee_attendence)
                                  
                              <tr>
                                 <td>{{$key+1}}</td>
                                 <td>Dakota </td>
                                 <td>Rice</td>
                                 <td>Laravel</td>
                                 <td>{{number_format($stnipest=5000)}}</td>
                                 <td>Present</td>
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