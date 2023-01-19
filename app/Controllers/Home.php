<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //get error
        $error = session()->getFlashdata('error');
        //if error is not null then show error
        if ($error != null) {
            $data = [
                'error' => $error
            ];
        } else {
            $data = [
                'error' => ''
            ];
        }
        return view('client/login', $data);
    }
    public function indexAdmin()
    {
        return view('admin/login');
    }
    public function loginAdmin()
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

    public function loginClient()
    {
        //if username and password is correct then redirect to client page
        //else redirect to login page
        $email = $this->request->getVar('email');
        //email can be uppercase or lowercase
        $email = strtolower($email);
        $password = $this->request->getVar('password');
        $db = \Config\Database::connect();
        $builder = $db->table('tb_perusahaan');
        $builder->where('email', $email);
        $builder->where('password', $password);
        $query = $builder->get();
        $row = $query->getRow();

        if (isset($row)) {
            $session = session();
            $session->set('nama', $row->nama_perusahaan);
            $session->set('password', $row->password);
            $session->set('id', $row->id);
            //set session role to client
            $session->set('role', 'client');
            //move to client page
            return redirect()->to('/client');
        } else {
            $error = "Username atau Password Salah";
            return redirect()->to('/')->with('error', $error);
        }
    }
}