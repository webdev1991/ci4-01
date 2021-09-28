<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;

 
class Authller extends Controller
{

   
    public function index()
    {    
        echo view('templates/header');
        echo view('auth/login');
        
    }

    public function register()
    {
    	echo view('templates/header');
        echo view('auth/register');
    }

     public function save()
    {

        helper(['form', 'url']);

 	    echo view('templates/header');
        
      /*  
        $validation = $this->validate([

        	'name'=>'required',
        	'email'=>'required|valid_email|is_unique[user.email]',
        	'password'=>'required|min_length[5]|max_length[12]',
        	'cpassword'=>'required|min_length[5]|max_length[12]|matches[password]'
        ]);
        */


        // custom validation process

        $validation =$this->validate([

            'name' =>[

                'rules'=> 'required',
                'errors'=>[
                    'required'=>'Please enter your full name'
            ]
            ],

             'email' =>[

                'rules'=> 'required|valid_email|is_unique[user.email]',
                'errors'=>[
                    'required'=>'email is required',
                    'valid_email'=>'you must enter a valid email id',
                    'is_unique'=>'email already taken'
            ]
            ],

            'password' =>[

                'rules'=> 'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'password is required',
                    'min_length'=>'password must have atleast 5 character in length',
                    'max_length'=>'password must not have more than 12 character in length'
            ]
            ],

            'cpassword' =>[

                'rules'=> 'required|min_length[5]|max_length[12]|matches[password]',
                'errors'=>[
                    'required'=>'confirm password is required',
                    'min_length'=>'confirm password must have atleast 5 character in length',
                    'max_length'=>'confirm password must not have more than 12 character in length',
                    'matches'=>'confirm password must matches to password'
            ]
            ]
            
            ]);


        if(!$validation)
        {
        	return view('auth/register',['validation'=>$this->validator]);

        }else {
        	
        	//echo "Form validation successfully";

            $model = new UserModel();

            $model->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),

            ]);
            
            return redirect()->to(base_url('authller/register'))->with('status','Account created successfully');
           // echo "record save successfully"; 
           // echo view('auth/register');
        }
      
    }

    public function check()
    {
        helper(['form', 'url']);

        echo view('templates/header');

        $validation =$this->validate([

             'email' =>[

                'rules'=> 'required|valid_email|is_not_unique[user.email]',
                'errors'=>[
                    'required'=>'Email is required',
                    'valid_email'=>'Enter a valid email id',
                    'is_not_unique'=>'Email not register'
            ]
            ],

            'password' =>[

                'rules'=> 'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'password is required',
                    'min_length'=>'password must have atleast 5 character in length',
                    'max_length'=>'password must not have more than 12 character in length'
            ]
            ]

            ]);


        if(!$validation)
        {
            
            return view('auth/login',['validation'=>$this->validator]);

        }else {

            echo "success";
        }

    }






}