<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $fillable =[
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'birthdate',

    ];        
    // protected $guarded = []

}
