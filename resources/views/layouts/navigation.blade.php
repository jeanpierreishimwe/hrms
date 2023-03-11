<div class="sidebar" data-background-color="white" data-active-color="danger">

   <!--
     Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
     Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
  -->

      <div class="sidebar-wrapper">
           <div class="logo">
               <a href="http://www.creative-tim.com" class="simple-text">
                H-R-M-S
               </a>
           </div>

           <ul class="nav">
            {{--third way
             @if(Request::is('/'))
            <li class="active">
                @else
                <li>
                    @endif
            //second way //<li @class(['active' => Request::is('/')])>
                <a href="/">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>    
                
                --}}
            @if(Request::is('/'))
            <li class="active">
                @else
                <li>
                    @endif
               {{--//second way //<li @class(['active' => Request::is('/')])>--}}
                   <a href="/">
                       <i class="ti-panel"></i>
                       <p>Dashboard</p>
                   </a>
               </li>
               <li class="{{Request::is('user')?'active':''}}">
                   <a href="/user">
                       <i class="ti-user"></i>
                       <p>User Profile</p>
                   </a>
               </li>
               <li class="{{Request::is('job_titles')?'active':''}}">
                <a href="/job_titles">
                    <i class="ti-list"></i>
                    <p>JOB-LISTS</p>
                </a>
            </li>
            
            <li class="{{Request::is('depart')?'active':''}}">
                <a href="/depart">
                    <i class="fa fa-building"></i>
                    <p>Departments</p>
                </a>
            </li>
       <!-- </li>
        <li class="{{--Request::is('typography')?'active':''--}}">
         <a href="/typography">
             <i class="ti-user"></i>
             <p>Typography</p>
         </a>
     </li>
    </li>
    <li class="{{--Request::is('icons')?'active':''--}}">
     <a href="/icons">
         <i class="ti-user"></i>
         <p>Icons</p>
     </a>
 </li>
</li>
<li class="{{--Request::is('maps')?'active':''--}}">
 <a href="/maps">
     <i class="ti-user"></i>
     <p>Maps</p>
 </a>
</li>
<li class="{{--Request::is('notifications')?'active':''--}}">
    <a href="/notifications">
        <i class="ti-user"></i>
        <p>Notifications</p>
    </a>
   </li>-->
   
           </ul>
      </div>
   </div>