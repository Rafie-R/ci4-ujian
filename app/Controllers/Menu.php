<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    public function index(): string
    {
        $menuModel = new MenuModel();

        $data = [
            'title' => 'Daftar Menu - Ashraf Betutu',
            'menus' => $menuModel->orderBy('id', 'ASC')->findAll(),
        ];

        return view('menu/index', $data);
    }
}
