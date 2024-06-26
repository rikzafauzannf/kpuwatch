<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data =[
            "title" => "Dashbord",
            "braidcumbs" => [
                ["label"=> "Dashboard" , "url" => base_url("/")]
            ]
        ];
        echo view("layout/header",$data);
        echo view("layout/nav" ,$data);
        echo view("layout/sidebar",$data);
        echo view("layout/braidcumb",$data);
        echo view("dashboard/main",$data);
        echo view("layout/footer",$data);
        return '';
    }

    public function DashboardQcKota(): string
    {
        $data =[
            "title" => "Dashbord QC Kota",
            "braidcumbs" => [
                ["label"=> "Dashboard" , "url" => base_url("/")],
                ["label"=> "Dashboard QC Kota" , "url" => base_url("/dashboardqckota")]
            ]
        ];
        echo view("layout/header",$data);
        echo view("layout/nav" ,$data);
        echo view("layout/sidebar",$data);
        echo view("layout/braidcumb",$data);
        echo view("dashboard/dashboardqckota",$data);
        echo view("layout/footer",$data);
        return '';
    }
}
