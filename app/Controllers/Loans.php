<?php

namespace App\Controllers;

class Loans extends BaseController
{
    public function index(): string
    {
        return view('topbar').
        view('navbar').
        view('header').
        view('loans');
    }
}
