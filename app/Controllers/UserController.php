<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $model;

    public function __construct()
    {


        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url('/'));            
        }
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
            "title" => "Daftar Pengguna",
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

    public function store()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        $name = $this->request->getPost('name');
        $jabatan = $this->request->getPost('jabatan');
        $nip = $this->request->getPost('nip');
        $role = $this->request->getPost('role');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $user = [
            'name' => $name,
            'jabatan' => $jabatan,
            'nip' => $nip,
            'role' => $role,
            'email' => $email,
            'password' => $password,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $save = $this->model->save($user);

        if ($save) {
            session()->setFlashdata('success', 'Register Berhasil!');
            return redirect()->to(base_url('usermanagement'));
        } else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back();
        }
    }

    public function update($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        // Validasi data (contoh sederhana)
        $rules = [
            'name' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
            'role' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $name = $this->request->getPost('name');
        $jabatan = $this->request->getPost('jabatan');
        $nip = $this->request->getPost('nip');
        $role = $this->request->getPost('role');
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Update data
        $this->model->update($id, [
            'name' => $name,
            'jabatan' => $jabatan,
            'nip' => $nip,
            'role' => $role,
            'email' => $email,
            'password' => $password,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/usermanagement')->with('success', 'User updated successfully.');
    }

    public function delete($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        $this->model->delete($id);

        return redirect()->to('/usermanagement')->with('success', 'Data pengguna berhasil dihapus.');
    }

    public function show($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to(base_url(''));            
        }

        $user = $this->model->find($id);

        if (!$user) {
            return redirect()->to('/usermanagement')->with('error', 'User not found.');
        }

        $data = ['user' => $user];

        return view('users/show', $data);
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }
}
