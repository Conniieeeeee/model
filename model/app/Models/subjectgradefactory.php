<?php

namespace database\factories;

use app\models\students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\database\eloquent\factories\factor<\app\models\<subjectgrade>
 * /
 class subjectgradefactory extend factory
{
    /**
     * define the model's default state.
     * 
     * @return array<string, mixed>
     * /
    public function definition(): array
{
    $student =student::inrandomorder()->first();
    return[

    ];
}    