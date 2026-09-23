<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Admin Portal - Ashraf Betutu') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    
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
</head>
<body class="bg-gray-100 text-gray-800 font-sans min-h-screen flex flex-col">

    <!-- Top Admin Header -->
    <header class="bg-accent-dark text-white border-b-2 border-primary sticky top-0 z-40 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Brand -->
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full border border-primary flex items-center justify-center bg-accent">
                        <span class="text-primary font-serif font-bold text-lg">A</span>
                    </div>
                    <div>
                        <a href="<?= base_url('admin') ?>" class="text-lg font-serif font-bold tracking-wider text-white flex items-center gap-2">
                            ASHRAF <span class="text-primary">BETUTU</span>
                            <span class="text-[10px] uppercase font-sans font-semibold tracking-wider bg-primary/20 text-primary px-2 py-0.5 rounded border border-primary/30">Admin</span>
                        </a>
                    </div>
                </div>

                <!-- Admin Navigation -->
                <nav class="hidden md:flex items-center space-x-2">
                    <a href="<?= base_url('admin') ?>" class="px-3 py-1.5 rounded-md text-sm font-medium transition-colors <?= uri_string() === 'admin' || uri_string() === 'admin/dashboard' ? 'bg-accent text-primary font-semibold' : 'text-gray-300 hover:text-white hover:bg-accent/60' ?>">
                        Dashboard
                    </a>
                    <a href="<?= base_url('admin/menu') ?>" class="px-3 py-1.5 rounded-md text-sm font-medium transition-colors <?= str_starts_with(uri_string(), 'admin/menu') ? 'bg-accent text-primary font-semibold' : 'text-gray-300 hover:text-white hover:bg-accent/60' ?>">
                        Kelola Menu
                    </a>
                </nav>

                <!-- User profile & Logout -->
                <div class="flex items-center space-x-4">
                    <a href="<?= base_url('/') ?>" target="_blank" class="hidden sm:inline-flex items-center text-xs text-gray-300 hover:text-primary transition-colors gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Web
                    </a>
                    <div class="flex items-center space-x-2 border-l border-gray-700 pl-4">
                        <div class="text-right hidden sm:block">
                            <span class="block text-xs font-semibold text-white"><?= esc(session('admin_username') ?? 'Admin') ?></span>
                            <span class="block text-[10px] text-gray-400">Administrator</span>
                        </div>
                        <a href="<?= base_url('admin/logout') ?>" onclick="return confirm('Apakah Anda yakin ingin logout?');" class="px-3 py-1.5 bg-red-600/80 hover:bg-red-600 text-white rounded text-xs font-medium transition-colors shadow">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sub Navigation for Mobile -->
    <div class="md:hidden bg-accent text-white px-4 py-2 border-b border-primary/20 flex justify-around text-xs font-medium">
        <a href="<?= base_url('admin') ?>" class="py-1 px-3 rounded <?= uri_string() === 'admin' ? 'bg-accent-dark text-primary' : 'text-gray-300' ?>">Dashboard</a>
        <a href="<?= base_url('admin/menu') ?>" class="py-1 px-3 rounded <?= str_starts_with(uri_string(), 'admin/menu') ? 'bg-accent-dark text-primary' : 'text-gray-300' ?>">Kelola Menu</a>
        <a href="<?= base_url('/') ?>" target="_blank" class="py-1 px-3 text-gray-300">Lihat Web</a>
    </div>

    <!-- Main Container -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Flash Alert Messages -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="mb-6 p-4 rounded-lg bg-green-50 border-l-4 border-green-600 text-green-800 text-sm flex items-center justify-between shadow-sm" role="alert">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span><?= session()->getFlashdata('success') ?></span>
                </div>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="mb-6 p-4 rounded-lg bg-red-50 border-l-4 border-red-600 text-red-800 text-sm flex items-center justify-between shadow-sm" role="alert">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-red-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    <span><?= session()->getFlashdata('error') ?></span>
                </div>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="mb-6 p-4 rounded-lg bg-red-50 border-l-4 border-red-600 text-red-800 text-sm shadow-sm" role="alert">
                <p class="font-bold mb-1">Terjadi kesalahan input:</p>
                <ul class="list-disc list-inside space-y-1">
                    <?php foreach (session()->getFlashdata('errors') as $err) : ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?= $this->renderSection('content') ?>
    </main>

    <!-- Admin Footer -->
    <footer class="bg-white border-t border-gray-200 py-4 text-center text-xs text-gray-500">
        &copy; 2026 Ashraf Betutu &bull; Panel Administrasi Menu &bull; Student: Rafie Ashraf
    </footer>

</body>
</html>
