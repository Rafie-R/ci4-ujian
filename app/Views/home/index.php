<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section class="relative bg-gradient-to-b from-accent-dark via-accent to-accent-dark text-white overflow-hidden py-20 lg:py-28 border-b border-primary/20">
    <!-- Decorative background glow and motifs -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[700px] h-[500px] bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -top-24 right-0 w-96 h-96 bg-accent-light/20 rounded-full blur-2xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            <!-- Left Headline Text -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/80 border border-primary/40 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-xs uppercase font-bold tracking-widest text-primary-light">Kuliner Autentik Khas Bali</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-extrabold tracking-tight leading-[1.15]">
                    Rasa Bali, Disajikan dengan <span class="text-gold-gradient">Cara Berbeda.</span>
                </h1>

                <p class="text-base sm:text-lg text-gray-200 max-w-2xl mx-auto lg:mx-0 font-light leading-relaxed">
                    Authentic Balinese Ayam Betutu crafted with rich spices and a modern dining experience. Nikmati kelembutan ayam berpadu racikan 16 rempah tradisional yang meresap hingga ke tulang.
                </p>

                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="<?= base_url('menu') ?>" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-primary hover:bg-primary-light text-accent-dark font-extrabold text-sm uppercase tracking-wider shadow-lg hover:shadow-primary/30 transition-all duration-200 transform hover:-translate-y-0.5">
                        Jelajahi Menu
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#about" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-transparent hover:bg-white/10 text-white font-semibold text-sm border border-gray-400/50 hover:border-primary transition-all duration-200">
                        Tentang Kami
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="pt-8 border-t border-gray-700/50 grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
                    <div>
                        <span class="block text-2xl font-serif font-bold text-primary">16</span>
                        <span class="text-xs text-gray-300">Rempah Base Genep</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-serif font-bold text-primary">8 Jam</span>
                        <span class="text-xs text-gray-300">Slow-Cook Tradisional</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-serif font-bold text-primary">100%</span>
                        <span class="text-xs text-gray-300">Ayam Pilihan Segar</span>
                    </div>
                </div>
            </div>

            <!-- Right Visual Graphic Area -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md rounded-3xl p-1 bg-gradient-to-tr from-primary via-accent-light to-primary shadow-2xl">
                    <div class="bg-accent-dark rounded-[22px] p-6 text-center overflow-hidden relative">
                        <!-- Betutu Visual Showcase Plate -->
                        <div class="w-48 h-48 sm:w-60 sm:h-60 mx-auto rounded-full bg-gradient-to-tr from-accent to-accent-light border-4 border-primary/60 flex items-center justify-center shadow-inner relative group">
                            <div class="text-center p-4">
                                <span class="text-4xl block mb-2">🍗</span>
                                <span class="font-serif font-bold text-xl text-primary block leading-tight">Ashraf Betutu</span>
                                <span class="text-[11px] text-gray-300 uppercase tracking-widest block mt-1">Special Edition</span>
                            </div>
                        </div>

                        <!-- Floating Badges -->
                        <div class="mt-6 space-y-3 text-left">
                            <div class="bg-accent/80 backdrop-blur rounded-xl p-3.5 border border-primary/30 flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-primary/20 text-primary flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-white">Resep Asli Gilimanuk Bali</h4>
                                    <p class="text-[11px] text-gray-300">Dimasak dengan bumbu base genep lengkap</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED MENUS SECTION -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-widest text-primary-dark">Pilihan Favorit</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-accent-dark mt-2">
                Menu Unggulan Kami
            </h2>
            <div class="w-16 h-1 bg-primary mx-auto my-4 rounded-full"></div>
            <p class="text-sm text-gray-500">
                Pilihan menu Ayam Betutu terbaik yang paling dicari para penikmat kuliner khas Pulau Dewata.
            </p>
        </div>

        <!-- Menu Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (! empty($featuredMenus)) : ?>
                <?php foreach ($featuredMenus as $menu) : ?>
                    <div class="bg-[#FCFBF8] rounded-2xl border border-gray-200/80 overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
                        <!-- Image Container -->
                        <div class="h-48 bg-gradient-to-tr from-accent to-accent-light relative overflow-hidden flex items-center justify-center">
                            <?php if (! empty($menu['image']) && str_starts_with($menu['image'], 'http')) : ?>
                                <img src="<?= esc($menu['image']) ?>" alt="<?= esc($menu['name']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <?php else : ?>
                                <div class="text-center p-4">
                                    <span class="text-5xl block mb-1">🍗</span>
                                    <span class="text-xs text-primary font-serif font-bold tracking-wider uppercase">Ashraf Betutu</span>
                                </div>
                            <?php endif; ?>

                            <!-- Category Badge -->
                            <div class="absolute top-3 left-3">
                                <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-accent-dark/90 text-primary-light border border-primary/30 shadow">
                                    <?= esc($menu['category']) ?>
                                </span>
                            </div>

                            <!-- Availability Badge -->
                            <div class="absolute top-3 right-3">
                                <?php if ($menu['is_available']) : ?>
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-semibold bg-green-900/80 text-green-300 backdrop-blur border border-green-500/30">
                                        Tersedia
                                    </span>
                                <?php else : ?>
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-semibold bg-red-900/80 text-red-300 backdrop-blur border border-red-500/30">
                                        Habis
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <h3 class="font-serif font-bold text-xl text-gray-900 group-hover:text-accent transition-colors">
                                    <?= esc($menu['name']) ?>
                                </h3>
                                <p class="text-xs text-gray-500 mt-2 line-clamp-3 leading-relaxed">
                                    <?= esc($menu['description'] ?: 'Hidangan lezat Ayam Betutu khas Bali kaya bumbu rempah tradisional.') ?>
                                </p>
                            </div>

                            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                                <div>
                                    <span class="block text-[10px] uppercase font-bold text-gray-400">Harga</span>
                                    <span class="font-serif font-extrabold text-xl text-accent-dark">
                                        Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                                    </span>
                                </div>
                                <a href="<?= base_url('menu') ?>" class="px-4 py-2 rounded-lg bg-accent text-white hover:bg-accent-light text-xs font-semibold transition-colors shadow">
                                    Pesan Menu
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- View All Button -->
        <div class="mt-14 text-center">
            <a href="<?= base_url('menu') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full border-2 border-accent text-accent hover:bg-accent hover:text-white font-bold text-xs uppercase tracking-wider transition-all duration-200">
                Lihat Semua Daftar Menu (<?= count($featuredMenus) ?>+)
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="py-20 bg-[#FAF7F0] border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Narrative -->
            <div class="lg:col-span-7 space-y-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary-dark">Cerita Kami</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-accent-dark leading-tight">
                    Warisan Rasa Bali
                </h2>
                <div class="w-16 h-1 bg-primary rounded-full"></div>

                <div class="space-y-4 text-sm sm:text-base text-gray-700 leading-relaxed font-light">
                    <p>
                        Ayam Betutu merupakan hidangan khas Bali yang dikenal dengan bumbu rempah yang kaya dan cita rasa yang kuat. Ashraf Betutu menghadirkan warisan rasa tersebut dengan presentasi yang lebih modern tanpa mengurangi keaslian tradisi kuliner Pulau Dewata.
                    </p>
                    <p>
                        Setiap porsi diolah menggunakan teknik ungkep perlahan (slow-cooked) berpadu racikan <strong>Base Genep</strong>—paduan serai, kunyit, jahe, kencur, lengkuas, kemiri, serta rempah aromatik lainnya yang dibungkus rapat sebelum dipanggang perlahan hingga menghasilkan aroma wangi khas pelepah daun pisang.
                    </p>
                </div>

                <div class="pt-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-accent text-primary flex items-center justify-center shrink-0 mt-0.5">
                            ✓
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-gray-900">100% Halal & Higienis</h4>
                            <p class="text-xs text-gray-500">Bahan baku pilihan diproses secara bersih dan halal.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-accent text-primary flex items-center justify-center shrink-0 mt-0.5">
                            ✓
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-gray-900">Bumbu Meresap Sempurna</h4>
                            <p class="text-xs text-gray-500">Daging empuk beraroma wangi rempah autentik Bali.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Visual Card -->
            <div class="lg:col-span-5">
                <div class="bg-accent-dark text-white rounded-3xl p-8 border border-primary/30 shadow-xl relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-44 h-44 rounded-full bg-primary/10 blur-2xl"></div>
                    <h3 class="font-serif font-bold text-2xl text-primary mb-3">Ashraf Betutu</h3>
                    <p class="text-xs text-gray-300 leading-relaxed mb-6">
                        "Menghadirkan kenikmatan rempah Pulau Dewata langsung ke meja santap Anda dengan komitmen mutu dan rasa terbaik."
                    </p>
                    <div class="border-t border-gray-700 pt-4 flex items-center justify-between text-xs text-gray-400">
                        <span>Denpasar, Bali</span>
                        <span class="text-primary font-semibold">Est. 2026</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
