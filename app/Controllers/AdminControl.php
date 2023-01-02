<?php

namespace App\Controllers;

class AdminControl extends BaseController
{

    public function index()
    {
        //get session role
        $session = session();
        $role = $session->get('role');
        $name = $session->get('nama');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }

        //get today's date
        $date = date('Y-m-d');

        $data = [
            'date' => $date,
            'name' => $name,
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
        $name = $session->get('nama');
        $data = [
            'name' => $name,
        ];
        return view('admin/medical', $data);
    }

    public function LayananObat()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        $name = $session->get('nama');
        $data = [
            'name' => $name,
        ];
        return view('admin/obat', $data);
    }
    public function LayananDarurat()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        $name = $session->get('nama');
        $data = [
            'name' => $name,
        ];
        return view('admin/darurat', $data);
    }
    public function LayananVaksin()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        $name = $session->get('nama');
        $data = [
            'name' => $name,
        ];
        return view('admin/vaksin', $data);
    }
    public function DataPerusahaan()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        $name = $session->get('nama');
        $data = [
            'name' => $name,
        ];
        return view('admin/dataperusahaan', $data);
    }
}