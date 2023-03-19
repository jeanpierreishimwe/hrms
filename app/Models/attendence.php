<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\employee;
use App\Models\department;
use Illuminate\Database\Eloquent\Model;

class attendence extends Model
{
    use HasFactory;

    protected $fillable=[
         'employee_id',
         'attendance_date',
         'attendance_status',
         'stipends',
    ];
    public function EmployeesData(){
return $this->belongsTo(employee::class,'employee','id');
    }

    public function DepartmentsData(){
        return $this->belongsTo(department::class,'department','id');
    }

    public function attendenceData(){
        return $this->belongsTo(attendence::class,'attendence','employee_id');
    }
}
