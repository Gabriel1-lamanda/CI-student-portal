<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\ProfileImageUploader;
use App\Libraries\RandomString;
use App\Libraries\Hash;
use App\Models\ProfileImageModel;
use App\Models\StudentModel;

class Biodata extends BaseController
{
    public function index()
    {
        //
    }
    public function uploadPhoto()
    {
        helper('files');

        $studentModel = new StudentModel();
        $profileuploader = new ProfileImageUploader($this->request);
        $uploaded = $profileuploader->upload(session('id'));

        if (isset($uploaded) && is_array($uploaded)) {
            return redirect()->to('bio-data');
            die;
        }
        echo '<pre>';
        print_r($this->request->getFiles());
        die;
    }
    public function register()
    {
        $studentModel = model(StudentModel::class);
        $generatedString = RandomString::generateRandomString();
        $postdata = $this->request->getPost();
        $postdata['matric'] = '180' . $generatedString;
        $postdata['password'] = Hash::make($postdata['password']);
        $postdata['gender'] = 'male';


        $studentModel->insert($postdata);

        // Registering a student done

        echo '<pre>';
        print_r($postdata['email']);
        die;
    }
    public function studentdata()
    {
        $studentmodel = model(StudentModel::class);
        $this->viewBag['student'] = $studentmodel->where('id', $_SESSION['id'])->first();
        $this->viewBag['readonly'] = true;
        // echo '<pre>';
        // print_r($this->viewBag);
        // die;
        return view('auth/register_view', $this->viewBag);
    }
}
