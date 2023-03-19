@extends('layouts.master')

@section('breadcumb',' Employees Register')

@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List of Employees </h4>
                    </div>
                    <div class="content">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Date of Birth</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                @foreach ($employee as $key=> $list_attandence_employees )
                                @if (!is_null($list_attandence_employees->department_id))
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$list_attandence_employees->firstname}}</td>
                                    <td>{{$list_attandence_employees->laststname}}</td>
                                    <td>{{$list_attandence_employees->date_of_birth}}</td>
                                    <td>@if (!is_null($list_attandence_employees->job_title_id))
                                        {{$list_attandence_employees->JobsTitlesDatas->job_title_name}}
                                    @endif</td>
                                    <td>
                                        @if (!is_null($list_attandence_employees->department_id))
                                        {{$list_attandence_employees->DepartmentsDatas->department_name}}
                                        @endif
                                    </td>
                                    <td>
                                        <div style="display: inline-flex;">
                                            <a href="/attendence/present/{{$$list_attandence_employees->id}}" class="btn btn-sm btn-primary " style="margin-right: .3rem">Present</a>
                                            <a href="/attendence/absent/{{$$list_attandence_employees->id}}" class="btn btn-sm btn-danger">Absent</a>
                                        </div>
                                    </td>
                                    </tr>
                                @endif

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">ATTENDANCE RECORD </h4>
                    </div>
                    <div class="content">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>

                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Days</th>
                                <th>Amount</th>
                                <th>Paid</th>
                            </tr>
                            <tbody>
                                @foreach ($stipends_money as  $key=> $stipends_pay )
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$stipends_pay->firstname}}</td>
                                    <td>{{$stipends_pay->laststname}}</td>
                                    <td>@if (!is_null($stipends_pay->job_title_id))
                                        {{$stipends_pay->JobsTitlesDatas->job_title_name}}
                                    @endif</td>
                                    <td>
                                        @if (!is_null($stipends_pay->department_id))
                                        {{$stipends_pay->DepartmentsDatas->department_name}}
                                        @endif
                                    </td>

                                    <td>{{$stipends_pay->stipends}}</td>
                                    <td>{{$stipends_pay->stipends * 5000}} Rwf</td>
                                    <td><div style="display: inline-flex;">
                                        <a href="/stipends/attendence/pay/{{$stipends_pay->id}}" class="btn btn-sm btn-primary " style="margin-right: .3rem">Paid</a>
                                        </div></td>
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
