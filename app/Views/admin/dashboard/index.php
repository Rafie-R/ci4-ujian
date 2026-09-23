<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Dashboard Header -->
<div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
        <h1 class="text-2xl sm:text-3xl font-serif font-bold text-accent-dark">
            Dashboard Administrasi
        </h1>
        <p class="text-sm text-gray-500 mt-1">
            Ringkasan data menu dan status kuliner Ayam Betutu khas Bali di <strong class="text-accent">Ashraf Betutu</strong>.
        </p>
    </div>
    <div class="flex items-center gap-3">
        <a href="<?= base_url('admin/menu/create') ?>" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary hover:bg-primary-light text-accent-dark font-bold text-xs uppercase tracking-wider shadow transition-all transform hover:-translate-y-0.5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Tambah Menu Baru
        </a>
    </div>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    <!-- Card 1: Total Menu -->
    <div class="bg-white p-6 rounded-xl border border-gray-200/80 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
        <div class="absolute -right-3 -bottom-3 w-20 h-20 rounded-full bg-accent/5 pointer-events-none"></div>
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Total Menu</p>
                <p class="text-3xl font-extrabold text-accent-dark mt-2"><?= esc($totalMenu) ?></p>
                <p class="text-xs text-gray-400 mt-1">Item kuliner terdaftar</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-accent text-primary flex items-center justify-center shadow-inner">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
        </div>
    </div>

    <!-- Card 2: Menu Tersedia -->
    <div class="bg-white p-6 rounded-xl border border-green-200 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
        <div class="absolute -right-3 -bottom-3 w-20 h-20 rounded-full bg-green-500/5 pointer-events-none"></div>
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs font-semibold text-green-700 uppercase tracking-wider">Menu Tersedia</p>
                <p class="text-3xl font-extrabold text-green-700 mt-2"><?= esc($availableMenu) ?></p>
                <p class="text-xs text-green-600/80 mt-1">Siap dipesan pengunjung</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-green-100 text-green-700 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
        </div>
    </div>

    <!-- Card 3: Menu Tidak Tersedia -->
    <div class="bg-white p-6 rounded-xl border border-amber-200 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
        <div class="absolute -right-3 -bottom-3 w-20 h-20 rounded-full bg-amber-500/5 pointer-events-none"></div>
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs font-semibold text-amber-700 uppercase tracking-wider">Menu Habis / Kosong</p>
                <p class="text-3xl font-extrabold text-amber-700 mt-2"><?= esc($unavailableMenu) ?></p>
                <p class="text-xs text-amber-600/80 mt-1">Sedang tidak tersedia</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            </div>
        </div>
    </div>
</div>

<!-- Quick Navigation Action Bar -->
<div class="bg-white rounded-xl border border-gray-200 p-6 mb-8 shadow-sm">
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        <div>
            <h2 class="text-lg font-bold text-gray-800">Manajemen Kuliner Betutu</h2>
            <p class="text-xs text-gray-500">Kelola daftar menu lengkap, perbarui harga, ketersediaan, dan deskripsi.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="<?= base_url('admin/menu') ?>" class="px-4 py-2 bg-accent hover:bg-accent-light text-white text-xs font-semibold rounded-lg transition-colors">
                Buka Tabel Kelola Menu &rarr;
            </a>
            <a href="<?= base_url('admin/menu/create') ?>" class="px-4 py-2 bg-primary hover:bg-primary-light text-accent-dark text-xs font-bold rounded-lg transition-colors">
                + Menu Baru
            </a>
        </div>
    </div>
</div>

<!-- Recent Menus Table -->
<div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm">
    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
        <h3 class="text-sm font-bold text-gray-800 uppercase tracking-wider">Preview Menu Terbaru</h3>
        <a href="<?= base_url('admin/menu') ?>" class="text-xs text-accent hover:text-accent-light font-semibold">
            Lihat Semua (<?= esc($totalMenu) ?>)
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-600">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase tracking-wider border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3">Nama Menu</th>
                    <th class="px-6 py-3">Kategori</th>
                    <th class="px-6 py-3">Harga</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php if (! empty($recentMenus)) : ?>
                    <?php foreach ($recentMenus as $item) : ?>
                        <tr class="hover:bg-gray-50/80 transition-colors">
                            <td class="px-6 py-4 font-semibold text-gray-900">
                                <?= esc($item['name']) ?>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 text-xs rounded-full bg-primary/20 text-accent-dark font-medium border border-primary/30">
                                    <?= esc($item['category']) ?>
                                </span>
                            </td>
                            <td class="px-6 py-4 font-mono font-semibold text-gray-900">
                                Rp <?= number_format($item['price'], 0, ',', '.') ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php if ($item['is_available']) : ?>
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-green-100 text-green-800">
                                        Tersedia
                                    </span>
                                <?php else : ?>
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-red-100 text-red-800">
                                        Habis
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="<?= base_url('admin/menu/edit/' . $item['id']) ?>" class="text-xs font-medium text-blue-600 hover:text-blue-800">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-400 text-sm">Belum ada menu yang dibuat.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
