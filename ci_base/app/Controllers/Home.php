<?php

namespace App\Controllers;

use Config\GroceryCrud;

class Home extends BaseController
{
    public $data = [];
    public $db;

    public function __construct(){
        $this->db      = \Config\Database::connect();
        $this->data = [
            'header' => '',
            'elerhetosegek' => $this->db->table('elerhetosegek')->get()->getResultArray(),

        ];

    }

    public function index()
    {
        $this->data['galery'] = $this->db->table('fooldal_galeria')->orderBy('number', 'asc')->get()->getResultArray();
        $this->data['slides'] = $this->db->table('slider')->orderBy('number', 'asc')->get()->getResultArray();
        $this->data['content'] = $this->db->table('fooldal')->get()->getResultArray();

        $this->data['active'] = 'fooldal';
        return view('Frontend/Pages/Home', $this->data);
    }
}
