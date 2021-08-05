<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;

use App\Models\StudentModel;
 
class Stuller extends Controller
{
    public function index()
    {    
        echo view('templates/header');
        echo view('student');
        echo view('templates/footer');
         
    }

    public function studentsdata()
    {  
 
    helper(['form', 'url']);
        
        echo view('templates/header'); 
        $val = $this->validate([
            'rollno' => 'required',
            'name' => 'required|min_length[3]'
        ]);

 
        $model = new StudentModel();
 
        if (!$val)
        {
            
            echo view('student', [
                   'validation' => $this->validator
            ]);
 
        }
        else
        { 
       
            $model->save([
                'rollno' => $this->request->getVar('rollno'),
                'name' => $this->request->getVar('name')                
            ]);
            

            echo view('student');
            echo view('templates/footer');
        }
    }
    
}