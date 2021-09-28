<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ContactModel extends Model
{
    protected $table = 'studentX';
 
    protected $allowedFields = ['id','roll_no', 'name', 'dob','fname','mname', 'phone', 'address'];
}