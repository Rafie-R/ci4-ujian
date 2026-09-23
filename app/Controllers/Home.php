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
            'featuredMenus'  => $menuModel->orderBy('is_available', 'DESC')->orderBy('id', 'ASC')->findAll(6),
            'signatureMenu'  => $menuModel->where('slug', 'ayam-betutu-original')->first() ?? $menuModel->first(),
            'totalMenuCount' => $menuModel->countAllResults(),
        ];

        return view('home/index', $data);
    }
}
