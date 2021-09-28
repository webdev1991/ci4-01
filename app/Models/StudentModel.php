<?php

namespace App\Models;

use CodeIgniter\Model;
 
class StudentModel extends Model
{
    protected $table = 'studentX';

    protected $primeryKey = 'id';

    protected $allowedFields = ['roll_no', 'name', 'dob','fname','mname', 'phone', 'address'];
}