<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\ProfileImageUploader;
use App\Libraries\RandomString;
use App\Libraries\Hash;
use App\Models\ProfileImageModel;
use App\Models\StudentModel;
use Dompdf\Dompdf;
use Dompdf\Options;

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
        // echo '<pre>';
        // print_r($postdata);
        // die;
        if ($postdata['type']) {
            $postdata['password'] = Hash::make($postdata['lastname']);
            $query = $studentModel->update(session('id'), $postdata);
            if ($query) {
                return redirect()->to('panel');
            }

            // return redirect()->to('panel');
            // this section updates student data
        }
        // this section inserts student data
        $postdata['matric'] = '180' . $generatedString;
        $postdata['password'] = Hash::make($postdata['password']);
        $postdata['gender'] = 'male';


        $query = $studentModel->insert($postdata);
        if ($query) {
            return redirect()->to('register');
        }

        // Registering a student done

        // echo '<pre>';
        // print_r($postdata['email']);
        // die;
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
    public function download($id)
    {
        $studentModel = model(StudentModel::class);
        $studentData = $studentModel->where('id', $id)->first();

        $dompdf = new Dompdf();

        // Load the HTML view to be converted to PDF
        $html = view('confirmodal_view', ['user' => $studentData]);


        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf->setOptions($options);

        // Load and render HTML content into a PDF file
        $dompdf->loadHtml($html);
        $dompdf->render();

        // Output the PDF to the browser for download
        $dompdf->stream('user_' . RandomString::RnadomToken() . '.pdf');







        // $data = "Firstname: " . $studentData['firstname'] . "\n" . "Lastname: " . $studentData['lastname'];
        // $name = 'mytext.txt';

        // return $this->response->download($name, $data);
    }
}
