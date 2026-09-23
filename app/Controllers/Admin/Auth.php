<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Auth extends BaseController
{
    public function login(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        if (session()->get('admin_logged_in')) {
            return redirect()->to('/admin');
        }

        return view('admin/auth/login');
    }

    public function attemptLogin(): \CodeIgniter\HTTP\RedirectResponse
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (empty($username) || empty($password)) {
            return redirect()->to('/admin/login')->withInput()->with('error', 'Username dan password wajib diisi.');
        }

        $adminModel = new AdminModel();
        $admin = $adminModel->where('username', $username)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            session()->set([
                'admin_id'        => $admin['id'],
                'admin_username'  => $admin['username'],
                'admin_logged_in' => true,
            ]);

            return redirect()->to('/admin')->with('success', 'Selamat datang kembali, ' . esc($admin['username']) . '!');
        }

        return redirect()->to('/admin/login')->withInput()->with('error', 'Username atau password yang Anda masukkan salah.');
    }

    public function logout(): \CodeIgniter\HTTP\RedirectResponse
    {
        session()->destroy();

        return redirect()->to('/admin/login')->with('success', 'Anda telah berhasil logout.');
    }
}
