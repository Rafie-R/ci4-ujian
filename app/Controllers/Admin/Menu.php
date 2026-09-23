<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class Menu extends BaseController
{
    protected MenuModel $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Kelola Menu - Ashraf Betutu',
            'menus' => $this->menuModel->orderBy('id', 'DESC')->findAll(),
        ];

        return view('admin/menu/index', $data);
    }

    public function create(): string
    {
        $data = [
            'title'      => 'Tambah Menu Baru - Ashraf Betutu',
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/menu/create', $data);
    }

    public function store(): \CodeIgniter\HTTP\RedirectResponse
    {
        $rules = [
            'name'        => 'required|min_length[3]|max_length[255]',
            'slug'        => 'required|min_length[3]|max_length[255]|is_unique[menus.slug]',
            'price'       => 'required|numeric|greater_than[0]',
            'category'    => 'required|min_length[2]|max_length[100]',
            'description' => 'permit_empty',
            'image'       => 'permit_empty|max_length[255]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $isAvailable = $this->request->getPost('is_available') ? 1 : 0;
        $image = $this->request->getPost('image');
        if (empty($image)) {
            $image = 'ayam-betutu-original.jpg';
        }

        $this->menuModel->insert([
            'name'         => $this->request->getPost('name'),
            'slug'         => url_title((string) $this->request->getPost('slug'), '-', true),
            'description'  => $this->request->getPost('description'),
            'price'        => $this->request->getPost('price'),
            'category'     => $this->request->getPost('category'),
            'image'        => $image,
            'is_available' => $isAvailable,
        ]);

        return redirect()->to('/admin/menu')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit(int $id): string|\CodeIgniter\HTTP\RedirectResponse
    {
        $menu = $this->menuModel->find($id);

        if (! $menu) {
            return redirect()->to('/admin/menu')->with('error', 'Menu tidak ditemukan.');
        }

        $data = [
            'title'      => 'Edit Menu: ' . esc($menu['name']),
            'menu'       => $menu,
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/menu/edit', $data);
    }

    public function update(int $id): \CodeIgniter\HTTP\RedirectResponse
    {
        $menu = $this->menuModel->find($id);

        if (! $menu) {
            return redirect()->to('/admin/menu')->with('error', 'Menu tidak ditemukan.');
        }

        $rules = [
            'name'        => 'required|min_length[3]|max_length[255]',
            'slug'        => "required|min_length[3]|max_length[255]|is_unique[menus.slug,id,{$id}]",
            'price'       => 'required|numeric|greater_than[0]',
            'category'    => 'required|min_length[2]|max_length[100]',
            'description' => 'permit_empty',
            'image'       => 'permit_empty|max_length[255]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $isAvailable = $this->request->getPost('is_available') ? 1 : 0;
        $image = $this->request->getPost('image');
        if (empty($image)) {
            $image = $menu['image'] ?: 'ayam-betutu-original.jpg';
        }

        $this->menuModel->update($id, [
            'name'         => $this->request->getPost('name'),
            'slug'         => url_title((string) $this->request->getPost('slug'), '-', true),
            'description'  => $this->request->getPost('description'),
            'price'        => $this->request->getPost('price'),
            'category'     => $this->request->getPost('category'),
            'image'        => $image,
            'is_available' => $isAvailable,
        ]);

        return redirect()->to('/admin/menu')->with('success', 'Menu berhasil diperbarui!');
    }

    public function delete(int $id): \CodeIgniter\HTTP\RedirectResponse
    {
        $menu = $this->menuModel->find($id);

        if (! $menu) {
            return redirect()->to('/admin/menu')->with('error', 'Menu tidak ditemukan.');
        }

        $this->menuModel->delete($id);

        return redirect()->to('/admin/menu')->with('success', 'Menu berhasil dihapus!');
    }
}
