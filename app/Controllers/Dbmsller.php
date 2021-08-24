<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;

 
class Dbmsller extends Controller
{
    public function index()
    {    
        echo view('templates/header');
        echo view('dbms');
        
         
    }
}