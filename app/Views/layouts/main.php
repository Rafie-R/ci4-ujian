<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Ashraf Betutu - Otentik Kuliner Bali') ?></title>
    
    <!-- Google Fonts: Playfair Display & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;0,900;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#D4AF37',
                            light: '#E6C65A',
                            dark: '#B39124',
                        },
                        accent: {
                            DEFAULT: '#14532D',
                            light: '#1B6A3B',
                            dark: '#0B331A',
                        },
                        darkcharcoal: '#1A1A1A',
                        offwhite: '#FDFBF7'
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
        .font-editorial {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-offwhite text-darkcharcoal font-sans antialiased flex flex-col min-h-screen selection:bg-primary selection:text-accent-dark">

    <!-- RESTAURANT NAVBAR -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-200 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Logo -->
                <a href="<?= base_url('/') ?>" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center text-primary font-editorial font-bold text-xl border border-primary shadow-sm group-hover:scale-105 transition-transform">
                        A
                    </div>
                    <div>
                        <span class="text-xl sm:text-2xl font-editorial font-extrabold tracking-wider text-accent-dark block leading-none">
                            ASHRAF <span class="text-primary">BETUTU</span>
                        </span>
                        <span class="text-[10px] tracking-[0.25em] uppercase text-gray-500 font-semibold block mt-1">
                            Balinese Culinary
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="<?= base_url('/') ?>" class="text-sm font-semibold tracking-wide transition-colors hover:text-primary <?= uri_string() === '' ? 'text-accent border-b-2 border-primary pb-1' : 'text-gray-700' ?>">
                        Home
                    </a>
                    <a href="<?= base_url('menu') ?>" class="text-sm font-semibold tracking-wide transition-colors hover:text-primary <?= str_starts_with(uri_string(), 'menu') ? 'text-accent border-b-2 border-primary pb-1' : 'text-gray-700' ?>">
                        Menu
                    </a>
                    <a href="<?= base_url('/#about') ?>" class="text-sm font-semibold tracking-wide text-gray-700 hover:text-primary transition-colors">
                        Tentang Kami
                    </a>
                </nav>

                <!-- Action CTA -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="<?= base_url('menu') ?>" class="inline-flex items-center px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider bg-accent text-white hover:bg-accent-light transition-all shadow-md">
                        Lihat Menu
                    </a>
                    <a href="<?= base_url('admin') ?>" class="text-xs text-gray-400 hover:text-accent font-medium py-1 px-2.5 rounded border border-gray-200 hover:border-gray-400 transition-colors" title="Portal Admin">
                        Admin
                    </a>
                </div>

                <!-- Mobile Menu Toggle Button -->
                <div class="flex md:hidden items-center space-x-2">
                    <button id="mobileNavToggle" type="button" class="p-2 rounded-lg text-gray-700 hover:text-accent hover:bg-gray-100 focus:outline-none" aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobileDrawer" class="hidden md:hidden bg-white border-b border-gray-200 px-6 py-5 space-y-4 shadow-lg">
            <a href="<?= base_url('/') ?>" class="block text-base font-bold text-gray-800 hover:text-accent">Home</a>
            <a href="<?= base_url('menu') ?>" class="block text-base font-bold text-gray-800 hover:text-accent">Menu</a>
            <a href="<?= base_url('/#about') ?>" class="block text-base font-bold text-gray-800 hover:text-accent">Tentang Kami</a>
            <div class="pt-3 border-t border-gray-100 flex flex-col gap-2">
                <a href="<?= base_url('menu') ?>" class="text-center py-3 rounded-full text-xs font-bold uppercase tracking-wider bg-accent text-white shadow">
                    Lihat Menu
                </a>
                <a href="<?= base_url('admin') ?>" class="text-center py-2 text-xs text-gray-500 hover:text-accent">
                    Portal Admin
                </a>
            </div>
        </div>
    </header>

    <!-- CONTENT BODY -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- RESTAURANT FOOTER -->
    <footer class="bg-accent-dark text-white pt-16 pb-10 border-t-4 border-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-gray-800">
                
                <!-- Brand Info -->
                <div class="md:col-span-5 space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center text-primary font-editorial font-bold text-xl border border-primary">
                            A
                        </div>
                        <span class="text-2xl font-editorial font-bold tracking-wider text-white">
                            ASHRAF <span class="text-primary">BETUTU</span>
                        </span>
                    </div>
                    <p class="text-sm text-gray-300 max-w-sm leading-relaxed font-light">
                        "Rasa Khas Bali dalam Setiap Sajian." Menghadirkan olahan Ayam Betutu otentik dengan racikan 16 rempah tradisional Base Genep pilihan untuk kepuasan cita rasa kuliner Nusantara.
                    </p>
                    <div class="text-xs text-primary-light flex items-center gap-1.5 pt-1">
                        <svg class="w-4 h-4 text-primary shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        <span>Denpasar, Bali &bull; Indonesia</span>
                    </div>
                </div>

                <!-- Navigasi -->
                <div class="md:col-span-2 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-primary">NAVIGASI</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="<?= base_url('/') ?>" class="hover:text-primary transition-colors">Home</a></li>
                        <li><a href="<?= base_url('menu') ?>" class="hover:text-primary transition-colors">Menu</a></li>
                        <li><a href="<?= base_url('/#about') ?>" class="hover:text-primary transition-colors">Tentang Kami</a></li>
                    </ul>
                </div>

                <!-- Menu Categories -->
                <div class="md:col-span-2 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-primary">MENU</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="<?= base_url('menu?category=Ayam+Betutu') ?>" class="hover:text-primary transition-colors">Ayam Betutu</a></li>
                        <li><a href="<?= base_url('menu?category=Paket') ?>" class="hover:text-primary transition-colors">Paket</a></li>
                        <li><a href="<?= base_url('menu/ayam-betutu-original') ?>" class="hover:text-primary transition-colors">Signature</a></li>
                    </ul>
                </div>

                <!-- Informasi -->
                <div class="md:col-span-3 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-primary">INFORMASI</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="<?= base_url('/#about') ?>" class="hover:text-primary transition-colors">Tentang Kami</a></li>
                        <li><span class="text-gray-400">WhatsApp: +62 812-3456-7890</span></li>
                        <li><span class="text-gray-400">Buka Setiap Hari: 10:00 - 22:00</span></li>
                        <li class="pt-2"><a href="<?= base_url('admin') ?>" class="text-xs text-gray-400 hover:text-primary">&rarr; Portal Login Admin</a></li>
                    </ul>
                </div>

            </div>

            <!-- Copyright Notice -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-400 gap-4">
                <p>&copy; 2026 Ashraf Betutu. Seluruh hak cipta dilindungi.</p>
                <p class="text-gray-400">Pemrograman Framework CodeIgniter 4 &bull; Rafie Ashraf</p>
            </div>
        </div>
    </footer>

    <script>
        const navBtn = document.getElementById('mobileNavToggle');
        const navDrawer = document.getElementById('mobileDrawer');
        if (navBtn && navDrawer) {
            navBtn.addEventListener('click', () => {
                navDrawer.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
