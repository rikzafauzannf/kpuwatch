<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "User Management",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")],
                ["label" => "Daftar Pengguna", "url" => base_url("/usermanagement")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("user/usermanagement", $data);
        echo view("layout/footer", $data);
        return '';
    }
}
