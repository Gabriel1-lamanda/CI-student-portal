<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use CodeIgniter\HTTP\Request;
// use PSpell\Config\services::services();

class Dashboard extends BaseController
{
    public function index()
    {
        $this->cachePage(5000000);
        return view('Dashboard_view');
    }
    public function biodata()
    {
        return view('biodata/biodata_view');
    }
    public function uploadPhoto()
    {
        return view('biodata/uploadphoto_view');
    }
}
