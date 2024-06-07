<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class empleave extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
         'id',
        'emp_id',
        'status',
        'name',
        'span',
        'type',
        'tl',
        'lt',
        'from',
       'to',
        'remain',
        'reason'
    ];
}
