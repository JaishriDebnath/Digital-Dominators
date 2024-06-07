<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class wfhleave extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [  
                       'id',
                       'wemp_id',
                       'status',
                        'wname',
                        'wspan',
                        'wtype',
                        'wlt',
                        'wtl',
                        'wfrom',
                        'wto',
                        'wremain',
                        'wreason',
    ];
}
