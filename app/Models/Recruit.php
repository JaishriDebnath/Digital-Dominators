<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    use HasFactory;
   protected $fillable =[  
                            'id',
                            'status',
                            'fname',
                            'lname',
                            'sdate',
                            'org',
                            'exp',
                            'email',
                            'phone',
                            'resume'
                        ];
}
