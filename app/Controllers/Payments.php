<?php

namespace App\Controllers;

class Payments extends BaseController
{
    public function index()
    {
        return view('payments/payments');
    }
    public function tranzgate()
    {
        return view('payments/tranzgate');
    }
}
