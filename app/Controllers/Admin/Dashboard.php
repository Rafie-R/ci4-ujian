<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $menuModel = new MenuModel();

        $data = [
            'title'            => 'Dashboard Admin - Ashraf Betutu',
            'totalMenu'        => $menuModel->countAllResults(),
            'availableMenu'    => $menuModel->where('is_available', 1)->countAllResults(),
            'unavailableMenu'  => $menuModel->where('is_available', 0)->countAllResults(),
            'recentMenus'      => $menuModel->orderBy('created_at', 'DESC')->findAll(5),
        ];

        return view('admin/dashboard/index', $data);
    }
}
