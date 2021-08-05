<?php

namespace App\Models;

use CodeIgniter\Model;
 
class StudentModel extends Model
{
    protected $table = 'student';

    protected $primeryKey = 'id';
 
    protected $allowedFields = ['rollno', 'name', 'dob', 'class'];
}