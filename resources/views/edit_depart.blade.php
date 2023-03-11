@extends('layouts.master')
@section ('breadcumb','update')
@section('contents')
<div class="content">
   <div class="container-fluid">
       <div class="row">
         
           <div class="col-lg-8 col-md-7">
               <div class="card">
                   <div class="header">
                       <h4 class="title">UPDATE-DEPARTMENT</h4>
                   </div>
                   <div class="content">
                       <form action="/departme-nts/edit/updates" method="POST">
                        @csrf
                           <div class="row">
                            <input type="hidden" name="department_id">
                               <div class="col-md-12">
                                   <div class="form-group">
                                     
                                       <label for="Title">Title</label>
                                       <input  type="hidden" value="{{Crypt::encrypt($edit_department->id)}}" name="department_id" class="form-control-input">
                                       <input type="text" class="form-control border-input" value="{{$edit_department->department_name}}" name="department_name">
                                   </div>
                               </div>
                               
                               <div class="col-md-4">
                                   
                               </div>
                           </div>


                          
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="Description">Description</label>
                                       <textarea id="Description" rows="5" class="form-control border-input" name="description">{{$edit_department->description}} </textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="text-center">
                               <button type="submit" class="btn btn-info btn-fill btn-wd">Update Department</button>
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