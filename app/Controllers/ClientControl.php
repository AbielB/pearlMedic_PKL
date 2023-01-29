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
            return redirect()->to('/');
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
            return redirect()->to('/');
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
            return redirect()->to('/');
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
            return redirect()->to('/');
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

            //get all data from tb_keranjang where id = session id
            $id = $session->get('id');
            $db = \Config\Database::connect();
            $builder = $db->table('tb_keranjang');
            $builder->where('id', $id);
            $query3 = $builder->get();

            //get all data from tb_ordervaksin where id = session id
            $id = $session->get('id');
            $db = \Config\Database::connect();
            $builder = $db->table('tb_ordervaksin');
            $builder->where('id', $id);
            $query4 = $builder->get();

            $data = [
                'medical' => $query->getResult(),
                'darurat' => $query2->getResult(),
                'keranjang' => $query3->getResult(),
                'ordervaksin' => $query4->getResult(),
            ];
            //send data to view
            return view('client/history', $data);
        } else {
            return redirect()->to('/');
        }
    }

    public function medicalcheckup()
    {
        //check role
        $session = session();
        $role = $session->get('role');
        if ($role == 'client') {
            //if flashdata error exist then show flashdata
            if (session()->has('error')) {
                $error_jumlah = session()->getFlashdata('jumlah');
                $error_tanggal = session()->getFlashdata('tanggal');
                $error_lokasi = session()->getFlashdata('lokasi');
                $data = [
                    'error_jumlah' => $error_jumlah,
                    'error_tanggal' => $error_tanggal,
                    'error_lokasi' => $error_lokasi,
                ];
                return view('client/medical', $data);
            } else {
                return view('client/medical');
            }
        } else {
            return redirect()->to('/');
        }
    }

    public function checkoutMedical()
    {
        //check role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //validation
        if (!$this->validate([
            'jumlah' => [
                //required and cant be lower than 1
                'rules' => 'required|greater_than[0]',
                'errors' => [
                    'required' => '* Jumlah tidak boleh kosong',
                    'greater_than' => '* Jumlah tidak boleh kurang dari 1'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '* Lokasi tidak boleh kosong'
                ]
            ],
            'tanggal' => [
                //has to be in the future
                'rules' => 'required|future_date',
                'errors' => [
                    'required' => '* Tanggal tidak boleh kosong',
                    'future_date' => '* Tanggal tidak boleh kurang dari hari ini'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            $errors = array(
                'error' => 'true',
                'jumlah' => $validation->getError('jumlah'),
                'lokasi' => $validation->getError('lokasi'),
                'tanggal' => $validation->getError('tanggal'),
            );
            //send flash data to medicalcheckup
            $session->setFlashdata($errors);
            return redirect()->to('/client/medicalcheckup');
        }
        // if validation is true then send data to view
        $tanggal = $this->request->getVar('tanggal');
        //split tanggal to dd-mm-yyyy
        $tanggal2 = explode("-", $tanggal);
        $tanggal2 = $tanggal2[2] . "-" . $tanggal2[1] . "-" . $tanggal2[0];
        //get today date
        $today = date("Y-m-d");
        //split today to dd-mm-yyyy
        $today = explode("-", $today);
        $today = $today[2] . "-" . $today[1] . "-" . $today[0];
        $data = [
            'jumlah' => $this->request->getVar('jumlah'),
            'lokasi' => $this->request->getVar('lokasi'),
            'tanggal' => $tanggal,
            'tanggal2' => $tanggal2,
            'today' => $today,
        ];
        //send flashdata
        $session->setFlashdata($data);
        return view('client/checkoutMedical', $data);
    }

    public function suksesMedical()
    {
        //get role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //get flashdata
        $data = $session->getFlashdata();
        //get data->jumlah, data->lokasi, data->tanggal
        $jumlah = $data['jumlah'];
        $lokasi = $data['lokasi'];
        $tanggal = $data['tanggal'];
        //insert into tb_medical
        $db = \Config\Database::connect();
        $builder = $db->table('tb_medical');
        $builder->set('id', $session->get('id'));
        $builder->set('jumlah', $jumlah);
        $builder->set('lokasi', $lokasi);
        $builder->set('tanggal_pelaksanaan', $tanggal);
        $builder->set('status', 0);
        $builder->insert();
        //if insert success then view suksesMedical
        if ($builder) {
            return view('client/suksesMedical');
        } else {
            return view('client/medical');
        }
    }

    public function darurat()
    {
        //check role
        $session = session();
        $role = $session->get('role');
        if ($role == 'client') {
            //get flashdata
            $data = $session->getFlashdata();
            //if flashdata error exist then show flashdata
            if (session()->has('error')) {
                $error_deskripsi = session()->getFlashdata('deskripsi');
                $error_lokasi = session()->getFlashdata('lokasi');
                $error_rs_tujuan = session()->getFlashdata('rs_tujuan');
                $error_jumlah = session()->getFlashdata('jumlah');
                $data = [
                    'error_deskripsi' => $error_deskripsi,
                    'error_lokasi' => $error_lokasi,
                    'error_rs_tujuan' => $error_rs_tujuan,
                    'error_jumlah' => $error_jumlah,
                ];
                return view('client/darurat', $data);
            } else {
                return view('client/darurat');
            }
        } else {
            //redirect to /
            return redirect()->to('/');
        }
    }

    public function checkoutDarurat()
    {
        //check role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //get data from form
        $deskripsi = $this->request->getVar('deskripsi');
        $lokasi = $this->request->getVar('lokasi');
        $rs_tujuan = $this->request->getVar('rs_tujuan');
        $jumlah = $this->request->getVar('jumlah');
        $tambahan = $this->request->getVar('tambahan');
        $tanggal_pelaporan = date("Y-m-d");
        //validation
        if (!$this->validate([
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '* Deskripsi tidak boleh kosong'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '* Lokasi tidak boleh kosong'
                ]
            ],
            'jumlah' => [
                'rules' => 'required|greater_than[0]',
                'errors' => [
                    'required' => '* Jumlah tidak boleh kosong',
                    'greater_than' => '* Jumlah tidak boleh kurang dari 1'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            $errors = array(
                'error' => 'true',
                'deskripsi' => $validation->getError('deskripsi'),
                'lokasi' => $validation->getError('lokasi'),
                'jumlah' => $validation->getError('jumlah'),
            );
            //send flashdata to darurat
            $session->setFlashdata($errors);
            return redirect()->to('/client/darurat');
        }
        if ($rs_tujuan == null) {
            $rs_tujuan = 'Dipilih oleh pearl medic';
        }
        //if validation is true then send data to view
        $data = [
            'deskripsi' => $deskripsi,
            'lokasi' => $lokasi,
            'rs_tujuan' => $rs_tujuan,
            'jumlah' => $jumlah,
            'tambahan' => $tambahan,
            'tanggal_pelaporan' => $tanggal_pelaporan,
        ];
        //send flashdata
        $session->setFlashdata($data);
        return view('client/checkoutDarurat', $data);
    }

    public function suksesDarurat()
    {
        //check role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //check if flashdata exist
        if (session()->has('deskripsi')) {
            //get flashdata
            $data = $session->getFlashdata();
            //get data->deskripsi, data->lokasi, data->rs_tujuan, data->jumlah, data->tambahan, data->tanggal_pelaporan
            $deskripsi = $data['deskripsi'];
            $lokasi = $data['lokasi'];
            $rs_tujuan = $data['rs_tujuan'];
            $jumlah = $data['jumlah'];
            $tambahan = $data['tambahan'];
            $tanggal_pelaporan = $data['tanggal_pelaporan'];
            //insert into tb_darurat
            $db = \Config\Database::connect();
            $builder = $db->table('tb_darurat');
            $builder->set('id', $session->get('id'));
            $builder->set('deskripsi', $deskripsi);
            $builder->set('lokasi', $lokasi);
            $builder->set('rs_tujuan', $rs_tujuan);
            $builder->set('jumlah', $jumlah);
            $builder->set('tambahan', $tambahan);
            $builder->set('tanggal_pelaporan', $tanggal_pelaporan);
            $builder->set('status', 0);
            $builder->insert();
            //if insert success then view suksesDarurat
            if ($builder) {
                return view('client/suksesDarurat');
            } else {
                return view('client/darurat');
            }
        } else {
            return redirect()->to('/client/darurat');
        }
    }
    public function vaksin()
    {
        //check role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }

        //select all from tb_vaksin
        $db = \Config\Database::connect();
        $builder = $db->table('tb_vaksin');
        $builder->select('*');
        $builder->orderBy('id_vaksin', 'DESC');
        $query = $builder->get();
        //if flashdata exist then send flashdata to view
        if (session()->has('error')) {
            $error_lokasi = session()->getFlashdata('lokasi');
            $error_jumlah = session()->getFlashdata('jumlah');
            $error_tanggal_pelaksanaan = session()->getFlashdata('tanggal_pelaksanaan');
            $error_vaksin = session()->getFlashdata('vaksin');
            $data = [
                'error_lokasi' => $error_lokasi,
                'error_jumlah' => $error_jumlah,
                'error_tanggal_pelaksanaan' => $error_tanggal_pelaksanaan,
                'error_vaksin' => $error_vaksin,
                'vaksin' => $query->getResultArray(),
            ];
        } else {
            $data = [
                'vaksin' => $query->getResultArray(),
            ];
        }

        return view('client/vaksin', $data);
    }

    public function checkoutVaksin()
    {
        //check role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //get data from form
        $vaksin = $this->request->getVar('vaksin');
        $jumlah = $this->request->getVar('jumlah');
        $tanggal_pelaksanaan = $this->request->getVar('tanggal_pelaksanaan');
        $lokasi = $this->request->getVar('lokasi');
        if ($vaksin == 'vaksinlain') {
            $vaksin = $this->request->getVar('lainnya');
        }

        //validation
        if (!$this->validate([
            'vaksin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '* Vaksin tidak boleh kosong'
                ]
            ],
            'jumlah' => [
                'rules' => 'required|greater_than[0]',
                'errors' => [
                    'required' => '* Jumlah tidak boleh kosong',
                    'greater_than' => '* Jumlah tidak boleh kurang dari 1'
                ]
            ],
            'tanggal_pelaksanaan' => [
                'rules' => 'required|future_date',
                'errors' => [
                    'required' => '* Tanggal pelaksanaan tidak boleh kosong',
                    'future_date' => '* Tanggal pelaksanaan tidak boleh kurang dari hari ini'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '* Lokasi tidak boleh kosong'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            if ($vaksin == '') {
                $error_vaksin = '* Vaksin tidak boleh kosong';
            } else {
                $error_vaksin = $validation->getError('vaksin');
            }
            $errors = array(
                'error' => 'true',
                'vaksin' => $error_vaksin,
                'jumlah' => $validation->getError('jumlah'),
                'tanggal_pelaksanaan' => $validation->getError('tanggal_pelaksanaan'),
                'lokasi' => $validation->getError('lokasi'),
            );

            //send flashdata to vaksin
            $session->setFlashdata($errors);
            return redirect()->to('/client/vaksin');
        }
        //if validation is true then send data to view

        $data = [
            'vaksin' => $vaksin,
            'jumlah' => $jumlah,
            'tanggal_pelaksanaan' => $tanggal_pelaksanaan,
            'lokasi' => $lokasi,
        ];
        //send flashdata
        $session->setFlashdata($data);
        return view('client/checkoutVaksin', $data);
    }

    public function suksesVaksin()
    {
        //check role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //check if flashdata exist
        if (session()->has('vaksin')) {
            //get data from flashdata
            $vaksin = session()->getFlashdata('vaksin');
            $jumlah = session()->getFlashdata('jumlah');
            $tanggal_pelaksanaan = session()->getFlashdata('tanggal_pelaksanaan');
            $lokasi = session()->getFlashdata('lokasi');
            //insert data to tb_vaksin
            $db = \Config\Database::connect();
            $builder = $db->table('tb_ordervaksin');
            $builder->set('id', $session->get('id'));
            $builder->set('nama_vaksin', $vaksin);
            $builder->set('jumlah', $jumlah);
            $builder->set('tanggal_pelaksanaan', $tanggal_pelaksanaan);
            $builder->set('lokasi', $lokasi);
            $builder->set('status', 0);
            $builder->insert();
            //if insert success then view suksesVaksin
            if ($builder) {
                return view('client/suksesVaksin');
            } else {
                return redirect()->to('/client/vaksin');
            }
        } else {
            return redirect()->to('/client/vaksin');
        }
    }

    public function obat()
    {
        //get role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //check tb_keranjang, if not exist id_keranjang where id = session id and status = 1, insert into tb_keranjang id= session id and status = 1
        $db = \Config\Database::connect();
        $builder = $db->table('tb_keranjang');
        $builder->select('id_keranjang');
        $builder->where('id', $session->get('id'));
        $builder->where('status', 0);
        $query = $builder->get();
        $result = $query->getResultArray();
        if (empty($result)) {
            $builder->set('id', $session->get('id'));
            $builder->set('status', 0);
            $builder->insert();
        }
        //get id_keranjang where id = session id and status = 1
        $builder->select('id_keranjang');
        $builder->where('id', $session->get('id'));
        $builder->where('status', 0);
        $query = $builder->get();
        $result = $query->getResultArray();
        $id_keranjang = $result[0]['id_keranjang'];
        //set session keranjang
        $session->set('keranjang', $id_keranjang);

        //if isset search, $search = search, else $search = ''
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
        } else {
            $search = '';
        }
        //get data from tb_obat only 13 data
        $db = \Config\Database::connect();
        $builder = $db->table('tb_obat');
        $builder->select('id_obat, nama_obat');
        //if exist get search, query where name like search
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $builder->like('nama_obat', $search);
        }
        //get number of row
        $query = $builder->get();
        $result = $query->getResultArray();
        $num_rows = count($result);
        $num_rows = ceil($num_rows / 15);
        //if not isset sort, show 1st to 15th data
        if (!isset($_GET['sort'])) {
            $builder->limit(15);
        } else {
            //if isset sort, show 15th data from sort * 15
            $builder->limit(15, ($_GET['sort'] - 1) * 15);
        }

        $query = $builder->get();

        //get all data from tb_isi where id_keranjang = id_keranjang
        $builder = $db->table('tb_isi');
        $builder->select('nama_obat, jumlah');
        $builder->where('id_keranjang', $id_keranjang);
        $query2 = $builder->get();
        $result2 = $query2->getResultArray();

        //send data to view
        $data = [
            'obat' => $query->getResultArray(),
            'search' => $search,
            'num_rows' => $num_rows,
            'id_keranjang' => $id_keranjang,
            'isi' => $result2,
        ];
        return view('client/obat', $data);
    }

    public function suksesObat()
    {
        return view('client/suksesObat');
    }

    public function tambahObatLain()
    {
        //get nama_obat and jumlah from post
        $nama_obat = $this->request->getPost('nama_obat');
        $jumlah = $this->request->getPost('jumlah_lain');
        $id_keranjang = $this->request->getPost('id_keranjang');
        //check if nama_obat in tb_isi where id_keranjang = id_keranjang
        $db = \Config\Database::connect();
        $builder = $db->table('tb_isi');
        $builder->select('nama_obat');
        $builder->where('id_keranjang', $id_keranjang);
        $builder->where('nama_obat', $nama_obat);
        $query = $builder->get();
        $result = $query->getResultArray();
        //if exist, update jumlah = jumlah + new jumlah
        if (!empty($result)) {
            $builder->set('jumlah', 'jumlah + ' . $jumlah, false);
            $builder->where('nama_obat', $nama_obat);
            $builder->update();
        } else {
            //if not exist, insert into tb_isi id_keranjang, nama_obat, jumlah
            $builder->set('id_keranjang', $id_keranjang);
            $builder->set('nama_obat', $nama_obat);
            $builder->set('jumlah', $jumlah);
            $builder->insert();
        }
        //if insert success then redirect to client/obat
        return redirect()->to('/client/obat');
    }

    public function keranjang()
    {
        //get role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //select all data from tb_isi where id_keranjang = sesion keranjang
        $db = \Config\Database::connect();
        $builder = $db->table('tb_isi');
        $builder->select('nama_obat, jumlah');
        $builder->where('id_keranjang', $session->get('keranjang'));
        $query = $builder->get();
        $result = $query->getResultArray();
        $total = 0;
        //if exist $keranjang_exist = true, else $keranjang_exist = false
        if (!empty($result)) {
            $keranjang_exist = true;
            $text = 'Pastikan Obat yang dipilih sesuai dengan kebutuhan dan rekomendasi dokter kami';
            //foreach item, add all jumlah
            foreach ($result as $item) {
                $total += $item['jumlah'];
            }
        } else {
            $keranjang_exist = false;
            $text = 'Keranjang anda kosong, silahkan pilih obat terlebih dahulu';
        }
        //send data to view
        $data = [
            'isi' => $result,
            'keranjang_exist' => $keranjang_exist,
            'text' => $text,
            'total' => $total,
            'id_keranjang' => $session->get('keranjang'),
        ];
        return view('client/keranjang', $data);
    }

    public function detailKeranjang()
    {
        //get role
        $session = session();
        $role = $session->get('role');
        if ($role != 'client') {
            return redirect()->to('/');
        }
        //get id_keranjang method get
        $id_keranjang = $this->request->getGet('id_keranjang');
        //if id_keranjang not exist, redirect to client/history
        if (!isset($id_keranjang)) {
            return redirect()->to('/client/history');
        }
        //select from tb_keranjang where id_keranjang = id_keranjang and id = session id
        $db = \Config\Database::connect();
        $builder = $db->table('tb_keranjang');
        $builder->select('id_keranjang, tanggal_order, status, alamat');
        $builder->where('id_keranjang', $id_keranjang);
        $builder->where('id', $session->get('id'));
        $query = $builder->get();
        $result = $query->getResultArray();
        //if not exist, redirect to client/history
        if (empty($result)) {
            return redirect()->to('/client/history');
        }

        //get result alamat, status, tanggal_order
        $result = $result[0];
        $status = $result['status'];
        $tanggal_order = $result['tanggal_order'];
        $alamat = $result['alamat'];
        if ($status == 0) {
            $color = "red";
            $status = "Belum Dilayani";
        } else if ($status == 1) {
            $status = "Belum Dilayani";
            $color = "red";
        } else if ($status == 2) {
            $status = "Dalam Proses";
            $color = "yellow";
        } else if ($status == 3) {
            $status = "Sudah Dilayani";
            $color = "green";
        } else {
            $status = "Dibatalkan";
            $color = "red";
        }
        //select from tb_isi where id_keranjang = id_keranjang
        $builder = $db->table('tb_isi');
        $builder->select('nama_obat, jumlah');
        $builder->where('id_keranjang', $id_keranjang);
        $query2 = $builder->get();
        $result2 = $query2->getResultArray();

        //add all jumlah
        $total = 0;
        foreach ($result2 as $item) {
            $total += $item['jumlah'];
        }
        //send data to view
        $data = [
            'tb_keranjang' => $result,
            'isi' => $result2,
            'total' => $total,
            'status' => $status,
            'tanggal_order' => $tanggal_order,
            'alamat' => $alamat,
            'color' => $color,
        ];
        return view('client/detailKeranjang', $data);
    }
}