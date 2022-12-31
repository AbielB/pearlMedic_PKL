<?php

namespace App\Controllers;

class AdminControl extends BaseController
{
    public function index()
    {
        //get session role
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }

        //get today's date
        $date = date('Y-m-d');

        $data = [
            'date' => $date
        ];
        return view('admin/index', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function LayananMedical()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        return view('admin/medical');
    }

    public function LayananObat()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        return view('admin/obat');
    }
    public function LayananDarurat()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        return view('admin/darurat');
    }
    public function LayananVaksin()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        return view('admin/vaksin');
    }
    public function DataPerusahaan()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        return view('admin/dataperusahaan');
    }
}