<?php

namespace App\Controllers;

class Pages extends BaseController
{
    protected $pagesModel;
    public function __construct()
    {
        $pagesModel = new \App\Models\pagesModel();
    }
    public function index()
    {

        $pages = $this->pagesModel->findAll();
        $data = [
            'title' => 'Home | Web Programming UNPAS',
            'tes' => ['satu', 'dua', 'tiga'],
            'pages' => $pages
        ];


        return view('Pages/home', $data);
    }
    public function about()
    {
        return view('Pages/about');
    }
}