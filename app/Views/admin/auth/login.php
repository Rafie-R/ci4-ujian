<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Ashraf Betutu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    
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
<body class="bg-accent-dark min-h-screen flex items-center justify-center p-4 font-sans relative overflow-hidden">

    <!-- Decorative background elements -->
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-accent/40 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-primary/10 blur-3xl pointer-events-none"></div>

    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl overflow-hidden border border-primary/30 relative z-10">
        <!-- Header -->
        <div class="bg-gradient-to-r from-accent-dark to-accent p-8 text-center text-white border-b-2 border-primary">
            <div class="w-14 h-14 mx-auto rounded-full border-2 border-primary flex items-center justify-center bg-accent-dark shadow-md mb-3">
                <span class="text-primary font-serif font-bold text-2xl">A</span>
            </div>
            <h1 class="text-2xl font-serif font-bold tracking-wide">
                ASHRAF <span class="text-primary">BETUTU</span>
            </h1>
            <p class="text-xs tracking-widest uppercase text-gray-300 mt-1">Portal Administrasi Restoran</p>
        </div>

        <!-- Form Card -->
        <div class="p-8">
            <h2 class="text-lg font-bold text-gray-800 mb-2">Masuk ke Akun Anda</h2>
            <p class="text-xs text-gray-500 mb-6">Gunakan kredensial admin Anda untuk mengelola menu kuliner.</p>

            <!-- Error Alerts -->
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="mb-5 p-3 rounded-lg bg-red-50 border border-red-200 text-red-700 text-xs flex items-center gap-2">
                    <svg class="w-4 h-4 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    <span><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="mb-5 p-3 rounded-lg bg-green-50 border border-green-200 text-green-700 text-xs flex items-center gap-2">
                    <svg class="w-4 h-4 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span><?= session()->getFlashdata('success') ?></span>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/login') ?>" method="POST" class="space-y-5">
                <?= csrf_field() ?>

                <div>
                    <label for="username" class="block text-xs font-semibold text-gray-700 mb-1 uppercase tracking-wider">Username</label>
                    <div class="relative">
                        <input type="text" id="username" name="username" value="<?= old('username', 'admin') ?>" required autofocus
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none"
                               placeholder="Masukkan username">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-xs font-semibold text-gray-700 mb-1 uppercase tracking-wider">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none"
                               placeholder="••••••••">
                    </div>
                    <p class="text-[11px] text-gray-400 mt-1">Default kredensial: <span class="font-mono text-gray-600">admin / admin123</span></p>
                </div>

                <button type="submit" class="w-full py-3 px-4 rounded-lg bg-primary hover:bg-primary-light text-accent-dark font-bold text-sm uppercase tracking-wider transition-all duration-200 shadow-md hover:shadow-lg transform active:scale-95">
                    Masuk ke Dashboard
                </button>
            </form>

            <div class="mt-6 text-center border-t border-gray-100 pt-4">
                <a href="<?= base_url('/') ?>" class="text-xs text-gray-500 hover:text-accent-light font-medium inline-flex items-center gap-1 transition-colors">
                    &larr; Kembali ke Halaman Utama
                </a>
            </div>
        </div>
    </div>

</body>
</html>
