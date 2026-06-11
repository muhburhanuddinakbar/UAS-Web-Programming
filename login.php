<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
        
        /* * 💡 SOLUSI UTAMA:
         * Buka folder 'cmsblog' kamu di laptop, lalu lihat apa nama file 
         * yang menampilkan data penulis/tabel seperti di screenshot!
         * * Ganti 'kelola_penulis.php' di bawah ini dengan NAMA ASLI file tersebut.
         */
        header("Location: /cmsblog/index.php"); 
        exit;
        
    } else {
        $error = 'Username atau Password salah!';
    }



?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Manajemen Blog</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md border border-slate-200">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-slate-800 tracking-tight">SISTEM MANAJEMEN BLOG</h2>
            <p class="text-emerald-600 font-medium text-sm mt-1">Blog Keren — Silahkan Login</p>
        </div>

        <?php if (!empty($error)): ?>
            <div class="bg-red-500 text-white p-3 rounded-lg text-sm text-center mb-5 font-medium shadow-sm">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST" class="space-y-5">
            <div>
                <label for="username" class="block text-sm font-semibold text-slate-600 mb-1">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all text-slate-800"
                    placeholder="Masukkan username anda...">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-slate-600 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all text-slate-800"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2.5 px-4 rounded-lg transition-colors shadow-sm cursor-pointer mt-2 text-center block">
                Masuk ke Dashboard
            </button>
        </form>

        <div class="text-center mt-6 pt-4 border-t border-slate-100">
            <a href="index.php" class="text-sm text-slate-500 hover:text-emerald-600 transition-colors font-medium">
                
            </a>
        </div>
    </div>

</body>
</html>