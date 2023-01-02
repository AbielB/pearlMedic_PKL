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
        //query select all from tb_perusahaan
        $db = \Config\Database::connect();
        $builder = $db->table('tb_perusahaan');
        $query = $builder->get();
        $rowPerusahaan = $query->getResult();

        $data = [
            'date' => $date,
            'name' => $name,
            'rowPerusahaan' => $rowPerusahaan
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
            'name' => $name
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
        $db = \Config\Database::connect();
        $builder = $db->table('tb_perusahaan');
        $query = $builder->get();
        $rowPerusahaan = $query->getResult();

        $data = [
            'name' => $name,
            'rowPerusahaan' => $rowPerusahaan
        ];
        return view('admin/dataperusahaan', $data);
    }

    public function DetailsDataPerusahaan()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        //get id from url
        $id = $this->request->getVar('id');
        //if id empty then redirect to data perusahaan page
        if (empty($id)) {
            return redirect()->to('/admin/dataperusahaan');
        }
        //query select all from tb_perusahaan
        $db = \Config\Database::connect();
        $builder = $db->table('tb_perusahaan');
        $builder->where('id', $id);
        $query = $builder->get();
        $rowDetails = $query->getResult();
        //if rowDetails empty then redirect to data perusahaan page
        if (empty($rowDetails)) {
            return redirect()->to('/admin/dataperusahaan');
        }

        $name = $session->get('nama');
        $data = [
            'name' => $name,
            'rowDetails' => $rowDetails,
            'id' => $id
        ];
        return view('admin/details_data_perusahaan', $data);
    }

    public function EditDataPerusahaan()
    {
        $session = session();
        $role = $session->get('role');
        //if role is not admin then redirect to login page
        if ($role != 'admin') {
            return redirect()->to('/');
        }
        //get id from url
        $id = $this->request->getVar('id');
        //if id empty then redirect to data perusahaan page
        if (empty($id)) {
            return redirect()->to('/admin/DataPerusahaan');
        }
        //query select all from tb_perusahaan
        $db = \Config\Database::connect();
        $builder = $db->table('tb_perusahaan');
        $builder->where('id', $id);
        $query = $builder->get();
        $rowDetails = $query->getResult();
        //if rowDetails empty then redirect to data perusahaan page
        if (empty($rowDetails)) {
            return redirect()->to('/admin/DataPerusahaan');
        }

        $name = $session->get('nama');
        $data = [
            'name' => $name,
            'rowDetails' => $rowDetails,
            'id' => $id
        ];
        return view('admin/editperusahaan', $data);
    }
}