<?php

namespace App\Controllers;

class Loans extends BaseController
{
    public function index(): string
    {
        return view('loans');
    }
}
