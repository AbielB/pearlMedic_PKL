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
                $data = [
                    'nama_perusahaan' => $row->nama_perusahaan,
                    'alamat' => $row->alamat,
                    'email' => $row->email,
                    'bidang' => $row->bidang,
                    'status' => $row->status,
                    'password' => $row->password,
                    'deskripsi' => $row->deskripsi,
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
}