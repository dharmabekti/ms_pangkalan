<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;
use CodeIgniter\HTTP\ResponseInterface;

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
}
