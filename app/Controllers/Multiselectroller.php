<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;

 
class Multiselectroller extends Controller
{
    public function index()
    {    
        echo view('templates/header');
        echo view('multiselect');
        
         
    }
}