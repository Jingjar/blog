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
     public function photo()
    {
        return view('photo');
    }
    public function demo()
    {

        // $name = "Jingjar";
        // $age = 20;

        // $data = [];
        // $data['name'] = 'pp';
        // $data['age'] = 20;
        return view('demo')->with([
            'name' => 'pp',
            'age' => 20,
        ]);
    }
}
