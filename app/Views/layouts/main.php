<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Ashraf Betutu - Otentik Kuliner Bali') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#D4AF37',
                            light: '#E6C65A',
                            dark: '#B08E22',
                        },
                        accent: {
                            DEFAULT: '#14532D',
                            light: '#1B6A3B',
                            dark: '#0E3A20',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .gold-gradient {
            background: linear-gradient(135deg, #D4AF37 0%, #F5DE88 50%, #B08E22 100%);
        }
        .text-gold-gradient {
            background: linear-gradient(135deg, #D4AF37 0%, #F5DE88 70%, #B08E22 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-[#FAF9F5] text-gray-800 font-sans flex flex-col min-h-screen selection:bg-primary selection:text-accent-dark">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-accent-dark/95 backdrop-blur-md border-b border-primary/20 transition-all duration-300 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand / Logo -->
                <a href="<?= base_url('/') ?>" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 rounded-full border-2 border-primary flex items-center justify-center bg-accent group-hover:scale-105 transition-transform duration-200">
                        <span class="text-primary font-serif font-bold text-xl">A</span>
                    </div>
                    <div>
                        <span class="text-xl sm:text-2xl font-serif font-bold tracking-wider text-white block leading-tight">
                            ASHRAF <span class="text-primary">BETUTU</span>
                        </span>
                        <span class="text-[10px] tracking-[0.25em] uppercase text-primary-light block font-semibold">
                            Authentic Balinese Taste
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="<?= base_url('/') ?>" class="text-sm font-medium transition-colors hover:text-primary <?= uri_string() === '' ? 'text-primary border-b-2 border-primary pb-1' : 'text-gray-200' ?>">
                        Home
                    </a>
                    <a href="<?= base_url('menu') ?>" class="text-sm font-medium transition-colors hover:text-primary <?= uri_string() === 'menu' ? 'text-primary border-b-2 border-primary pb-1' : 'text-gray-200' ?>">
                        Menu
                    </a>
                    <a href="<?= base_url('/#about') ?>" class="text-sm font-medium text-gray-200 hover:text-primary transition-colors">
                        Tentang Kami
                    </a>
                </nav>

                <!-- Action Button & Admin Link -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="<?= base_url('menu') ?>" class="inline-flex items-center px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider bg-primary text-accent-dark hover:bg-primary-light transition-all duration-200 shadow-md hover:shadow-primary/30 transform hover:-translate-y-0.5">
                        Pesan Sekarang
                    </a>
                    <a href="<?= base_url('admin') ?>" class="text-xs text-gray-400 hover:text-primary transition-colors py-1 px-2 rounded border border-gray-700/50 hover:border-primary/50" title="Admin Portal">
                        Portal Admin
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden items-center space-x-2">
                    <button id="mobileMenuBtn" type="button" class="p-2 rounded-lg text-gray-300 hover:text-white hover:bg-accent focus:outline-none" aria-label="Toggle navigation">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-accent-dark border-b border-primary/20 px-4 pt-3 pb-6 space-y-3">
            <a href="<?= base_url('/') ?>" class="block py-2 text-base font-medium text-gray-200 hover:text-primary">Home</a>
            <a href="<?= base_url('menu') ?>" class="block py-2 text-base font-medium text-gray-200 hover:text-primary">Menu</a>
            <a href="<?= base_url('/#about') ?>" class="block py-2 text-base font-medium text-gray-200 hover:text-primary">Tentang Kami</a>
            <div class="pt-2 flex flex-col gap-2">
                <a href="<?= base_url('menu') ?>" class="block text-center py-2.5 rounded-full text-xs font-bold uppercase tracking-wider bg-primary text-accent-dark">
                    Pesan Sekarang
                </a>
                <a href="<?= base_url('admin') ?>" class="block text-center py-2 text-xs text-gray-400 hover:text-primary">
                    Portal Admin
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- FOOTER -->
    <footer class="bg-accent-dark text-gray-300 border-t border-primary/20 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <!-- Brand Info -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full border-2 border-primary flex items-center justify-center bg-accent">
                            <span class="text-primary font-serif font-bold text-xl">A</span>
                        </div>
                        <span class="text-2xl font-serif font-bold tracking-wider text-white">
                            ASHRAF <span class="text-primary">BETUTU</span>
                        </span>
                    </div>
                    <p class="text-sm text-gray-300 max-w-md leading-relaxed">
                        Menyajikan kelezatan Ayam Betutu khas Bali dengan racikan 16 bumbu rempah pilihan *Base Genep* autentik, dimasak perlahan untuk pengalaman kuliner tradisional berbalut kemewahan modern.
                    </p>
                    <div class="flex items-center space-x-2 text-sm text-primary-light">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Denpasar, Bali, Indonesia</span>
                    </div>
                </div>

                <!-- Quick Navigation -->
                <div>
                    <h3 class="text-white font-semibold text-base mb-4 font-serif border-b border-primary/30 pb-2 inline-block">
                        Navigasi
                    </h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="<?= base_url('/') ?>" class="hover:text-primary transition-colors">Beranda</a></li>
                        <li><a href="<?= base_url('menu') ?>" class="hover:text-primary transition-colors">Daftar Menu</a></li>
                        <li><a href="<?= base_url('/#about') ?>" class="hover:text-primary transition-colors">Tentang Ashraf Betutu</a></li>
                        <li><a href="<?= base_url('admin/login') ?>" class="hover:text-primary transition-colors">Login Admin</a></li>
                    </ul>
                </div>

                <!-- Jam Operasional -->
                <div>
                    <h3 class="text-white font-semibold text-base mb-4 font-serif border-b border-primary/30 pb-2 inline-block">
                        Jam Buka
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex justify-between">
                            <span>Senin - Jumat:</span>
                            <span class="text-primary font-medium">10:00 - 22:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sabtu - Minggu:</span>
                            <span class="text-primary font-medium">09:00 - 23:00</span>
                        </li>
                        <li class="pt-2 text-xs text-gray-400">
                            *Menerima pesanan katering & paket nasi kotak
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-6 text-center text-xs text-gray-400 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p>&copy; 2026 Ashraf Betutu. Seluruh hak cipta dilindungi.</p>
                <p class="text-gray-500">Pemrograman Framework CodeIgniter 4 &bull; Rafie Ashraf</p>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
