<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Home extends BaseController
{
    public function index(): string
    {
        $menuModel = new MenuModel();

        $data = [
            'title'          => 'Ashraf Betutu - Otentik Kuliner Ayam Betutu Khas Bali',
            'featuredMenus'  => $menuModel->where('is_available', 1)->orderBy('id', 'ASC')->findAll(6),
        ];

        return view('home/index', $data);
    }
}
