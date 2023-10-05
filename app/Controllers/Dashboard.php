<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
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
