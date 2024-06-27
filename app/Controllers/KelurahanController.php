<?php

namespace App\Controllers;

class KelurahanController extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "Dashbord",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("kelurahan/tps", $data);
        echo view("layout/footer", $data);
        return '';
    }

    public function dataTps(): string
    {
        $data = [
            "title" => "Data TPS",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")],
                ["label" => "Data TPS", "url" => base_url("/datatps")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("kelurahan/tps", $data);
        echo view("layout/footer", $data);
        return '';
    }
}
