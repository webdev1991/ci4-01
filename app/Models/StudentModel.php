<?php

namespace App\Models;

use CodeIgniter\Model;
 
class StudentModel extends Model
{
    protected $table = 'student12';

    protected $primeryKey = 'id';
 
    protected $allowedFields = ['roll_no', 'name', 'phone', 'address', 'course_id'];
}