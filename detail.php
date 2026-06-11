<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Artikel - Pengenalan Framework Laravel</title>
  <style>
    /* CSS Navbar disamakan dengan Beranda agar Konsisten */
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
    body { background-color: #f4f7f6; color: #333; }
    a { text-decoration: none; color: inherit; }
    header { background-color: #1e293b; color: #ffffff; padding: 20px 10%; display: flex; justify-content: space-between; align-items: center; }
    .brand h1 { font-size: 24px; font-weight: 700; }
    .brand p { font-size: 12px; color: #94a3b8; margin-top: 4px; }
    nav { display: flex; align-items: center; gap: 30px; }
    nav ul { display: flex; list-style: none; gap: 20px; align-items: center; }
    nav ul li a { font-size: 14px; color: #cbd5e1; }
    nav ul li a:hover { color: #ffffff; }
    .btn-masuk-hijau { background-color: #22c55e; color: #ffffff !important; padding: 8px 20px; border-radius: 8px; font-size: 15px; font-weight: 600; display: inline-block; }
    
    /* Layout Detail Sesuai Gambar 1 */
    .container { max-width: 1200px; margin: 40px auto; padding: 0 20px; display: grid; grid-template-columns: 2.5fr 1fr; gap: 30px; }
    .main-content { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
    .breadcrumb { font-size: 14px; color: #64748b; margin-bottom: 20px; }
    .breadcrumb a { color: #10b981; }
    .thumbnail { width: 100%; border-radius: 12px; margin-bottom: 20px; }
    .title { font-size: 28px; color: #1e293b; margin-bottom: 15px; font-weight: 700; }
    .meta { display: flex; align-items: center; gap: 12px; margin-bottom: 25px; font-size: 14px; color: #64748b; }
    .avatar { width: 35px; height: 35px; background: #2563eb; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; }
    .body-text p { font-size: 16px; color: #334155; line-height: 1.8; margin-bottom: 20px; text-align: justify; }
    
    /* Sidebar Artikel Terkait */
    .sidebar-box { background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #f1f5f9; }
    .sidebar-box h3 { font-size: 18px; color: #1e293b; margin-bottom: 20px; }
    .related-item { display: flex; gap: 15px; margin-bottom: 20px; align-items: center; }
    .related-img { width: 70px; height: 50px; object-fit: cover; border-radius: 6px; }
    .related-info h4 { font-size: 13px; color: #1e293b; line-height: 1.4; }
    .related-info span { font-size: 11px; color: #94a3b8; }
  </style>
</head>
<body>

  <header>
    <div class="brand">
      <a href="index.php"><h1>Blog Kami</h1></a>
      <p>Artikel terbaru seputar teknologi dan pemrograman</p>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="#">Artikel</a></li>
        <li><a href="#">Kategori</a></li>
        <li><a href="#">Tentang</a></li>
      </ul>
      <a href="login.php" class="btn-masuk-hijau">Masuk</a>
    </nav>
  </header>

  <div class="container">
    <main class="main-content">
      <div class="breadcrumb">
        <a href="index.php">Beranda</a> / <a href="#">Pemrograman</a> / Pengenalan Framework Laravel
      </div>
      
      <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800" class="thumbnail">
      
      <h2 class="title">Pengenalan Framework Laravel untuk Pemula</h2>
      
      <div class="meta">
        <div class="avatar">A</div>
        <div>
          <p style="font-weight: 600; color: #1e293b;">Ahmad Basuki</p>
          <p style="font-size: 12px;">13 April 2026 • 08:30 WIB</p>
        </div>
      </div>

      <div class="body-text">
        <p>Laravel adalah framework PHP open source yang dirancang untuk memudahkan pengembangan aplikasi web modern. Framework ini pertama kali dirilis oleh Taylor Otwell pada tahun 2011 dan sejak saat itu berkembang menjadi salah satu framework PHP paling populer di dunia.</p>
        <p>Salah satu keunggulan utama Laravel adalah arsitektur MVC atau Model View Controller yang memisahkan logika bisnis, tampilan, dan pengelolaan data secara terstruktur. Dengan pendekatan ini, kode aplikasi menjadi lebih mudah dibaca, dipelihara, dan dikembangkan.</p>
        <p>Laravel menyediakan berbagai fitur bawaan seperti Eloquent ORM, Blade Template Engine, Middleware, Authentication, Validation, hingga Artisan CLI. Fitur-fitur tersebut membantu pengembang membangun aplikasi secara lebih cepat dan efisien.</p>
      </div>
    </main>

    <aside class="sidebar">
      <div class="sidebar-box">
        <h3>Artikel Terkait</h3>
        
        <div class="related-item">
          <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?w=150" class="related-img">
          <div class="related-info">
            <h4>Memahami Konsep MVC dalam Pengembangan Web</h4>
            <span>14 Apr 2026</span>
          </div>
        </div>

        <div class="related-item">
          <img src="https://images.unsplash.com/photo-1618401471353-b98afee0b2eb?w=150" class="related-img">
          <div class="related-info">
            <h4>Eloquent ORM dan Relasi Antar Tabel</h4>
            <span>15 Apr 2026</span>
          </div>
        </div>
      </div>
    </aside>
  </div>

</body>
</html>