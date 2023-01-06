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
}