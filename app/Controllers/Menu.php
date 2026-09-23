<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Menu extends BaseController
{
    protected MenuModel $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index(): string
    {
        // 1. Get query parameters
        $category = trim((string) $this->request->getGet('category'));
        $sort     = trim((string) $this->request->getGet('sort'));

        // 2. Base Query (available menus for public)
        $builder = $this->menuModel->where('is_available', 1);

        // 3. Apply Category Filter
        if (! empty($category) && strtolower($category) !== 'all' && strtolower($category) !== 'semua') {
            $builder->where('category', $category);
        }

        // 4. Apply Sorting
        switch ($sort) {
            case 'name_asc':
                $builder->orderBy('name', 'ASC');
                break;
            case 'name_desc':
                $builder->orderBy('name', 'DESC');
                break;
            case 'price_asc':
                $builder->orderBy('price', 'ASC');
                break;
            case 'price_desc':
                $builder->orderBy('price', 'DESC');
                break;
            default:
                // Default sorting by ID ASC
                $builder->orderBy('id', 'ASC');
                break;
        }

        $menus = $builder->findAll();

        // 5. Get all unique categories from available menus for filter UI
        $rawCategories = $this->menuModel->select('category')
                                         ->where('is_available', 1)
                                         ->groupBy('category')
                                         ->orderBy('category', 'ASC')
                                         ->findAll();
        $categories = array_column($rawCategories, 'category');

        $data = [
            'title'            => 'Daftar Menu - Ashraf Betutu Bali',
            'menus'            => $menus,
            'categories'       => $categories,
            'selectedCategory' => $category,
            'selectedSort'     => $sort,
            'totalCount'       => count($menus),
        ];

        return view('menu/index', $data);
    }

    public function detail(string $slug): string
    {
        $slug = trim($slug);
        $menu = $this->menuModel->where('slug', $slug)->first();

        if (! $menu) {
            throw PageNotFoundException::forPageNotFound('Menu "' . esc($slug) . '" tidak ditemukan.');
        }

        // Get related recommendations (up to 3 other items, prioritising same category or other available items)
        $relatedMenus = $this->menuModel->where('is_available', 1)
                                        ->where('id !=', $menu['id'])
                                        ->orderBy('id', 'ASC')
                                        ->findAll(3);

        $data = [
            'title'        => esc($menu['name']) . ' - Ashraf Betutu',
            'menu'         => $menu,
            'relatedMenus' => $relatedMenus,
        ];

        return view('menu/detail', $data);
    }
}
