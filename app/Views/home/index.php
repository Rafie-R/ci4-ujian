<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- 1. HERO SECTION ("FOOD FIRST", RESTAURANT EXPERIENCE) -->
<section class="relative bg-gradient-to-b from-[#0B331A] via-[#14532D] to-[#0B331A] text-white overflow-hidden py-16 lg:py-24 border-b border-primary/20">
    <!-- Atmospheric lighting & glow -->
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[650px] h-[550px] bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -top-24 right-10 w-96 h-96 bg-accent-light/30 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Editorial Text -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-dark/90 border border-primary/50 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-xs uppercase font-extrabold tracking-widest text-primary-light">KULINER KHAS BALI</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-black tracking-tight leading-[1.12]">
                    Rasa Betutu Khas Bali, Hadir di <span class="text-primary italic">Ashraf Betutu.</span>
                </h1>

                <!-- Subheading -->
                <p class="text-base sm:text-lg text-gray-200 max-w-2xl mx-auto lg:mx-0 font-light leading-relaxed">
                    Kelezatan ayam betutu otentik berbalut 16 rempah Base Genep tradisional Gilimanuk, diolah perlahan hingga meresap sempurna ke dalam serat daging dengan aroma daun pisang yang memikat.
                </p>

                <!-- 2 CTAs -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="<?= base_url('menu') ?>" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-primary hover:bg-primary-light text-accent-dark font-extrabold text-sm uppercase tracking-wider shadow-lg hover:shadow-primary/30 transition-all duration-200 transform hover:-translate-y-0.5">
                        Jelajahi Menu
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#about" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-white/10 hover:bg-white/20 text-white font-semibold text-sm border border-white/20 hover:border-primary transition-all duration-200">
                        Kenali Ashraf Betutu
                    </a>
                </div>

                <!-- Key Metrics & Quality Indicators -->
                <div class="pt-8 border-t border-white/10 grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
                    <div>
                        <span class="block text-2xl sm:text-3xl font-serif font-bold text-primary">16</span>
                        <span class="text-xs text-gray-300 font-light">Rempah Base Genep</span>
                    </div>
                    <div>
                        <span class="block text-2xl sm:text-3xl font-serif font-bold text-primary">8 Jam</span>
                        <span class="text-xs text-gray-300 font-light">Slow-Cooked Tradisional</span>
                    </div>
                    <div>
                        <span class="block text-2xl sm:text-3xl font-serif font-bold text-primary">100%</span>
                        <span class="text-xs text-gray-300 font-light">Ayam Segar & Halal</span>
                    </div>
                </div>
            </div>

            <!-- Right Food First Hero Visual -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-lg">
                    <!-- Visual Outer Frame with Gold Accent -->
                    <div class="relative rounded-3xl p-1 bg-gradient-to-tr from-primary via-accent-light to-primary shadow-2xl overflow-hidden">
                        <div class="bg-accent-dark rounded-[22px] p-6 text-center relative overflow-hidden">
                            
                            <!-- Large Circular Food Showcase -->
                            <div class="w-56 h-56 sm:w-72 sm:h-72 mx-auto rounded-full bg-gradient-to-tr from-accent to-accent-light border-4 border-primary/70 overflow-hidden shadow-2xl relative group">
                                <img src="<?= menu_image_url('ayam-betutu-original.jpg') ?>" 
                                     alt="Ashraf Betutu Original Special" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            </div>

                            <!-- Showcase Caption Box -->
                            <div class="mt-6 bg-accent/80 backdrop-blur rounded-xl p-4 border border-primary/30 text-left flex items-center justify-between">
                                <div>
                                    <span class="text-[10px] uppercase font-bold tracking-widest text-primary-light">Signature Recipe</span>
                                    <h4 class="text-sm font-bold text-white font-serif">Ayam Betutu Original Gilimanuk</h4>
                                </div>
                                <span class="text-xs font-serif font-bold text-primary bg-accent-dark px-3 py-1.5 rounded-full border border-primary/30">
                                    Rp 65.000
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. BRAND INTRODUCTION SECTION ("Rasa Bali dalam Setiap Sajian") -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column: Editorial Text -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
                    <span class="text-xs uppercase font-extrabold tracking-widest text-primary-dark">TENTANG KAMI</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-accent-dark leading-tight">
                    Rasa Bali dalam Setiap Sajian.
                </h2>
                <div class="w-20 h-1 bg-primary rounded-full"></div>

                <div class="space-y-4 text-base text-gray-700 leading-relaxed font-light">
                    <p>
                        <strong>Ashraf Betutu</strong> lahir dari kecintaan mendalam terhadap kekayaan kuliner tradisional Pulau Dewata. Kami mengkhususkan diri menyajikan Ayam Betutu dengan formula warisan asli Gilimanuk—menggabungkan kelembutan tekstur daging ayam segar dengan kedalaman cita rasa bumbu <em>Base Genep</em> yang legendaris.
                    </p>
                    <p>
                        Setiap porsi dipersiapkan melalui proses memasak perlahan selama 8 jam dalam balutan daun pisang alami, mengunci sari pati rempah seperti kunyit, kencur, jahe, serai, dan terasi bakar. Hasilnya adalah hidangan dengan aroma semerbak, daging empuk yang mudah terlepas dari tulang, dan rasa gurih pedas rempah yang otentik.
                    </p>
                </div>

                <!-- Three Key Pillars -->
                <div class="pt-4 grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="p-4 rounded-xl bg-offwhite border border-gray-200">
                        <span class="text-primary font-bold text-lg block mb-1">01</span>
                        <h4 class="font-bold text-sm text-accent-dark">Bahan Segar</h4>
                        <p class="text-xs text-gray-500 mt-1">Ayam pilihan yang higienis setiap hari.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-offwhite border border-gray-200">
                        <span class="text-primary font-bold text-lg block mb-1">02</span>
                        <h4 class="font-bold text-sm text-accent-dark">Base Genep Asli</h4>
                        <p class="text-xs text-gray-500 mt-1">16 rempah alami tanpa penyedap buatan berlebih.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-offwhite border border-gray-200">
                        <span class="text-primary font-bold text-lg block mb-1">03</span>
                        <h4 class="font-bold text-sm text-accent-dark">Tradisi Bali</h4>
                        <p class="text-xs text-gray-500 mt-1">Teknik ungkep dan panggang daun pisang.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Food Photography Visual -->
            <div class="lg:col-span-5">
                <div class="relative group">
                    <!-- Decorative back frame -->
                    <div class="absolute -inset-3 bg-gradient-to-tr from-primary/30 to-accent/20 rounded-3xl transform rotate-2 group-hover:rotate-0 transition-transform duration-500"></div>
                    
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-2 border-primary/40 bg-accent-dark">
                        <img src="<?= menu_image_url('ayam-betutu-paket-nasi.jpg') ?>" 
                             alt="Paket Nasi Ayam Betutu Ashraf" 
                             class="w-full h-[400px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-accent-dark via-accent-dark/80 to-transparent p-6 text-white">
                            <span class="text-xs uppercase font-bold text-primary tracking-widest">Sajian Komplit</span>
                            <h4 class="text-lg font-serif font-bold text-white mt-1">Paket Nasi Betutu Tradisional</h4>
                            <p class="text-xs text-gray-300 mt-1">Dilengkapi plecing kangkung segar, sambal matah, dan kacang goreng renyah.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. MENU SECTION ("Menu Favorit Kami") -->
<section class="py-20 bg-[#FAF9F5] border-t border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-extrabold uppercase tracking-widest text-primary-dark">PILIHAN TERBAIK</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-accent-dark mt-2">
                Menu Favorit Kami
            </h2>
            <div class="w-16 h-1 bg-primary mx-auto my-4 rounded-full"></div>
            <p class="text-sm sm:text-base text-gray-600 font-light">
                Setiap menu disajikan dengan racikan bumbu khas Bali otentik dan bahan berkualitas untuk memberikan pengalaman kuliner terbaik bagi Anda.
            </p>
        </div>

        <!-- Menu Cards Grid (Database Driven) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (! empty($featuredMenus)) : ?>
                <?php foreach ($featuredMenus as $menu) : ?>
                    <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
                        
                        <!-- Food Photo Container (1-to-1 unique image) -->
                        <a href="<?= base_url('menu/' . $menu['slug']) ?>" class="block h-52 bg-gradient-to-tr from-accent to-accent-light relative overflow-hidden">
                            <img src="<?= menu_image_url($menu['image']) ?>" 
                                 alt="<?= esc($menu['name']) ?>" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                            <!-- Category Badge -->
                            <div class="absolute top-3 left-3">
                                <span class="px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-accent-dark/90 text-primary-light border border-primary/30 shadow">
                                    <?= esc($menu['category']) ?>
                                </span>
                            </div>

                            <!-- Availability Badge -->
                            <div class="absolute top-3 right-3">
                                <?php if ($menu['is_available']) : ?>
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-semibold bg-green-900/90 text-green-300 backdrop-blur border border-green-500/30">
                                        Tersedia
                                    </span>
                                <?php else : ?>
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-semibold bg-red-900/90 text-red-300 backdrop-blur border border-red-500/30">
                                        Habis
                                    </span>
                                <?php endif; ?>
                            </div>
                        </a>

                        <!-- Card Body -->
                        <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <a href="<?= base_url('menu/' . $menu['slug']) ?>" class="block">
                                    <h3 class="font-serif font-bold text-xl text-gray-900 group-hover:text-accent transition-colors leading-snug">
                                        <?= esc($menu['name']) ?>
                                    </h3>
                                </a>
                                <p class="text-xs text-gray-500 mt-2.5 line-clamp-2 leading-relaxed">
                                    <?= esc($menu['description'] ?: 'Hidangan ayam betutu khas Bali kaya racikan rempah pilihan.') ?>
                                </p>
                            </div>

                            <!-- Card Price & Action Button -->
                            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                                <div>
                                    <span class="block text-[10px] uppercase font-bold text-gray-400">Harga</span>
                                    <span class="font-serif font-extrabold text-xl text-accent-dark">
                                        Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                                    </span>
                                </div>
                                <a href="<?= base_url('menu/' . $menu['slug']) ?>" 
                                   class="px-4 py-2 rounded-lg bg-primary hover:bg-primary-light text-accent-dark font-bold text-xs uppercase tracking-wider transition-all shadow-sm transform hover:-translate-y-0.5">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- View All Menus Button -->
        <div class="mt-14 text-center">
            <a href="<?= base_url('menu') ?>" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-accent hover:bg-accent-light text-white font-extrabold text-xs uppercase tracking-widest shadow-md hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5">
                Lihat Semua Menu (<?= esc($totalMenuCount ?? 8) ?>)
                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

    </div>
</section>

<!-- 4. SIGNATURE FEATURE SECTION (Full Highlight Signature Ayam Betutu) -->
<section class="py-20 bg-accent text-white relative overflow-hidden border-t-4 border-primary">
    <!-- Background pattern accents -->
    <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-primary/10 blur-3xl pointer-events-none"></div>
    <div class="absolute -left-20 -top-20 w-96 h-96 bg-accent-dark/40 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Large Visual of Signature Betutu -->
            <div class="lg:col-span-6">
                <div class="relative max-w-md mx-auto lg:max-w-none">
                    <div class="relative rounded-3xl p-1.5 bg-gradient-to-tr from-primary via-primary-light to-primary shadow-2xl overflow-hidden">
                        <div class="rounded-[22px] overflow-hidden bg-accent-dark">
                            <img src="<?= menu_image_url($signatureMenu['image'] ?? 'ayam-betutu-original.jpg') ?>" 
                                 alt="Signature Ayam Betutu Original" 
                                 class="w-full h-80 sm:h-96 object-cover hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                    <!-- Accent floating pill -->
                    <div class="absolute -bottom-4 -right-4 bg-primary text-accent-dark px-5 py-2.5 rounded-full font-serif font-extrabold text-sm shadow-xl border-2 border-white">
                        Masterpiece Recipe
                    </div>
                </div>
            </div>

            <!-- Right: Signature Details -->
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-accent-dark border border-primary/40">
                    <span class="w-2 h-2 rounded-full bg-primary"></span>
                    <span class="text-xs uppercase font-extrabold tracking-widest text-primary-light">SIGNATURE DISH</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-white leading-tight">
                    <?= esc($signatureMenu['name'] ?? 'Ayam Betutu Original') ?>
                </h2>

                <p class="text-base text-gray-200 font-light leading-relaxed">
                    <?= esc($signatureMenu['description'] ?? 'Hidangan ayam betutu khas Bali dengan racikan 16 bumbu rempah tradisional Base Genep yang dimasak secara perlahan hingga bumbu meresap sempurna ke dalam serat daging.') ?>
                </p>

                <!-- 4 Specific Distinctions -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="flex items-start gap-3 bg-accent-dark/60 p-3.5 rounded-xl border border-primary/20">
                        <span class="text-primary font-bold text-lg">✦</span>
                        <div>
                            <h4 class="font-bold text-sm text-white">16 Rempah Tradisional</h4>
                            <p class="text-xs text-gray-300">Base Genep lengkap tumbuk asli.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-accent-dark/60 p-3.5 rounded-xl border border-primary/20">
                        <span class="text-primary font-bold text-lg">✦</span>
                        <div>
                            <h4 class="font-bold text-sm text-white">Slow-Cooked 8 Jam</h4>
                            <p class="text-xs text-gray-300">Daging empuk meresap sampai tulang.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-accent-dark/60 p-3.5 rounded-xl border border-primary/20">
                        <span class="text-primary font-bold text-lg">✦</span>
                        <div>
                            <h4 class="font-bold text-sm text-white">Aroma Daun Pisang</h4>
                            <p class="text-xs text-gray-300">Dibungkus rapat secara tradisional.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-accent-dark/60 p-3.5 rounded-xl border border-primary/20">
                        <span class="text-primary font-bold text-lg">✦</span>
                        <div>
                            <h4 class="font-bold text-sm text-white">Autentik Gilimanuk</h4>
                            <p class="text-xs text-gray-300">Cita rasa gurih pedas khas Dewata.</p>
                        </div>
                    </div>
                </div>

                <!-- Price and Link to Detail -->
                <div class="pt-6 border-t border-accent-light flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <span class="text-xs text-gray-300 uppercase font-semibold">Harga Signature:</span>
                        <div class="font-serif font-extrabold text-3xl text-primary">
                            Rp <?= number_format($signatureMenu['price'] ?? 65000, 0, ',', '.') ?>
                        </div>
                    </div>
                    <a href="<?= base_url('menu/' . ($signatureMenu['slug'] ?? 'ayam-betutu-original')) ?>" 
                       class="inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-primary hover:bg-primary-light text-accent-dark font-extrabold text-xs uppercase tracking-wider transition-all shadow-lg transform hover:-translate-y-0.5">
                        Lihat Detail Menu
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- 5. WHY ASHRAF BETUTU SECTION (Editorial 4 Value Propositions) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs font-extrabold uppercase tracking-widest text-primary-dark">KEUNGGULAN KAMI</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-accent-dark mt-2">
                Mengapa Ashraf Betutu?
            </h2>
            <div class="w-16 h-1 bg-primary mx-auto my-4 rounded-full"></div>
            <p class="text-sm text-gray-600 font-light">
                Dedikasi kami menjaga standar keaslian rasa dan mutu kuliner tradisional Bali di setiap hidangan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- 01 -->
            <div class="p-8 rounded-2xl bg-offwhite border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div>
                    <span class="font-serif font-black text-4xl text-primary block mb-4">01</span>
                    <h3 class="font-serif font-bold text-xl text-accent-dark mb-3">Resep Tradisional Asli</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-light">
                        Warisan bumbu otentik Gilimanuk Bali yang dijaga keasliannya turun-temurun tanpa modifikasi instan.
                    </p>
                </div>
                <div class="pt-6 border-t border-gray-200/60 mt-6">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-accent">Autentisitas Terjaga</span>
                </div>
            </div>

            <!-- 02 -->
            <div class="p-8 rounded-2xl bg-offwhite border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div>
                    <span class="font-serif font-black text-4xl text-primary block mb-4">02</span>
                    <h3 class="font-serif font-bold text-xl text-accent-dark mb-3">Bumbu Rempah Pilihan</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-light">
                        Perpaduan 16 rempah Base Genep segar berkualitas tinggi yang ditumbuk secara tradisional untuk aroma maksimal.
                    </p>
                </div>
                <div class="pt-6 border-t border-gray-200/60 mt-6">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-accent">16 Rempah Asli</span>
                </div>
            </div>

            <!-- 03 -->
            <div class="p-8 rounded-2xl bg-offwhite border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div>
                    <span class="font-serif font-black text-4xl text-primary block mb-4">03</span>
                    <h3 class="font-serif font-bold text-xl text-accent-dark mb-3">Proses Masak Otentik</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-light">
                        Teknik slow-cooked selama 8 jam dalam balutan daun pisang untuk keempukan daging dan aroma khas.
                    </p>
                </div>
                <div class="pt-6 border-t border-gray-200/60 mt-6">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-accent">Slow-Cook 8 Jam</span>
                </div>
            </div>

            <!-- 04 -->
            <div class="p-8 rounded-2xl bg-offwhite border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div>
                    <span class="font-serif font-black text-4xl text-primary block mb-4">04</span>
                    <h3 class="font-serif font-bold text-xl text-accent-dark mb-3">Kualitas & Kesegaran Terjamin</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-light">
                        Menggunakan 100% ayam pilihan segar setiap hari dengan standar higienis dan halal terbaik.
                    </p>
                </div>
                <div class="pt-6 border-t border-gray-200/60 mt-6">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-accent">100% Halal & Segar</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 6. BALI STORY SECTION ("Warisan Rasa dari Bali") -->
<section id="about" class="py-20 bg-[#FAF7F0] border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Narrative -->
            <div class="lg:col-span-7 space-y-6">
                <span class="text-xs font-extrabold uppercase tracking-widest text-primary-dark">FILOSOFI KULINER</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-accent-dark leading-tight">
                    Warisan Rasa dari Bali
                </h2>
                <div class="w-16 h-1 bg-primary rounded-full"></div>

                <div class="space-y-4 text-base text-gray-700 leading-relaxed font-light">
                    <p>
                        Ayam Betutu bukan sekadar hidangan makanan biasa—ia adalah bagian dari upacara adat, kehangatan kekeluargaan, dan sejarah panjang peradaban kuliner Pulau Bali. Di masa lampau, hidangan ini dipersembahkan pada perayaan istimewa karena proses memasaknya yang menuntut kesabaran, ketelitian, dan keahlian tinggi.
                    </p>
                    <p>
                        Di <strong>Ashraf Betutu</strong>, kami memegang teguh warisan rasa tersebut. Dari pemilihan kemiri, kencur, jahe, hingga teknik pembungkusan pelepah daun pisang, semuanya dikerjakan dengan penuh dedikasi agar setiap pengunjung dapat merasakan keajaiban cita rasa Pulau Dewata tanpa kompromi.
                    </p>
                </div>

                <div class="pt-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-accent text-primary flex items-center justify-center shrink-0 mt-0.5 font-bold">
                            ✓
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-gray-900">Bumbu Base Genep Murni</h4>
                            <p class="text-xs text-gray-500">Diracik segar tanpa bahan pengawet.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-accent text-primary flex items-center justify-center shrink-0 mt-0.5 font-bold">
                            ✓
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-gray-900">Sambal Tradisional Segar</h4>
                            <p class="text-xs text-gray-500">Sambal matah dan terasi khas Bali buatan sendiri.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Visual Story Card -->
            <div class="lg:col-span-5">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl border-2 border-primary/30 bg-accent-dark">
                        <img src="<?= menu_image_url('ayam-betutu-premium.jpg') ?>" 
                             alt="Warisan Rasa Bali Ashraf Betutu" 
                             class="w-full h-80 sm:h-96 object-cover">
                        <div class="p-6 bg-accent-dark text-white border-t border-primary/20">
                            <h3 class="font-serif font-bold text-xl text-primary mb-2">Ashraf Betutu</h3>
                            <p class="text-xs text-gray-300 leading-relaxed font-light">
                                "Menghadirkan kelezatan rempah Pulau Dewata langsung ke meja santap Anda dengan komitmen mutu dan rasa terbaik."
                            </p>
                            <div class="border-t border-white/10 mt-4 pt-3 flex items-center justify-between text-xs text-gray-400">
                                <span>Denpasar, Bali</span>
                                <span class="text-primary font-semibold">Est. 2026</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 7. LARGE CTA SECTION ("Sudah Siap Mencoba Rasa Khas Bali?") -->
<section class="py-20 bg-gradient-to-r from-accent-dark via-accent to-accent-dark text-white text-center relative overflow-hidden border-t-2 border-primary/30">
    <div class="absolute inset-0 bg-primary/5 blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
        <span class="inline-block px-4 py-1.5 rounded-full bg-accent-dark text-primary-light text-xs font-extrabold uppercase tracking-widest border border-primary/40">
            PENGALAMAN KULINER BALI
        </span>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-black tracking-tight leading-tight">
            Sudah Siap Mencoba Rasa Khas Bali?
        </h2>

        <p class="text-base sm:text-lg text-gray-200 max-w-2xl mx-auto font-light leading-relaxed">
            Kunjungi restoran kami di Denpasar atau pesan secara online hidangan Ayam Betutu istimewa hari ini. Nikmati kelezatan rempah Pulau Dewata di setiap gigitan.
        </p>

        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?= base_url('menu') ?>" class="w-full sm:w-auto inline-flex items-center justify-center px-10 py-4 rounded-full bg-primary hover:bg-primary-light text-accent-dark font-extrabold text-sm uppercase tracking-widest shadow-2xl hover:shadow-primary/40 transition-all duration-200 transform hover:-translate-y-0.5">
                Lihat Menu
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="https://wa.me/6281234567890?text=Halo%20Ashraf%20Betutu,%20saya%20ingin%20memesan%20Ayam%20Betutu" 
               target="_blank"
               class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-full bg-white/10 hover:bg-white/20 text-white font-bold text-sm tracking-wider border border-white/20 hover:border-primary transition-all duration-200">
                Pesan via WhatsApp
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
