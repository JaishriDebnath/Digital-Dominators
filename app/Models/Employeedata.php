<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeedata extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'emp_id',
        'fname',
        'lname',
        'email',
        'branch',
        'job',
        'period',
        'salary',
        'freq',
        'sdate',
        'phone',
        'address',
        'state',
        'city',
        'zip',
        'gender'

    ];

    public function empleaves()
    {
       return $empleaves = empleave::where('emp_id',$this->emp_id)->get();
    }
    public function wfhleaves()
    {
       return $wfhleaves = wfhleave::where('emp_id',$this->emp_id)->get();
    }
}

