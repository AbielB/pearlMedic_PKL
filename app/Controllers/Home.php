<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $db = \Config\Database::connect();
        // $builder = $db->query('select * from tb_admin');
        // dd($builder);
        return view('admin/login');
    }
    public function login()
    {
        //if username and password is correct then redirect to admin page
        //else redirect to login page
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $db = \Config\Database::connect();
        $builder = $db->table('tb_admin');
        $builder->where('username', $username);
        $builder->where('password', $password);
        $query = $builder->get();
        $row = $query->getRow();

        if (isset($row)) {
            $session = session();
            $session->set('username', $row->username);
            $session->set('password', $row->password);
            $session->set('nama', $row->nama);
            //set session role to admin
            $session->set('role', 'admin');
            //move to admin page
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/');
        }
    }
}