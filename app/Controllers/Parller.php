<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;

use App\Models\ParentModel;
 
class Parller extends Controller
{
    public function index()
    {    
        echo view('templates/header');
        echo view('parent');
        echo view('templates/footer');
         
    }

    public function parentdata()
    {  
 
    helper(['form', 'url']);
        
        echo view('templates/header'); 
        $val = $this->validate([
            'rollno' => 'required',
            'father' => 'required|min_length[3]',
            'mother' => 'required|min_length[3]',
            'phone' => 'required',
            'address' => 'required'
        ]);

 
        $model = new ParentModel();
 
        if (!$val)
        {
            
            echo view('parent', [
                   'validation' => $this->validator
            ]);
 
        }
        else
        { 
       
            $model->save([
                'rollno' => $this->request->getVar('rollno'),
                'father' => $this->request->getVar('father'),
                'mother' => $this->request->getVar('mother'),
                'phone' => $this->request->getVar('phone'),
                'address' => $this->request->getVar('address'),                
            ]);
            

            echo view('parent');
            echo view('templates/footer');
        }
    }
    
}