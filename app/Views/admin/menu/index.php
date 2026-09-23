<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Header & Add Button -->
<div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
        <h1 class="text-2xl sm:text-3xl font-serif font-bold text-accent-dark">
            Kelola Menu Ayam Betutu
        </h1>
        <p class="text-sm text-gray-500 mt-1">
            Daftar lengkap seluruh hidangan kuliner Ashraf Betutu.
        </p>
    </div>
    <div>
        <a href="<?= base_url('admin/menu/create') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary hover:bg-primary-light text-accent-dark font-bold text-xs uppercase tracking-wider shadow transition-all transform hover:-translate-y-0.5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            + Tambah Menu
        </a>
    </div>
</div>

<!-- Table Card -->
<div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-600">
            <thead class="bg-accent-dark text-xs text-primary-light uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Gambar</th>
                    <th class="px-6 py-4">Nama Menu</th>
                    <th class="px-6 py-4">Kategori</th>
                    <th class="px-6 py-4">Harga</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php if (! empty($menus)) : ?>
                    <?php foreach ($menus as $menu) : ?>
                        <tr class="hover:bg-gray-50/80 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-gray-500">
                                #<?= esc($menu['id']) ?>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-12 h-12 rounded-lg bg-gray-100 border border-gray-200 overflow-hidden flex items-center justify-center shrink-0">
                                    <img src="<?= menu_image_url($menu['image']) ?>" alt="<?= esc($menu['name']) ?>" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="font-bold text-gray-900 block"><?= esc($menu['name']) ?></span>
                                <span class="text-xs text-gray-400 font-mono block">slug: <?= esc($menu['slug']) ?></span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 text-xs rounded-full bg-primary/20 text-accent-dark font-medium border border-primary/30">
                                    <?= esc($menu['category']) ?>
                                </span>
                            </td>
                            <td class="px-6 py-4 font-mono font-bold text-gray-900 whitespace-nowrap">
                                Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php if ($menu['is_available']) : ?>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                                        ● Tersedia
                                    </span>
                                <?php else : ?>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-red-100 text-red-800">
                                        ● Habis
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 text-center whitespace-nowrap space-x-2">
                                <a href="<?= base_url('admin/menu/edit/' . $menu['id']) ?>" class="inline-flex items-center px-3 py-1.5 rounded-md bg-blue-50 text-blue-700 hover:bg-blue-100 text-xs font-semibold transition-colors border border-blue-200">
                                    Edit
                                </a>
                                <a href="<?= base_url('admin/menu/delete/' . $menu['id']) ?>" 
                                   onclick="return confirm('Apakah Anda yakin ingin menghapus menu \'<?= esc(addslashes($menu['name'])) ?>\'?');" 
                                   class="inline-flex items-center px-3 py-1.5 rounded-md bg-red-50 text-red-700 hover:bg-red-100 text-xs font-semibold transition-colors border border-red-200">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center text-gray-400">
                            Belum ada menu yang tersimpan di database.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
