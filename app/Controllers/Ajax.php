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
}