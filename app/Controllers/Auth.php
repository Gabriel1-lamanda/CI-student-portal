<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\ProfileImageModel;
use App\Models\StudentModel;

class Auth extends BaseController
{
    // use ResponseTrait;

    public function __construct()
    {
        helper(['url', 'form']);

        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        //
    }
    public function signin()
    {
        $studentmodel = new StudentModel();
        $login_data = $this->request->getPost(); // get the login data and saving it in a variable
        $result = $this->findStudent($login_data['matric']);
        $checked_password = Hash::check($login_data['password'], $result['password']);

        // Get the matching row from the data base.
        //confirm accuracy in the password
        if ($result) {
            if ($checked_password) {
                $imageresult = $this->getStudentImage($result['id']);
                $newdata = [
                    'firstname'  => $result['firstname'],
                    'matric'     => $result['matric'],
                    'lastname'  => $result['lastname'],
                    'college'   => $result['college'],
                    'id' => $result['id'],
                    'department' => $result['department'],
                    'image' => $imageresult
                ];

                // echo '<pre>';
                // print_r($newdata);
                // die;
                $this->session->set($newdata);
                // return view('dashboard_view');
                return redirect()->to('panel');
                // return view('dashboard_view'); // redirect to the dashboard
            } else {
                log_message('error', 'user with the cookie id tried to log in on this date');
            }
        }
        echo '<pre>';
        print_r('didnt work');
        die;
    }
    public function register()
    {
        return view('auth/register_view');
    }
    private function findStudent($matric_number)
    {
        $studentmodel = model(StudentModel::class);
        $result = $studentmodel->where('matric', $matric_number)->first();
        if ($result) {
            return $result;
        }
        return null;
    }
    private function getStudentImage($id)
    {
        $imagemodel = model(ProfileImageModel::class);
        $result = $imagemodel->where('id', $id)->first();
        if ($result) {
            return $result['path'];
        } else {
            return 'uploads/girl_smile.jpg';
        }
    }
}
