<?php
// 1. Jalankan session untuk mengecek apakah user sudah login
session_start();

// 2. Proteksi Halaman: Jika user belum login, tendang kembali ke halaman login
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit;
}

// 3. Set Zona Waktu (WIB) untuk menampilkan waktu login
date_default_timezone_set('Asia/Jakarta');
$waktu_login = date('H:i:s') . ' WIB';
$tanggal_login = date('d F Y');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Manajemen Blog (CMS)</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 font-sans min-h-screen flex flex-col">

    <header class="bg-white border-b border-slate-200 h-16 flex items-center justify-between px-6 sticky top-0 z-50 shadow-sm">
        <div class="flex items-center gap-3">
            <span class="p-2 bg-emerald-50 rounded-lg text-emerald-600 font-bold">📝</span>
            <div>
                <h1 class="text-md font-bold text-slate-800 tracking-tight">SISTEM MANAJEMEN BLOG (CMS)</h1>
                <p class="text-xs text-emerald-600 font-medium">Blog Keren</p>
            </div>
        </div>
        
        <div class="flex items-center gap-3">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-bold text-slate-700"><?= $_SESSION['nama']; ?></p>
                <p class="text-[11px] text-slate-400">User: @<?= $_SESSION['user_name']; ?></p>
            </div>
            <div class="w-9 h-9 rounded-full bg-emerald-500 text-white font-bold flex items-center justify-center shadow-sm">
                <?= strtoupper(substr($_SESSION['user_name'], 0, 2)); ?>
            </div>
        </div>
    </header>

    <div class="flex flex-1">
        
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between hidden md:flex border-r border-slate-800">
            <div class="p-4 space-y-6">
                <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider px-2">
                    Menu Utama
                </div>
                <nav class="space-y-1">
                    <a href="dashboard.php" class="flex items-center gap-3 bg-emerald-600 text-white font-medium px-4 py-3 rounded-lg transition-colors">
                        <span>📊</span> Dashboard Utama
                    </a>
                    <a href="#" class="flex items-center gap-3 hover:bg-slate-800 hover:text-white px-4 py-3 rounded-lg transition-colors">
                        <span>👤</span> Kelola Penulis
                    </a>
                    <a href="#" class="flex items-center gap-3 hover:bg-slate-800 hover:text-white px-4 py-3 rounded-lg transition-colors">
                        <span>📄</span> Kelola Artikel
                    </a>
                    <a href="#" class="flex items-center gap-3 hover:bg-slate-800 hover:text-white px-4 py-3 rounded-lg transition-colors">
                        <span>📁</span> Kelola Kategori
                    </a>
                </nav>
            </div>

            <div class="p-4 border-t border-slate-800">
                <a href="logout.php" class="flex items-center justify-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 px-4 rounded-lg transition-colors text-sm w-full text-center shadow-sm">
                    🚪 Selesai / Logout
                </a>
            </div>
        </aside>

        <main class="flex-1 p-6 md:p-8">
            
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 md:p-8 mb-6 relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-emerald-50 rounded-full -z-0 opacity-50"></div>
                
                <div class="relative z-10">
                    <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-3 py-1 rounded-full uppercase">Login Sukses</span>
                    
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800 mt-4">
                        Selamat Datang, <span class="text-emerald-600"><?= $_SESSION['nama']; ?></span>!
                    </h2>
                    
                    <p class="text-slate-600 mt-2 text-sm md:text-base max-w-xl">
                        Kamu berhasil masuk ke Panel Sistem Manajemen Blog Keren. Di sini kamu bisa menambah penulis baru, menulis artikel edukatif, atau mengatur kategori blog.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-4 text-xs text-slate-500 border-t border-slate-100 pt-4">
                        <div class="flex items-center gap-1.5">
                            <span>📅</span> <strong>Tanggal:</strong> <?= $tanggal_login; ?>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span>⏰</span> <strong>Waktu Masuk:</strong> <?= $waktu_login; ?>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span>🟢</span> <strong>Status Sesi:</strong> <span class="text-emerald-600 font-semibold">Aktif</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Total Penulis</p>
                        <h4 class="text-2xl font-bold text-slate-800 mt-1">3 Orang</h4>
                    </div>
                    <span class="text-3xl p-3 bg-blue-50 rounded-lg">👥</span>
                </div>
                <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Artikel Rilis</p>
                        <h4 class="text-2xl font-bold text-slate-800 mt-1">12 Post</h4>
                    </div>
                    <span class="text-3xl p-3 bg-emerald-50 rounded-lg">📝</span>
                </div>
                <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Kategori</p>
                        <h4 class="text-2xl font-bold text-slate-800 mt-1">5 Genre</h4>
                    </div>
                    <span class="text-3xl p-3 bg-amber-50 rounded-lg">📁</span>
                </div>
            </div>

        </main>
    </div>

</body>
</html>