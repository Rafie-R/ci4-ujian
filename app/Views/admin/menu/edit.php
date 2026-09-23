<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="max-w-3xl mx-auto">
    <!-- Header & Back Button -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-serif font-bold text-accent-dark">Edit Menu: <?= esc($menu['name']) ?></h1>
            <p class="text-xs text-gray-500 mt-1">Perbarui data atau status ketersediaan menu.</p>
        </div>
        <a href="<?= base_url('admin/menu') ?>" class="text-xs font-semibold text-gray-600 hover:text-accent flex items-center gap-1">
            &larr; Kembali ke Daftar Menu
        </a>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 sm:p-8">
        <form action="<?= base_url('admin/menu/update/' . $menu['id']) ?>" method="POST" class="space-y-6">
            <?= csrf_field() ?>

            <!-- Name -->
            <div>
                <label for="name" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Nama Makanan <span class="text-red-500">*</span>
                </label>
                <input type="text" id="name" name="name" value="<?= old('name', $menu['name']) ?>" required
                       class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors">
            </div>

            <!-- Slug -->
            <div>
                <label for="slug" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Slug URL <span class="text-red-500">*</span>
                </label>
                <input type="text" id="slug" name="slug" value="<?= old('slug', $menu['slug']) ?>" required
                       class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm font-mono focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors">
                <p class="text-[11px] text-gray-400 mt-1">Digunakan untuk URL menu (harus unik).</p>
            </div>

            <!-- Category & Price (2 Columns) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="category" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                        Kategori <span class="text-red-500">*</span>
                    </label>
                    <select id="category" name="category" required
                            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors bg-white">
                        <?php 
                            $currentCat = old('category', $menu['category']);
                            $cats = ['Ayam Betutu', 'Special', 'Spesial', 'Paket', 'Premium', 'Minuman'];
                        ?>
                        <?php foreach ($cats as $cat) : ?>
                            <option value="<?= esc($cat) ?>" <?= $currentCat === $cat ? 'selected' : '' ?>><?= esc($cat) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label for="price" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                        Harga (Rp) <span class="text-red-500">*</span>
                    </label>
                    <input type="number" id="price" name="price" value="<?= old('price', (int)$menu['price']) ?>" required min="1000" step="500"
                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm font-mono focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors">
                </div>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Deskripsi Makanan
                </label>
                <textarea id="description" name="description" rows="3"
                          class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"><?= old('description', $menu['description']) ?></textarea>
            </div>

            <!-- Image File/URL -->
            <div>
                <label for="image" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Nama File / URL Gambar
                </label>
                <input type="text" id="image" name="image" value="<?= old('image', $menu['image']) ?>"
                       class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors">
            </div>

            <!-- Availability (Toggle/Checkbox) -->
            <div class="pt-2">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" id="is_available" name="is_available" value="1" <?= old('is_available', (string)$menu['is_available']) == '1' ? 'checked' : '' ?>
                           class="w-4 h-4 text-accent rounded border-gray-300 focus:ring-primary">
                    <span class="text-sm font-semibold text-gray-800">Menu Tersedia untuk Dipesan (Available)</span>
                </label>
            </div>

            <!-- Buttons -->
            <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                <a href="<?= base_url('admin/menu') ?>" class="px-5 py-2.5 rounded-lg border border-gray-300 text-xs font-semibold text-gray-600 hover:bg-gray-50 transition-colors">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-lg bg-primary hover:bg-primary-light text-accent-dark font-bold text-xs uppercase tracking-wider shadow transition-all">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
