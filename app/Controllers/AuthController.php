<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "Login",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")]
            ]
        ];
        echo view("layout/authLayout/header", $data);
        echo view("auth/login", $data);
        echo view("layout/authLayout/footer", $data);
        return '';
    }
}
