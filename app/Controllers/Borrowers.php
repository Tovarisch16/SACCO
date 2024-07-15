<?php

namespace App\Controllers;

class Borrowers extends BaseController
{
    public function index(): string
    {
        return view('topbar').
        view('navbar').
        view('header').
        view('borrowers');
    }
}
