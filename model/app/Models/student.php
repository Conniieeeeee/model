<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\model\subjectgrade;

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
    protected $appends = ['fullname'];

    public function getfullnameattribute()
    {
        return $this->fname . ' ' . $this->lname;
    }    
}
