<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\ProfileImageUploader;
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
}
