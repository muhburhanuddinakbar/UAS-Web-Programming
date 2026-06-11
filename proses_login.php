<?php
// 1. Mulai session untuk menyimpan status login
session_start();

// 2. Konfigurasi koneksi ke database
$host        = "localhost";
$username_db = "root";
$password_db = "";
$database    = "db_blog"; // <-- GANTI dengan nama database CMS kamu

$koneksi = mysqli_connect($host, $username_db, $password_db, $database);

// Cek apakah koneksi ke database berhasil
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// 3. Memproses data ketika tombol login ditekan (Method POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data dari form login dan amankan dari SQL Injection
    $user_input = mysqli_real_escape_string($koneksi, $_POST['username']);
    $pass_input = $_POST['password'];

    // 4. Query SUDAH FIX: Menggunakan kolom 'user_name' sesuai database kamu
    $query  = "SELECT * FROM penulis WHERE user_name = '$user_input'";
    $result = mysqli_query($koneksi, $query);

    // Cek apakah username ditemukan
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // 5. Verifikasi password hash ($2y$10$...) yang ada di database
        if (password_verify($pass_input, $row['password'])) {
            
            // Login sukses! Simpan data user ke session
            $_SESSION['login']     = true;
            $_SESSION['user_name'] = $row['user_name']; 
            $_SESSION['nama']      = $row['nama_depan'] . " " . $row['nama_belakang']; // Menggabungkan nama depan & belakang
            
            // Alihkan ke halaman utama dashboard CMS kamu
            // GANTI 'dashboard.php' jika nama file dashboard kamu berbeda
            header("Location: index.php"); 
            exit;
        }
    }

    // Jika username tidak ditemukan atau password tidak cocok
    echo "<script>
            alert('Username atau Password salah!');
            window.location.href = 'login.php';
          </script>";
}
?>