<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function index(): string
    {
        $data =[
            "title" => "Login",
            "braidcumbs" => [
                ["label"=> "Dashboard" , "url" => base_url("/")]
            ]
        ];
        echo view("layout/header",$data);
        // echo view("layout/nav" ,$data);
        // echo view("layout/sidebar",$data);
        // echo view("layout/braidcumb",$data);
        echo view("auth/login",$data);
        echo view("layout/footer",$data);
        return '';
    }

}
