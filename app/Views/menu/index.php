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
            Jelajahi aneka ragam olahan Ayam Betutu tradisional, varian bakar, sambal matah, hingga paket komplit.
        </p>
    </div>
</section>

<!-- Menu Listing Grid -->
<section class="py-16 bg-[#FAF9F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Count summary -->
        <div class="flex items-center justify-between mb-8 pb-4 border-b border-gray-200">
            <div>
                <h2 class="text-lg font-serif font-bold text-accent-dark">Semua Menu Tersedia</h2>
                <p class="text-xs text-gray-500">Menampilkan <?= count($menus) ?> pilihan hidangan</p>
            </div>
            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-primary/20 text-accent-dark border border-primary/30">
                Ashraf Betutu Bali
            </span>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php if (! empty($menus)) : ?>
                <?php foreach ($menus as $menu) : ?>
                    <div class="bg-white rounded-2xl border border-gray-200/90 overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
                        <!-- Image Container -->
                        <div class="h-44 bg-gradient-to-tr from-accent to-accent-light relative overflow-hidden flex items-center justify-center">
                            <?php if (! empty($menu['image']) && str_starts_with($menu['image'], 'http')) : ?>
                                <img src="<?= esc($menu['image']) ?>" alt="<?= esc($menu['name']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <?php else : ?>
                                <div class="text-center p-3">
                                    <span class="text-4xl block mb-1">🍗</span>
                                    <span class="text-[10px] text-primary font-serif font-bold tracking-wider uppercase">Ashraf Betutu</span>
                                </div>
                            <?php endif; ?>

                            <!-- Category Badge -->
                            <div class="absolute top-3 left-3">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-accent-dark/90 text-primary-light border border-primary/30">
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
                        </div>

                        <!-- Card Body -->
                        <div class="p-5 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <h3 class="font-serif font-bold text-lg text-gray-900 group-hover:text-accent transition-colors leading-snug">
                                    <?= esc($menu['name']) ?>
                                </h3>
                                <p class="text-xs text-gray-500 mt-2 line-clamp-3 leading-relaxed">
                                    <?= esc($menu['description'] ?: 'Hidangan ayam betutu khas Bali bercita rasa rempah istimewa.') ?>
                                </p>
                            </div>

                            <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                                <div>
                                    <span class="block text-[9px] uppercase font-bold text-gray-400">Harga</span>
                                    <span class="font-serif font-extrabold text-lg text-accent-dark">
                                        Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                                    </span>
                                </div>
                                <button type="button" class="px-3.5 py-1.5 rounded-lg bg-accent text-white hover:bg-accent-light text-xs font-semibold transition-colors shadow">
                                    Pesan
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-span-full py-16 text-center text-gray-400">
                    <p class="text-base font-serif">Belum ada menu yang ditampilkan saat ini.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
