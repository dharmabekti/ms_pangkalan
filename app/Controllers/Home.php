<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    private $home;
    public function __construct()
    {
        // $this->home = new HomeModel();
        // $this->webID = [
        //     'title' => 'Beranda',
        // ];
    }

    public function index()
    {
        $data = [
            // 'webid' => $this->webID,
            // 'result' => $this->home->getHome()
        ];

        return view('beranda/index', $data);
    }
}
