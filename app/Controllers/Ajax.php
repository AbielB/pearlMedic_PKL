<?php

namespace App\Controllers;

class Ajax extends BaseController
{
    public function Medical()
    {
        // get data from ajax
        $id = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        $db = \Config\Database::connect();
        // update tb_medical status where id = id_checkup
        $builder = $db->table('tb_medical');
        $builder->set('status', $status);
        $builder->where('id_checkup', $id);
        $builder->update();
    }

    public function Darurat()
    {
        // get data from ajax
        $id = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        $db = \Config\Database::connect();
        // update tb_darurat status where id = id_checkup
        $builder = $db->table('tb_darurat');
        $builder->set('status', $status);
        $builder->where('id_darurat', $id);
        $builder->update();
    }

    public function Akun()
    {
        // get ajax
        $id = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        //if status = 1 update tb_perusahaan.status = 2 where id = id_perusahaan
        if ($status == 1) {
            $db = \Config\Database::connect();
            $builder = $db->table('tb_perusahaan');
            $builder->set('status', 2);
            $builder->where('id', $id);
            $builder->update();
        } else {
            //if status = 2 update tb_perusahaan.status = 1 where id = id_perusahaan
            $db = \Config\Database::connect();
            $builder = $db->table('tb_perusahaan');
            $builder->set('status', 1);
            $builder->where('id', $id);
            $builder->update();
        }
    }

    public function tambahObat()
    {
        // get ajax data id dan jumlah
        $id = $this->request->getVar('id');
        $jumlah = $this->request->getVar('jumlah');
        $id_keranjang = $this->request->getVar('id_keranjang');
        $nama_obat = $this->request->getVar('nama_obat');
        //check if nama_obat in tb_isi where id_keranjang = id_keranjang
        $db = \Config\Database::connect();
        $builder = $db->table('tb_isi');
        $builder->where('nama_obat', $nama_obat);
        $builder->where('id_keranjang', $id_keranjang);
        $row = $builder->get()->getRowArray();
        //if id_obat in tb_isi where id_keranjang = id_keranjang, update jumlah + old jumlah where id_obat = id_obat
        if ($row) {
            $builder = $db->table('tb_isi');
            $builder->set('jumlah', 'jumlah+' . $jumlah, false);
            $builder->where('id_obat', $id);
            $builder->update();
        } else {
            //if id_obat not in tb_isi where id_keranjang = id_keranjang, insert id_obat, nama_obat, jumlah, id_keranjang to tb_isi
            $builder = $db->table('tb_isi');
            $builder->insert([
                'id_obat' => $id,
                'nama_obat' => $nama_obat,
                'jumlah' => $jumlah,
                'id_keranjang' => $id_keranjang
            ]);
        }
    }

    public function hapusObat()
    {
        //get post data nama_obat and id_keranjang
        $nama_obat = $this->request->getVar('nama_obat');
        $id_keranjang = $this->request->getVar('id_keranjang');
        //delete from tb_isi where nama_obat = nama_obat and id_keranjang = id_keranjang
        $db = \Config\Database::connect();
        $builder = $db->table('tb_isi');
        $builder->where('nama_obat', $nama_obat);
        $builder->where('id_keranjang', $id_keranjang);
        $builder->delete();
    }

    public function pesanObat()
    {
        //get post data id_keranjang and alamat
        $id_keranjang = $this->request->getVar('id_keranjang');
        $alamat = $this->request->getVar('alamat');
        //update tb_keranjang.status = 2 where id_keranjang = id_keranjang and alamat = alamat and set tanggal_order = today
        $db = \Config\Database::connect();
        $builder = $db->table('tb_keranjang');
        $builder->set('status', 1);
        $builder->set('tanggal_order', date('Y-m-d'));
        $builder->set('alamat', $alamat);
        $builder->where('id_keranjang', $id_keranjang);
        $builder->update();
        //set session keranjang = null
        $session =  session();
        $session->set('keranjang', null);
    }
}