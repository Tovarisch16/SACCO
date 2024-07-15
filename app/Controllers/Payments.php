<?php

namespace App\Controllers;

class Payments extends BaseController
{
    public function index(): string
    {
        return view('payments');
    }
}
