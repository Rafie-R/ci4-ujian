<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="max-w-3xl mx-auto">
    <!-- Header & Back Button -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-serif font-bold text-accent-dark">Tambah Menu Baru</h1>
            <p class="text-xs text-gray-500 mt-1">Masukkan rincian hidangan kuliner Ayam Betutu baru.</p>
        </div>
        <a href="<?= base_url('admin/menu') ?>" class="text-xs font-semibold text-gray-600 hover:text-accent flex items-center gap-1">
            &larr; Kembali ke Daftar Menu
        </a>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 sm:p-8">
        <form action="<?= base_url('admin/menu') ?>" method="POST" class="space-y-6">
            <?= csrf_field() ?>

            <!-- Name -->
            <div>
                <label for="name" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Nama Makanan <span class="text-red-500">*</span>
                </label>
                <input type="text" id="name" name="name" value="<?= old('name') ?>" required
                       class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
                       placeholder="Contoh: Ayam Betutu Kuah Kental">
            </div>

            <!-- Slug -->
            <div>
                <label for="slug" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Slug URL <span class="text-red-500">*</span>
                </label>
                <input type="text" id="slug" name="slug" value="<?= old('slug') ?>" required
                       class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm font-mono focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
                       placeholder="ayam-betutu-kuah-kental">
                <p class="text-[11px] text-gray-400 mt-1">Digunakan untuk URL menu (harus unik dan tanpa spasi).</p>
            </div>

            <!-- Category & Price (2 Columns) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="category" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                        Kategori <span class="text-red-500">*</span>
                    </label>
                    <select id="category" name="category" required
                            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors bg-white">
                        <option value="Ayam Betutu" <?= old('category') === 'Ayam Betutu' ? 'selected' : '' ?>>Ayam Betutu</option>
                        <option value="Special" <?= old('category') === 'Special' ? 'selected' : '' ?>>Special</option>
                        <option value="Paket" <?= old('category') === 'Paket' ? 'selected' : '' ?>>Paket</option>
                        <option value="Premium" <?= old('category') === 'Premium' ? 'selected' : '' ?>>Premium</option>
                        <option value="Minuman" <?= old('category') === 'Minuman' ? 'selected' : '' ?>>Minuman</option>
                    </select>
                </div>

                <div>
                    <label for="price" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                        Harga (Rp) <span class="text-red-500">*</span>
                    </label>
                    <input type="number" id="price" name="price" value="<?= old('price') ?>" required min="1000" step="500"
                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm font-mono focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
                           placeholder="Contoh: 50000">
                </div>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Deskripsi Makanan
                </label>
                <textarea id="description" name="description" rows="3"
                          class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
                          placeholder="Jelaskan cita rasa bumbu, proses memasak, atau pelengkap hidangan..."><?= old('description') ?></textarea>
            </div>

            <!-- Image File/URL -->
            <div>
                <label for="image" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Nama File / URL Gambar
                </label>
                <input type="text" id="image" name="image" value="<?= old('image', 'ayam-betutu-original.jpg') ?>"
                       class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
                       placeholder="Contoh: ayam-betutu-original.jpg atau URL gambar https://...">
                <p class="text-[11px] text-gray-400 mt-1">Nama file gambar atau link visual (Upload gambar lengkap pada Commit 3).</p>
            </div>

            <!-- Availability (Toggle/Checkbox) -->
            <div class="pt-2">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" id="is_available" name="is_available" value="1" <?= old('is_available', '1') ? 'checked' : '' ?>
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
                    Simpan Menu
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Auto-generate slug from name if slug is untouched
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');
    if (nameInput && slugInput) {
        nameInput.addEventListener('input', () => {
            if (!slugInput.dataset.manual) {
                slugInput.value = nameInput.value
                    .toLowerCase()
                    .trim()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_-]+/g, '-')
                    .replace(/^-+|-+$/g, '');
            }
        });
        slugInput.addEventListener('input', () => {
            slugInput.dataset.manual = 'true';
        });
    }
</script>

<?= $this->endSection() ?>
