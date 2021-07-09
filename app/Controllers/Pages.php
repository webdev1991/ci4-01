<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/home');
        echo view('templates/footer');
    }

    public function about()
    {
        echo view('templates/header');
        echo view('pages/about');
        echo view('templates/footer');
    }
}