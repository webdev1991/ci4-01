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
      
        $data = ['roll_no' =>$this->request->getVar('roll_no'),
                'name' =>$this->request->getVar('name'),
                'dob' =>$this->request->getVar('dob'),
                'fname' =>$this->request->getVar('fname'),
                'mname' =>$this->request->getVar('mname'),
                'phone' =>$this->request->getVar('phone'),
                'address' =>$this->request->getVar('address'),
                
                ];       

                $model = new StudentModel();
                $model->insert($data);

                echo view('templates/header');
                echo view('student');
                
                echo "Data store successfully";

    }

    public function show()
    {
        $model = new StudentModel();
        $data['table'] = $model->findAll();
        echo view('templates/header');
        return view('list',$data);
        
    }

    public function edit($id = null)
    {

        $model = new StudentModel();
        $data['table'] = $model->find($id);
        echo view('templates/header');
        return view('edit',$data);

    }

    public function update($id = null)
    {

        $data = ['roll_no' =>$this->request->getVar('roll_no'),
                'name' =>$this->request->getVar('name'),
                'dob' =>$this->request->getVar('dob'),
                'fname' =>$this->request->getVar('fname'),
                'mname' =>$this->request->getVar('mname'),
                'phone' =>$this->request->getVar('phone'),
                'address' =>$this->request->getVar('address'),
                
                ];       

                $model = new StudentModel();
                $model->update($id, $data);

                echo view('templates/header');
                return redirect()->to(base_url('stuller/show'))->with('status','Data update successfully');
                
                echo "Update successfully";

    }

    public function delete($id = null)
    {

        $model = new StudentModel();
        $model->where('id',$id)->delete();
        echo view('templates/header');
        return redirect()->to(base_url('stuller/show'))->with('status','Data delete successfully');

    }



    public function delete_confirm($id = null)
    {    
        $model = new StudentModel();
        $model->delete($id);
        $data = [
            'status' => 'Deleted Successfully',
            'status_text' => 'Your data has been deleted successfully',
            'status_icon' => 'success'

        ];
        return $this->response->setJSON($data);        
    }
    

    
}