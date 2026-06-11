<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengenalan Framework Laravel untuk Pemula</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
    body { background-color: #f8fafc; color: #334155; }
    a { text-decoration: none; color: inherit; }
    header { background-color: #1e293b; color: #ffffff; padding: 20px 10%; display: flex; justify-content: space-between; align-items: center; }
    .brand h1 { font-size: 22px; font-weight: 700; }
    .brand p { font-size: 12px; color: #94a3b8; margin-top: 2px; }
    nav ul { display: flex; list-style: none; gap: 20px; }
    nav ul li a { font-size: 14px; color: #cbd5e1; }
    .breadcrumb { font-size: 14px; color: #64748b; margin-bottom: 20px; }
    .breadcrumb a { color: #16a34a; }
    .container { max-width: 1200px; margin: 30px auto; padding: 0 20px; display: grid; grid-template-columns: 2.5fr 1fr; gap: 30px; }
    .main-content { background: #ffffff; border-radius: 16px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); }
    .thumbnail { width: 100%; max-height: 450px; object-fit: cover; border-radius: 12px; margin-bottom: 20px; }
    .badge-kategori { display: inline-block; background-color: #dbeafe; color: #2563eb; padding: 4px 14px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-bottom: 15px; }
    .judul-artikel { font-size: 28px; color: #1e293b; margin-bottom: 20px; font-weight: 700; }
    .meta-artikel { display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b; margin-bottom: 30px; }
    .avatar { width: 36px; height: 36px; border-radius: 50%; background-color: #2563eb; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; }
    .isi-lengkap p { font-size: 15px; color: #475569; line-height: 1.8; margin-bottom: 20px; text-align: justify; }
    .sidebar { align-self: start; background: #ffffff; border-radius: 16px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); }
    .sidebar h3 { font-size: 18px; color: #1e293b; margin-bottom: 20px; }
    .related-list { display: flex; flex-direction: column; gap: 20px; }
    .related-item { display: flex; gap: 15px; align-items: center; }
    .related-img { width: 80px; height: 60px; object-fit: cover; border-radius: 6px; }
    .related-info h4 { font-size: 13px; color: #1e293b; line-height: 1.4; margin-bottom: 4px; }
    .related-info span { font-size: 11px; color: #94a3b8; }
  </style>
</head>
<body>
  <header>
    <div class="brand"><h1>Blog Kami</h1><p>Artikel terbaru seputar teknologi dan pemrograman</p></div>
    <nav><ul><li><a href="#">Beranda</a></li><li><a href="#">Artikel</a></li><li><a href="#">Kategori</a></li><li><a href="#">Tentang</a></li></ul></nav>
  </header>
  <div class="container">
    <main class="main-content">
      <div class="breadcrumb"><a href="#">Beranda</a> / <a href="#">Pemrograman</a> / <span>Pengenalan Framework Laravel untuk Pemula</span></div>
      <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800" class="thumbnail" alt="Poster">
      <span class="badge-kategori">Pemrograman</span>
      <h1 class="judul-artikel">Pengenalan Framework Laravel untuk Pemula</h1>
      <div class="meta-artikel">
        <div class="avatar">A</div>
        <div>
          <div style="color: #1e293b; font-weight: 600;">Ahmad Basuki</div>
          <div style="font-size: 12px; margin-top: 2px;">13 April 2026 • 08:30 WIB</div>
        </div>
      </div>
      <div class="isi-lengkap">
        <p>Laravel adalah framework PHP open source yang dirancang untuk memudahkan pengembangan aplikasi web modern. Framework ini pertama kali dirilis oleh Taylor Otwell pada tahun 2011 dan sejak saat itu berkembang menjadi salah satu framework PHP paling populer di dunia.</p>
        <p>Salah satu keunggulan utama Laravel adalah arsitektur MVC atau Model-View-Controller yang memisahkan logika bisnis, tampilan, dan pengelolaan data secara terstruktur. Dengan pendekatan ini, kode aplikasi menjadi lebih mudah dibaca, dipelihara, dan dikembangkan.</p>
      </div>
    </main>
    <aside class="sidebar">
      <h3>Artikel Terkait</h3>
      <div class="related-list">
        <div class="related-item">
          <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?w=150" class="related-img">
          <div class="related-info"><h4>Memahami Konsep MVC dalam Pengembangan Web</h4><span>14 Apr 2026</span></div>
        </div>
      </div>
    </aside>
  </div>
</body>
</html>