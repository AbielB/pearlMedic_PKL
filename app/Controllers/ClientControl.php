<?php

namespace App\Controllers;

class ClientControl extends BaseController
{
    public function index()
    {
        //check if role = client
        $session = session();
        $role = $session->get('role');
        if ($role == 'client') {
            //move to client page
            return view('client/index');
        } else {
            //redirect to login page
            return view('/');
        }
    }
    public function myAccount()
    {
        //check role client
        $session = session();
        $role = $session->get('role');
        //if client get all data from tb_perusahaan where id = session id
        if ($role == 'client') {
            $id = $session->get('id');
            $db = \Config\Database::connect();
            $builder = $db->table('tb_perusahaan');
            $builder->where('id', $id);
            $query = $builder->get();
            $row = $query->getRow();
            //if data is not null then show data
            if (isset($row)) {
                $data = [
                    'nama_perusahaan' => $row->nama_perusahaan,
                    'alamat' => $row->alamat,
                    'email' => $row->email,
                    'bidang' => $row->bidang,
                    'status' => $row->status,
                    'password' => $row->password,
                    'deskripsi' => $row->deskripsi,
                    'no_telp' => $row->no_telp,
                ];
                return view('client/myAccount', $data);
            } else {
                //if data is null then show error
                $data = [
                    'error' => 'Data tidak ditemukan'
                ];
                return view('client/myAccount', $data);
            }
        } else {
            //if role is not client then redirect to login page
            return view('/');
        }
    }
    public function logout()
    {
        //destroy session
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function editProfile()
    {
        //check if role = client
        $session = session();
        $role = $session->get('role');
        if ($role == 'client') {
            //get data from tb_perusahaan where id = session id
            $id = $session->get('id');
            $db = \Config\Database::connect();
            $builder = $db->table('tb_perusahaan');
            $builder->where('id', $id);
            $query = $builder->get();
            $row = $query->getRow();
            //put data
            if (isset($row)) {
                //get flashdata if exist

                $data = [
                    'nama_perusahaan' => $row->nama_perusahaan,
                    'alamat' => $row->alamat,
                    'email' => $row->email,
                    'bidang' => $row->bidang,
                    'status' => $row->status,
                    'password' => $row->password,
                    'deskripsi' => $row->deskripsi,
                    'no_telp' => $row->no_telp,
                    'error_nama' => '',
                    'error_alamat' => '',
                    'error_email' => '',
                    'error_bidang' => '',
                    'error_password' => '',
                    'error_deskripsi' => '',
                    'error_notelp' => '',
                ];
                return view('client/editProfile', $data);
            } else {
                //if data is null then show error
                $data = [
                    'error' => 'Data tidak ditemukan'
                ];
                return view('client/editProfile', $data);
            }
        } else {
            return view('/');
        }
    }

    public function postEdit()
    {
        //check if role = client
        $session = session();
        $role = $session->get('role');
        if ($role == 'client') {
            //select all from tb_perusahaan where id = session id
            $id = $session->get('id');
            $db = \Config\Database::connect();
            $builder = $db->table('tb_perusahaan');
            $builder->where('id', $id);
            $query = $builder->get();
            $row = $query->getRow();
            //get all data from form
            $nama_perusahaan = $this->request->getVar('nama_perusahaan');
            $alamat = $this->request->getVar('alamat');
            $email = $this->request->getVar('email');
            $bidang = $this->request->getVar('bidang');
            $password = $this->request->getVar('password');
            $deskripsi = $this->request->getVar('deskripsi');
            $no_telp = $this->request->getVar('no_telp');

            //validation
            $valid = true;
            $error_nama = '';
            $error_alamat = '';
            $error_email = '';
            $error_bidang = '';
            $error_password = '';
            $error_deskripsi = '';
            $error_notelp = '';

            if ($nama_perusahaan == null) {
                $valid = false;
                $error_nama = 'Nama Perusahaan tidak boleh kosong';
            }
            //nama_perusahaan can only contain letters, number, comma, dot, and whitespace
            if (!preg_match("/^[a-zA-Z0-9,. ]*$/", $nama_perusahaan)) {
                $valid = false;
                $error_nama = 'Nama Perusahaan hanya boleh mengandung huruf, angka, titik, koma, dan spasi';
            }
            if ($alamat == null) {
                $valid = false;
                $error_alamat = 'Alamat tidak boleh kosong';
            }
            //email validation
            if ($email == null) {
                $valid = false;
                $error_email = 'Email tidak boleh kosong';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $valid = false;
                $error_email = 'Email tidak valid';
            }
            if ($bidang == null) {
                $valid = false;
                $error_bidang = 'Bidang tidak boleh kosong';
            }
            if ($password == null) {
                $valid = false;
                $error_password = 'Password tidak boleh kosong';
            }
            //password has to be at least 8 characters
            if (strlen($password) < 8) {
                $valid = false;
                $error_password = 'Password harus lebih dari 8 karakter';
            }
            if ($no_telp == null) {
                $valid = false;
                $error_notelp = 'Nomor Telepon tidak boleh kosong';
            }
            //no_telp can only contain numbers
            if (!preg_match("/^[0-9]*$/", $no_telp)) {
                $valid = false;
                $error_notelp = 'Nomor Telepon hanya boleh mengandung angka';
            }
            if ($deskripsi == null) {
                $valid = false;
                $error_deskripsi = 'Deskripsi tidak boleh kosong';
            }
            //if validation is false then show error
            if ($valid == false) {
                $data = [
                    'nama_perusahaan' => $row->nama_perusahaan,
                    'alamat' => $row->alamat,
                    'email' => $row->email,
                    'bidang' => $row->bidang,
                    'status' => $row->status,
                    'password' => $row->password,
                    'deskripsi' => $row->deskripsi,
                    'no_telp' => $row->no_telp,
                    'error_nama' => $error_nama,
                    'error_alamat' => $error_alamat,
                    'error_email' => $error_email,
                    'error_bidang' => $error_bidang,
                    'error_password' => $error_password,
                    'error_deskripsi' => $error_deskripsi,
                    'error_notelp' => $error_notelp,
                ];
                //send data to view
                return view('client/editProfile', $data);
            }

            //get id from session
            $id = $session->get('id');
            //update data
            $db = \Config\Database::connect();
            $builder = $db->table('tb_perusahaan');
            $builder->where('id', $id);
            $builder->set('nama_perusahaan', $nama_perusahaan);
            $builder->set('alamat', $alamat);
            $builder->set('email', $email);
            $builder->set('bidang', $bidang);
            $builder->set('password', $password);
            $builder->set('deskripsi', $deskripsi);
            $builder->set('no_telp', $no_telp);
            $builder->update();
            //change session nama_perusahaan to new nama_perusahaan
            $session->set('nama_perusahaan', $nama_perusahaan);
            //redirect to myAccount
            return redirect()->to('/client/myAccount');
        } else {
            return view('/');
        }
    }

    public function history()
    {
        // check if role = client
        $session = session();
        $role = $session->get('role');
        if ($role == 'client') {
            //get all data from tb_medical where id = session id
            $id = $session->get('id');
            $db = \Config\Database::connect();
            $builder = $db->table('tb_medical');
            $builder->where('id', $id);
            $query = $builder->get();

            //get all data from tb_darurat where id = session id
            $id = $session->get('id');
            $db = \Config\Database::connect();
            $builder = $db->table('tb_darurat');
            $builder->where('id', $id);
            $query2 = $builder->get();

            $data = [
                'medical' => $query->getResult(),
                'darurat' => $query2->getResult(),
            ];
            //send data to view
            return view('client/history', $data);
        } else {
            return view('/');
        }
    }
}