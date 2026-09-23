<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Header Banner -->
<section class="bg-gradient-to-r from-accent-dark via-accent to-accent-dark text-white py-14 border-b border-primary/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs uppercase font-bold tracking-widest text-primary-light block mb-2">Pilihan Kuliner Khas Bali</span>
        <h1 class="text-3xl sm:text-5xl font-serif font-extrabold tracking-tight">
            Daftar Menu <span class="text-gold-gradient">Ashraf Betutu</span>
        </h1>
        <p class="text-sm sm:text-base text-gray-200 max-w-xl mx-auto mt-3 font-light">
            Jelajahi aneka ragam olahan Ayam Betutu tradisional, varian bakar, sambal matah, hingga paket komplit berempah autentik.
        </p>
    </div>
</section>

<!-- Filter & Sorting Controls -->
<section class="py-8 bg-white border-b border-gray-200 sticky top-20 z-30 shadow-sm backdrop-blur-md bg-white/95">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
            
            <!-- Category Filter Tabs / Pills -->
            <div class="flex items-center gap-2 overflow-x-auto pb-2 lg:pb-0 scrollbar-none">
                <span class="text-xs font-bold uppercase tracking-wider text-gray-400 mr-1 shrink-0 hidden sm:inline">Kategori:</span>

                <!-- All Categories -->
                <?php 
                    $isAll = empty($selectedCategory) || $selectedCategory === 'all' || $selectedCategory === 'semua';
                    $sortParam = ! empty($selectedSort) ? '&sort=' . urlencode($selectedSort) : '';
                ?>
                <a href="<?= base_url('menu' . ($sortParam ? '?' . ltrim($sortParam, '&') : '')) ?>" 
                   class="px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all shrink-0 <?= $isAll ? 'bg-accent text-primary-light shadow-md' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' ?>">
                    Semua Kategori
                </a>

                <!-- Dynamic DB Categories -->
                <?php foreach ($categories as $cat) : ?>
                    <?php 
                        $isActive = ($selectedCategory === $cat);
                        $catUrl = base_url('menu?category=' . urlencode($cat) . $sortParam);
                    ?>
                    <a href="<?= $catUrl ?>" 
                       class="px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all shrink-0 <?= $isActive ? 'bg-accent text-primary-light shadow-md' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' ?>">
                        <?= esc($cat) ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Sorting & Reset Form -->
            <div class="flex items-center gap-3 shrink-0 self-end lg:self-auto w-full sm:w-auto justify-between sm:justify-end">
                <form id="sortForm" action="<?= base_url('menu') ?>" method="GET" class="flex items-center gap-2">
                    <?php if (! empty($selectedCategory)) : ?>
                        <input type="hidden" name="category" value="<?= esc($selectedCategory) ?>">
                    <?php endif; ?>

                    <label for="sortSelect" class="text-xs font-bold uppercase tracking-wider text-gray-400 shrink-0">Urutkan:</label>
                    <select id="sortSelect" name="sort" onchange="this.form.submit()" 
                            class="px-3.5 py-2 rounded-lg border border-gray-300 text-xs font-semibold text-gray-700 bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none cursor-pointer">
                        <option value="" <?= empty($selectedSort) ? 'selected' : '' ?>>Rekomendasi (Default)</option>
                        <option value="name_asc" <?= $selectedSort === 'name_asc' ? 'selected' : '' ?>>Nama A-Z</option>
                        <option value="name_desc" <?= $selectedSort === 'name_desc' ? 'selected' : '' ?>>Nama Z-A</option>
                        <option value="price_asc" <?= $selectedSort === 'price_asc' ? 'selected' : '' ?>>Harga Termurah</option>
                        <option value="price_desc" <?= $selectedSort === 'price_desc' ? 'selected' : '' ?>>Harga Termahal</option>
                    </select>
                </form>

                <?php if (! empty($selectedCategory) || ! empty($selectedSort)) : ?>
                    <a href="<?= base_url('menu') ?>" class="px-3 py-2 rounded-lg bg-gray-100 hover:bg-red-50 hover:text-red-700 text-xs font-semibold text-gray-600 transition-colors border border-gray-200 shrink-0" title="Reset filter dan sorting">
                        Reset Filter
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- Menu Listing Grid -->
<section class="py-12 bg-[#FAF9F5] min-h-[500px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Results Summary Info -->
        <div class="flex items-center justify-between mb-8 pb-3 border-b border-gray-200 text-xs text-gray-500">
            <div>
                Menampilkan <strong class="text-accent-dark font-bold text-sm"><?= esc($totalCount) ?></strong> hidangan khas Bali
                <?php if (! empty($selectedCategory)) : ?>
                    untuk kategori <span class="font-semibold text-accent">"<?= esc($selectedCategory) ?>"</span>
                <?php endif; ?>
            </div>
            <div>
                <?php if (! empty($selectedSort)) : ?>
                    <span class="text-gray-400">Urutan aktif: <span class="font-mono text-gray-600"><?= esc($selectedSort) ?></span></span>
                <?php endif; ?>
            </div>
        </div>

        <?php if (! empty($menus)) : ?>
            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php foreach ($menus as $menu) : ?>
                    <div class="bg-white rounded-2xl border border-gray-200/90 overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
                        
                        <!-- Food Photo Container -->
                        <a href="<?= base_url('menu/' . $menu['slug']) ?>" class="block h-48 bg-gradient-to-tr from-accent to-accent-light relative overflow-hidden">
                            <img src="<?= menu_image_url($menu['image']) ?>" 
                                 alt="<?= esc($menu['name']) ?>" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                            <!-- Category Badge -->
                            <div class="absolute top-3 left-3">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-accent-dark/90 text-primary-light border border-primary/30 shadow">
                                    <?= esc($menu['category']) ?>
                                </span>
                            </div>

                            <!-- Availability Badge -->
                            <div class="absolute top-3 right-3">
                                <?php if ($menu['is_available']) : ?>
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-green-900/80 text-green-300 backdrop-blur border border-green-500/30">
                                        Tersedia
                                    </span>
                                <?php else : ?>
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-red-900/80 text-red-300 backdrop-blur border border-red-500/30">
                                        Habis
                                    </span>
                                <?php endif; ?>
                            </div>
                        </a>

                        <!-- Card Body -->
                        <div class="p-5 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <a href="<?= base_url('menu/' . $menu['slug']) ?>" class="block">
                                    <h3 class="font-serif font-bold text-lg text-gray-900 group-hover:text-accent transition-colors leading-snug">
                                        <?= esc($menu['name']) ?>
                                    </h3>
                                </a>
                                <p class="text-xs text-gray-500 mt-2 line-clamp-3 leading-relaxed">
                                    <?= esc($menu['description'] ?: 'Hidangan ayam betutu khas Bali dengan rempah istimewa.') ?>
                                </p>
                            </div>

                            <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                                <div>
                                    <span class="block text-[9px] uppercase font-bold text-gray-400">Harga</span>
                                    <span class="font-serif font-extrabold text-lg text-accent-dark">
                                        Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                                    </span>
                                </div>
                                <a href="<?= base_url('menu/' . $menu['slug']) ?>" 
                                   class="px-3.5 py-1.5 rounded-lg bg-primary hover:bg-primary-light text-accent-dark text-xs font-bold transition-all shadow-sm">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

        <?php else : ?>
            <!-- Empty State -->
            <div class="py-20 text-center max-w-md mx-auto">
                <div class="w-16 h-16 mx-auto rounded-full bg-primary/20 text-primary-dark flex items-center justify-center text-2xl mb-4">
                    🔍
                </div>
                <h3 class="font-serif font-bold text-xl text-gray-800">Menu tidak ditemukan</h3>
                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                    Tidak ada menu kuliner yang sesuai dengan kategori atau pilihan filter yang Anda pilih.
                </p>
                <div class="mt-6">
                    <a href="<?= base_url('menu') ?>" class="inline-flex items-center px-6 py-2.5 rounded-full bg-accent hover:bg-accent-light text-white font-bold text-xs uppercase tracking-wider transition-all shadow">
                        Lihat Semua Menu
                    </a>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<?= $this->endSection() ?>
