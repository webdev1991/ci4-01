<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ContactModel;
 
class Contact extends Controller
{
    public function index()
    {    
        echo view('templates/header');
        echo view('contact');
        echo view('templates/footer');
         
    }
 
    public function create()
    {  
 
    helper(['form', 'url']);
        
        echo view('templates/header'); 
        $val = $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'message'  => 'required',
        ]);

 
        $model = new ContactModel();
 
        if (!$val)
        {
            
            echo view('contact', [
                   'validation' => $this->validator
            ]);
 
        }
        else
        { 
       
            $model->save([
                'name' => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),
                'message'  => $this->request->getVar('message'),
            ]);
            
            echo view('contact');
            echo view('templates/footer');
        }
    }


    public function show()
    {
        $model = new ContactModel();
        $data['table'] = $model->findAll();
        echo view('templates/header');
        return view('list',$data);

    }
}