<?php

namespace App\Models;

use CodeIgniter\Model;

class pagesModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;

    public function getPages($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}