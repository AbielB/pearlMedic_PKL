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

        //seelct all from tb_darurat join tb_perusahaan where id = id
        $builder = $db->table('tb_darurat');
        $builder->select('tb_darurat.id_darurat, tb_darurat.lokasi, tb_darurat.deskripsi, tb_darurat.tanggal_pelaporan, tb_darurat.status, tb_perusahaan.nama_perusahaan');
        $builder->join('tb_perusahaan', 'tb_darurat.id= tb_perusahaan.id');
        //sort by status
        $builder->orderBy('tb_darurat.status', 'ASC');
        $query = $builder->get();
        $rowDarurat = $query->getResult();

        $data = [
            'date' => $date,
            'name' => $name,
            'rowPerusahaan' => $rowPerusahaan,
            'rowDarurat' => $rowDarurat
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

        //select all from tb_medical join tb_perusahaan where id = id and nama_perusahaan like %search%
        $db = \Config\Database::connect();
        $builder = $db->table('tb_medical');
        $builder->select('tb_medical.id_checkup, tb_medical.lokasi, tb_medical.jumlah, tb_medical.status, tb_perusahaan.nama_perusahaan');
        $builder->join('tb_perusahaan', 'tb_medical.id= tb_perusahaan.id');

        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $builder->like('tb_perusahaan.nama_perusahaan', $search);
        }

        //sort by status
        $builder->orderBy('tb_medical.status', 'ASC');
        $query = $builder->get();
        $rowMedical = $query->getResult();

        $name = $session->get('nama');
        $data = [
            'name' => $name,
            'rowMedical' => $rowMedical
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
        //select all from tb_darurat join tb_perusahaan where id = id
        $db = \Config\Database::connect();
        $builder = $db->table('tb_darurat');
        $builder->select('tb_darurat.id_darurat, tb_darurat.lokasi, tb_darurat.deskripsi, tb_darurat.tanggal_pelaporan, tb_darurat.status, tb_perusahaan.nama_perusahaan');
        $builder->join('tb_perusahaan', 'tb_darurat.id= tb_perusahaan.id');

        //if search is set then get search
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $builder->like('tb_perusahaan.nama_perusahaan', $search);
        }

        //sort by status
        $builder->orderBy('tb_darurat.status', 'ASC');
        $query = $builder->get();
        $rowDarurat = $query->getResult();

        $name = $session->get('nama');
        $data = [
            'name' => $name,
            'rowDarurat' => $rowDarurat
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

        //get search
        $search = $this->request->getVar('search');
        //if search not empty then query select all from tb_perusahaan where nama_perusahaan like %search%
        if (!empty($search)) {
            $db = \Config\Database::connect();
            $builder = $db->table('tb_perusahaan');
            $builder->like('nama_perusahaan', $search);
            $query = $builder->get();
            $rowPerusahaan = $query->getResult();
        } else {
            //query select all from tb_perusahaan
            $db = \Config\Database::connect();
            $builder = $db->table('tb_perusahaan');
            $query = $builder->get();
            $rowPerusahaan = $query->getResult();
        }
        $name = $session->get('nama');
        $data = [
            'name' => $name,
            'rowPerusahaan' => $rowPerusahaan,
            'error_namaPerusahaan' => '',
            'error_alamat' => '',
            'error_bidang' => '',
            'error_email' => '',
            'error_deskripsi' => ''
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

    public function PostEdit()
    {
        $namaPerusahaan = $this->request->getVar('nama_perusahaan');
        $alamat = $this->request->getVar('alamat');
        $bidang = $this->request->getVar('bidang');
        $email = $this->request->getVar('email');
        $deskripsi = $this->request->getVar('deskripsi');
        $id = $this->request->getVar('id');

        //update data in tb_perusahaan where id = $id
        $db = \Config\Database::connect();
        $builder = $db->table('tb_perusahaan');
        $builder->where('id', $id);
        $data = [
            'nama_perusahaan' => $namaPerusahaan,
            'alamat' => $alamat,
            'bidang' => $bidang,
            'email' => $email,
            'deskripsi' => $deskripsi
        ];
        //redirect to data perusahaan page id = $id
        $builder->update($data);
        return redirect()->to('/admin/DetailsDataPerusahaan?id=' . $id);
    }

    public function BuatPerusahaan()
    {
        //get session name
        $session = session();
        $name = $session->get('nama');
        $error_namaPerusahaan = '';
        $error_alamat = '';
        $error_bidang = '';
        $error_email = '';
        $error_deskripsi = '';

        $namaPerusahaan = $this->request->getVar('nama_perusahaan');
        $alamat = $this->request->getVar('alamat');
        $bidang = $this->request->getVar('bidang');
        $email = $this->request->getVar('email');
        $deskripsi = $this->request->getVar('deskripsi');
        $valid = true;
        //validation
        if (empty($namaPerusahaan)) {
            $error_namaPerusahaan = "Nama perusahaan tidak boleh kosong";
            $valid = false;
        }
        //validation alamat empty
        if (empty($alamat)) {
            $error_alamat = "Alamat tidak boleh kosong";
            $valid = false;
        }
        //validation bidang empty
        if ($bidang == '') {
            $error_bidang = "Bidang tidak boleh kosong";
            $valid = false;
        }
        //validation email
        if (empty($email)) {
            $error_email = "Email tidak boleh kosong";
            $valid = false;
        }
        //validation email format
        if (!empty($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Email tidak valid";
                $valid = false;
            }
        }
        //if email already exist $error_email = "Email sudah terdaftar"
        $db = \Config\Database::connect();
        $builder = $db->table('tb_perusahaan');
        $builder->where('email', $email);
        $query = $builder->get();
        $rowEmail = $query->getResult();
        if (!empty($rowEmail)) {
            $error_email = "Email sudah terdaftar";
            $valid = false;
        }
        //validation deskripsi empty
        if (empty($deskripsi)) {
            $error_deskripsi = "Deskripsi tidak boleh kosong";
            $valid = false;
        }
        //select all from tb_perusahaan
        $builder = $db->table('tb_perusahaan');
        $query = $builder->get();
        $rowPerusahaan = $query->getResult();
        //if valid insert data to tb_perusahaan
        if ($valid) {
            //insert data
            $data = [
                'nama_perusahaan' => $namaPerusahaan,
                'alamat' => $alamat,
                'bidang' => $bidang,
                'email' => $email,
                'deskripsi' => $deskripsi
            ];
            $builder->insert($data);
            return redirect()->to('/admin/DataPerusahaan');
        } else {
            $data = [
                'name' => $name,
                'rowPerusahaan' => $rowPerusahaan,
                'error_namaPerusahaan' => $error_namaPerusahaan,
                'error_alamat' => $error_alamat,
                'error_bidang' => $error_bidang,
                'error_email' => $error_email,
                'error_deskripsi' => $error_deskripsi
            ];
            return view('admin/DataPerusahaan', $data);
        }
    }
}