<?php

namespace App\Controllers;

class Members extends BaseController
{
    public function index(): string
    {
        return view('topbar').
        view('navbar').
        view('header').
        view('members');
    }
}
