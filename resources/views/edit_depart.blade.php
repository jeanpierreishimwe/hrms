@extends('layouts.master')
@section ('breadcumb','user managment')
@section('contents')
<div class="content">
   <div class="container-fluid">
       <div class="row">
         
           <div class="col-lg-8 col-md-7">
               <div class="card">
                   <div class="header">
                       <h4 class="title">Edit Profile</h4>
                   </div>
                   <div class="content">
                       <form>
                           <div class="row">
                               <div class="col-md-5">
                                   <div class="form-group">
                                       <label>Company</label>
                                       <input type="text" class="form-control border-input" disabled placeholder="Company" value="Creative Code Inc.">
                                   </div>
                               </div>
                               <div class="col-md-3">
                                   <div class="form-group">
                                       <label>Username</label>
                                       <input type="text" class="form-control border-input" placeholder="Username" value="michael23">
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Email address</label>
                                       <input type="email" class="form-control border-input" placeholder="Email">
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label>First Name</label>
                                       <input type="text" class="form-control border-input" placeholder="First Name" value="Chet">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label>Address</label>
                                       <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label>City</label>
                                       <input type="text" class="form-control border-input" placeholder="City" value="Melbourne">
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Country</label>
                                       <input type="text" class="form-control border-input" placeholder="Country" value="Australia">
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Postal Code</label>
                                       <input type="number" class="form-control border-input" placeholder="ZIP Code">
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label>About Me</label>
                                       <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="text-center">
                               <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
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