<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{

    protected $model;    

    public function __construct()    
    {
        helper('security');
        
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {        
        if ($this->isLoggedIn()) {
            return redirect()->to(base_url('dashboard'));            
        }

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

    public function login()
    {
        helper('security');

        $email = $this->request->getPost('email', FILTER_SANITIZE_STRING);
        $password = $this->request->getPost('password', FILTER_SANITIZE_STRING);        
        
        $credentials = ['email' => $email];

        $user = $this->model->where($credentials)
            ->first();

        if (! $user) {
            session()->setFlashdata('error', 'Email atau password anda salah.');
            return redirect()->back();
        }

        $passwordCheck = password_verify($password, $user['password']);

        if (! $passwordCheck) {
            session()->setFlashdata('error', 'Email atau password anda salah.');
            return redirect()->back();
        }

        $userData = [
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role'],
            'logged_in' => TRUE
        ];

        session()->set($userData);
        return redirect()->to(base_url('dashboard'));
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;            
        }

        return false;
    }
    
}
