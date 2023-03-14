<?php

namespace App\Models;
use App\Models\job_title;
use App\Models\department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'date_of_birth',
        'job_title_id',
        'department_id',
    ];

    public function DepartmentsDatas(){
        return $this->belongsTo(department::class,'department_id','id');
    }
    public function JobsTitlesDatas(){
        return $this->belongsTo(job_title::class,'job_title_id','id');
    }
}
