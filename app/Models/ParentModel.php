<?php

namespace App\Models;

use CodeIgniter\Model;
 
class ParentModel extends Model
{
    protected $table = 'parent';

    protected $primeryKey = 'id';
 
    protected $allowedFields = ['rollno', 'father', 'mother', 'phone', 'address'];
}