<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
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
                $newdata = [
                    'firstname'  => $result['firstname'],
                    'matric'     => $result['matric'],
                    'lastname'  => $result['lastname'],
                    'college'   => $result['college'],
                    'id' => $result['id'],
                ];

                $session_set = $this->session->set($newdata);
                $this->session->start();
                if ($session_set) {
                    return 'bruh';
                }
                // return view('dashboard_view');
                return redirect()->to('dashboard'); // redirect to the dashboard
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
}
