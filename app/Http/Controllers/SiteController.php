<?php

namespace App\Http\Controllers;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class SiteController extends Controller
{
    //
    public function hello()
    {
        return 'Hello';
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}