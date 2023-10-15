<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use CodeIgniter\HTTP\Request;
// use PSpell\Config\services::services();

class Dashboard extends BaseController
{

    public function dashboard()
    {
        return view('dashboard_view');
    }
    public function biodata()
    {
        return view('biodata/biodata_view');
    }
    public function uploadPhoto()
    {
        return view('biodata/uploadphoto_view');
    }
    public function panel()
    {
        return view('dashboard_view');
    }
}
