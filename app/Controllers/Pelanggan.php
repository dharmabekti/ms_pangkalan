<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;
use CodeIgniter\HTTP\ResponseInterface;

define('MAIN_REDIRECT', '/cust');
class Pelanggan extends BaseController
{
    private $cust;
    public function __construct()
    {
        $this->cust = new PelangganModel();
        $this->webID = [
            'title' => 'Pelanggan',
        ];
    }

    public function index()
    {
        $data = [
            'webid' => $this->webID,
            'result' => $this->cust->findAll()
        ];

        return view('pelanggan/index', $data);
    }

    public function form($flag)
    {
        $data = [
            'webid' => $this->webID,
            'flag' => $flag,
            'result' => $this->cust->findAll()
        ];

        if ($flag == 'tambah') {
            return view('pelanggan/form', $data);
        }
    }

    public function save($flag)
    {
        $data = $this->request->getVar();
        unset($data['csrf_test_name']);

        if ($this->cust->save($data)) {
            session()->setFlashdata('success', "Data berhasil menambahkan data!");
        } else {
            session()->setFlashdata('error', "Data gagal menambahkan data!");
        }

        return redirect()->to(MAIN_REDIRECT);
    }
}
