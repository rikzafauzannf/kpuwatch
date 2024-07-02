<?php

namespace App\Controllers;

use App\Models\UserModel;

class MasterController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {        
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        $data = [
            'users' => $this->model->findAll(),
            "title" => "Master PPS",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")],
                ["label" => "Daftar Pengguna", "url" => base_url("/usermanagement")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("master/datapps", $data);
        echo view("layout/footer", $data);
        return '';
    }

    public function datapps()
    {        
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        $data = [
            'users' => $this->model->findAll(),
            "title" => "Master PPS",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")],
                ["label" => "Daftar Pengguna", "url" => base_url("/usermanagement")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("master/datapps", $data);
        echo view("layout/footer", $data);
        return '';
    }

    public function datappk()
    {        
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        $data = [
            'users' => $this->model->findAll(),
            "title" => "Master PPK",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")],
                ["label" => "Daftar Pengguna", "url" => base_url("/usermanagement")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("master/datappk", $data);
        echo view("layout/footer", $data);
        return '';
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }
}
