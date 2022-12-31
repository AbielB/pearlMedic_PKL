<?php

namespace App\Controllers;

class AdminControl extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
}