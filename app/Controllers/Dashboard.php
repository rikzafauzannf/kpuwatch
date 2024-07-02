<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {        
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

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
        echo view("dashboard/main", $data);
        echo view("layout/footer", $data);
        return '';
    }

    public function DashboardQcKota(): string
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        $data = [
            "title" => "Dashbord QC Kota",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")],
                ["label" => "Dashboard QC Kota", "url" => base_url("/dashboardqckota")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("dashboard/dashboardqckota", $data);
        echo view("layout/footer", $data);
        return '';
    }

    public function DashboardQuickCount(): string
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        $data = [
            "title" => "Dashboard E-Monev",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")],
                ["label" => "Dashboard QuickCount", "url" => base_url("/dashboardquickcount")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("dashboard/dashboardQuickCount", $data);
        echo view("layout/footer", $data);
        return '';
    }

    public function DashboardRealCount(): string
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }
        
        $data = [
            "title" => "Dashboard E-Monev",
            "braidcumbs" => [
                ["label" => "Dashboard", "url" => base_url("/")],
                ["label" => "Dashboard RealCount", "url" => base_url("/dashboardrealcount")]
            ]
        ];
        echo view("layout/header", $data);
        echo view("layout/nav", $data);
        echo view("layout/sidebar", $data);
        echo view("layout/braidcumb", $data);
        echo view("dashboard/dashboardRealCount", $data);
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
