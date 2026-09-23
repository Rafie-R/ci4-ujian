<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Breadcrumbs & Navigation -->
<div class="bg-accent-dark/40 border-b border-primary/20 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 text-xs text-gray-300">
            <a href="<?= base_url('/') ?>" class="hover:text-primary transition-colors">Beranda</a>
            <span>/</span>
            <a href="<?= base_url('menu') ?>" class="hover:text-primary transition-colors">Daftar Menu</a>
            <span>/</span>
            <span class="text-primary font-semibold truncate max-w-[200px] sm:max-w-none"><?= esc($menu['name']) ?></span>
        </nav>
    </div>
</div>

<!-- Main Detail Section -->
<section class="py-12 lg:py-16 bg-[#FAF9F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl border border-gray-200/90 shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0">
                <!-- Left: Food Photography Image -->
                <div class="lg:col-span-6 relative bg-gradient-to-tr from-accent to-accent-light min-h-[350px] lg:min-h-[500px] overflow-hidden flex items-center justify-center">
                    <img src="<?= menu_image_url($menu['image']) ?>" 
                         alt="<?= esc($menu['name']) ?>" 
                         class="w-full h-full object-cover">
                    
                    <!-- Category Badge -->
                    <div class="absolute top-5 left-5">
                        <span class="px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-accent-dark/90 text-primary-light border border-primary/40 shadow-lg">
                            <?= esc($menu['category']) ?>
                        </span>
                    </div>

                    <!-- Status Badge -->
                    <div class="absolute top-5 right-5">
                        <?php if ($menu['is_available']) : ?>
                            <span class="px-3 py-1.5 rounded-full text-xs font-bold bg-green-900/90 text-green-300 backdrop-blur border border-green-500/40 shadow-lg">
                                ● Menu Tersedia
                            </span>
                        <?php else : ?>
                            <span class="px-3 py-1.5 rounded-full text-xs font-bold bg-red-900/90 text-red-300 backdrop-blur border border-red-500/40 shadow-lg">
                                ● Sedang Habis
                            </span>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Right: Information & Ordering -->
                <div class="lg:col-span-6 p-8 sm:p-10 lg:p-12 flex flex-col justify-between space-y-8">
                    <div>
                        <!-- Brand Label -->
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="text-xs uppercase font-bold tracking-widest text-primary-dark">Kuliner Khas Bali &bull; Ashraf Betutu</span>
                        </div>

                        <!-- Menu Title -->
                        <h1 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 leading-tight">
                            <?= esc($menu['name']) ?>
                        </h1>

                        <!-- Price Tag -->
                        <div class="mt-4 flex items-baseline gap-2 pb-6 border-b border-gray-100">
                            <span class="text-xs text-gray-400 font-bold uppercase">Harga:</span>
                            <span class="text-3xl sm:text-4xl font-serif font-extrabold text-accent-dark">
                                Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                            </span>
                            <span class="text-xs text-gray-500">/ porsi</span>
                        </div>

                        <!-- Full Description -->
                        <div class="mt-6 space-y-3">
                            <h3 class="text-xs uppercase font-bold tracking-wider text-gray-400">Deskripsi Lengkap:</h3>
                            <p class="text-sm sm:text-base text-gray-700 leading-relaxed font-light">
                                <?= nl2br(esc($menu['description'] ?: 'Hidangan istimewa Ayam Betutu khas Bali dengan racikan 16 bumbu rempah tradisional Base Genep yang dimasak secara perlahan hingga bumbu meresap sempurna ke dalam serat daging.')) ?>
                            </p>
                        </div>

                        <!-- Highlights / Selling Points -->
                        <div class="mt-8 grid grid-cols-2 gap-3 pt-6 border-t border-gray-100 text-xs text-gray-600">
                            <div class="flex items-center gap-2 p-2.5 rounded-lg bg-gray-50 border border-gray-100">
                                <span class="text-primary font-bold">✓</span>
                                <span>16 Rempah Asli Bali</span>
                            </div>
                            <div class="flex items-center gap-2 p-2.5 rounded-lg bg-gray-50 border border-gray-100">
                                <span class="text-primary font-bold">✓</span>
                                <span>Ayam Segar Pilihan</span>
                            </div>
                            <div class="flex items-center gap-2 p-2.5 rounded-lg bg-gray-50 border border-gray-100">
                                <span class="text-primary font-bold">✓</span>
                                <span>100% Halal & Bersih</span>
                            </div>
                            <div class="flex items-center gap-2 p-2.5 rounded-lg bg-gray-50 border border-gray-100">
                                <span class="text-primary font-bold">✓</span>
                                <span>Aroma Daun Pisang Alami</span>
                            </div>
                        </div>
                    </div>

                    <!-- Actions & CTA -->
                    <div class="pt-6 border-t border-gray-100 space-y-4">
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <?php if ($menu['is_available']) : ?>
                                <a href="https://wa.me/6281234567890?text=Halo%20Ashraf%20Betutu,%20saya%20ingin%20memesan%20<?= urlencode($menu['name']) ?>" 
                                   target="_blank" 
                                   class="w-full sm:flex-1 inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-xl bg-accent hover:bg-accent-light text-white font-bold text-sm tracking-wide transition-all shadow-md hover:shadow-lg">
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.173.086.275.071.376-.043.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/></svg>
                                    Pesan Sekarang (WhatsApp)
                                </a>
                            <?php else : ?>
                                <button disabled class="w-full sm:flex-1 py-3.5 px-6 rounded-xl bg-gray-200 text-gray-500 font-bold text-sm cursor-not-allowed">
                                    Menu Sedang Tidak Tersedia
                                </button>
                            <?php endif; ?>

                            <a href="<?= base_url('menu') ?>" class="w-full sm:w-auto inline-flex items-center justify-center py-3.5 px-6 rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold text-sm transition-colors">
                                &larr; Semua Menu
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RELATED / RECOMMENDED MENUS SECTION -->
        <?php if (! empty($relatedMenus)) : ?>
            <div class="mt-16">
                <div class="flex items-center justify-between mb-8 pb-4 border-b border-gray-200">
                    <div>
                        <span class="text-xs uppercase font-bold tracking-widest text-primary-dark">Rekomendasi Menu Lainnya</span>
                        <h2 class="text-2xl font-serif font-bold text-accent-dark mt-1">Pilihan Hidangan Betutu Favorit</h2>
                    </div>
                    <a href="<?= base_url('menu') ?>" class="text-xs font-bold text-accent hover:text-accent-light">
                        Lihat Semua &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php foreach ($relatedMenus as $item) : ?>
                        <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col group">
                            <div class="h-44 bg-gradient-to-tr from-accent to-accent-light relative overflow-hidden">
                                <img src="<?= menu_image_url($item['image']) ?>" alt="<?= esc($item['name']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute top-3 left-3">
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-accent-dark/90 text-primary-light border border-primary/30">
                                        <?= esc($item['category']) ?>
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex-grow flex flex-col justify-between space-y-4">
                                <div>
                                    <h4 class="font-serif font-bold text-base text-gray-900 group-hover:text-accent transition-colors">
                                        <?= esc($item['name']) ?>
                                    </h4>
                                    <p class="text-xs text-gray-500 mt-1 line-clamp-2">
                                        <?= esc($item['description'] ?: 'Kuliner autentik Ayam Betutu khas Bali.') ?>
                                    </p>
                                </div>
                                <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                                    <span class="font-serif font-bold text-base text-accent-dark">
                                        Rp <?= number_format($item['price'], 0, ',', '.') ?>
                                    </span>
                                    <a href="<?= base_url('menu/' . $item['slug']) ?>" class="px-3.5 py-1.5 rounded-lg bg-primary hover:bg-primary-light text-accent-dark text-xs font-bold transition-colors">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>
