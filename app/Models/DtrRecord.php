<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DtrRecord extends Model
{
    use HasFactory;


    protected $fillable = [
        'type',
        'firstname',
        'lastname',
        'email',
        'password',
    ];

    protected $table = 'dtr_records';
}
