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


        // Get the matching row from the data base.
        $result = $studentmodel->where('matric', $login_data['matric'])
            ->first();
        //confirm accuracy in the password

        if ($result) {
            if (Hash::check($result['password'], $login_data['password'])) {
                $newdata = [
                    'firstname'  => $result['firstname'],
                    'matric'     => $result['matric'],
                    'lastname'  => $result['lastname'],
                    'college'   => $result['college'],
                    'id' => $result['id'],
                ];

                $this->session->set($newdata);
                return redirect()->to('dashboard'); // redirect to the dashboard
            }
        }
        return redirect()->back()->withInput();
    }
    public function register()
    {
        return view('auth/register_view');
    }
}
