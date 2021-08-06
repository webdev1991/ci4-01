<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;

 
class Sealler extends Controller
{
    public function index()
    {    
        echo view('templates/header');
        echo view('search');
        
         
    }
}