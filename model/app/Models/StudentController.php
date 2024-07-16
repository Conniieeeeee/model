<?php

use app\models\student;
use Illuminate\Http\request;

class StudentController extends controller
{
    /**
     * display a listing of the resources.
     * /
    public function index()
{
    //return student::all();

    //return student::where('province', 'kansas')->get();

    //return student::where('province', 'hawaii')
    //      ->where ('fname', 'sigmund')
    //      ->get();

    //return student::where('province', 'hawaii')
    // ->orwhere ('province', 'kansas')
    // ->orwhere ('fname', 'sigmund')
    // -get();

    //return student::where('province', 'like', '%T%')->get();

     //return student::orderby('fname', 'desc')->get();

     //return student::limit(4)->get();

     //return student::whereIn('id', [1,3,5,9,11,13])->get();

     //return student::where('province', 'virginia')->first()
     return student
