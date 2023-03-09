@extends('layouts.master')
@section ('breadcumb','Job-List')
@section('contents')
<div class="content">
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-4 col-md-5">  
               <div class="card card-user">
                  
                  <div class="content">
                     <form action="job_title/save" method="POST">
                      @csrf
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <label>Title</label>
                                     <input type="text" class="form-control border-input" name="title">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <label>Description</label>
                                     <textarea rows="5" class="form-control border-input" name="description" ></textarea>
                                 </div>
                             </div>
                         </div>
                         <div class="text-center">
                             <button type="submit" class="btn btn-info btn-fill btn-wd">Save Job</button>
                         </div>
                         <div class="clearfix"></div>
                     </form>
                 </div>
                  
               </div>
               
           </div>
           <div class="col-lg-8 col-md-7">
               <div class="card">
                   <div class="header">
                       <h4 class="title">JOBS-List</h4>
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
                                                 <th>No.</th>
                                                <th>JOBS-Name</th>
                                                <th>Description</th>
                                                <th>Option.1</th>
                                                <th>Option.2</th>
                                             </thead>
                                             <tbody>
                                                {{---@foreach ($department_list as $key =>$listing_departments ) 
                                                @endforeach--}}
                                                <tr>
                                                   <td>{{--$key+1--}}</td>
                                                   <td>{{--$listing_departments->department_name--}}</td>
                                                   <td>{{--$listing_departments->description--}}</td>
                                                   <td><a href="" class="text-blue">Edit</a></td>
                                                   <td><a href="" class="text-danger">Delete</a></td>
                                                </tr>
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


       </div>
   </div>
</div>
@endsection