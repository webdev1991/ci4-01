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
            'roll_no' => 'required',
            'name' => 'required|min_length[3]',
            'phone' => 'required',
            'address' => 'required',
            'course_id' => 'required'
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
                'roll_no' => $this->request->getVar('roll_no'),
                'name' => $this->request->getVar('name'),
                'phone' => $this->request->getVar('phone'),
                'address' => $this->request->getVar('address'),
                'course_id' => $this->request->getVar('course_id'),                
            ]);
            

            echo view('student');
            echo "Record Save Successfully";
    
        }

    
    }
    
}