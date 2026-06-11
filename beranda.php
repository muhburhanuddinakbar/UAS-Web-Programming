<?php
// ==========================================
// 1. DATABASE SEMUA ARTIKEL (Berdasarkan Kategori)
// ==========================================
$semua_artikel = [
    // --- PEMROGRAMAN ---
    [
        'id' => 1,
        'kategori' => 'pemrograman',
        'badge_class' => 'badge-pemrograman',
        'kategori_label' => 'Pemrograman',
        'judul' => 'Pengenalan Framework Laravel untuk Pemula',
        'penulis' => 'Ahmad Basuki',
        'avatar' => 'A',
        'avatar_bg' => '#2563eb',
        'tanggal' => '11 juni 2026',
        'gambar' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800',
        'ringkasan' => 'Laravel merupakan framework PHP modern yang menyediakan berbagai fitur seperti routing, middleware, ORM Eloquent, autentikasi, dan template Blade.'
    ],
    [
        'id' => 2,
        'kategori' => 'pemrograman',
        'badge_class' => 'badge-pemrograman',
        'kategori_label' => 'Pemrograman',
        'judul' => 'Memahami Konsep MVC dalam Pengembangan Web',
        'penulis' => 'Siti Rahayu',
        'avatar' => 'S',
        'avatar_bg' => '#db2777',
        'tanggal' => '11 juni 2026',
        'gambar' => 'https://images.unsplash.com/photo-1542831371-29b0f74f9713?w=800',
        'ringkasan' => 'MVC merupakan pola arsitektur perangkat lunak yang memisahkan model, view, dan controller sehingga kode menjadi lebih rapi.'
    ],

    // --- TEKNOLOGI ---
    [
        'id' => 3,
        'kategori' => 'teknologi',
        'badge_class' => 'badge-teknologi',
        'kategori_label' => 'Teknologi',
        'judul' => 'Perkembangan Dunia Artificial Intelligence (AI) di Tahun 2026',
        'penulis' => 'Burhanuddin Akbar',
        'avatar' => 'B',
        'avatar_bg' => '#dc2626',
        'tanggal' => '11 juni 2026',
        'gambar' => 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=800',
        'ringkasan' => 'Teknologi Artificial Intelligence kini melompat jauh di tahun 2026. Mulai dari sistem otomasi pintar hingga integrasi asisten virtual super cerdas.'
    ],

    // --- TUTORIAL ---
    [
        'id' => 4,
        'kategori' => 'tutorial',
        'badge_class' => 'badge-tutorial',
        'kategori_label' => 'Tutorial',
        'judul' => 'Tutorial Git Dasar: Manajemen Source Code untuk Proyek Bersama',
        'penulis' => 'Rian Wijaya',
        'avatar' => 'R',
        'avatar_bg' => '#ca8a04',
        'tanggal' => '11 juni 2026',
        'gambar' => 'https://images.unsplash.com/photo-1618401471353-b98afee0b2eb?w=800',
        'ringkasan' => 'Belajar menggunakan Git dari dasar mulai dari perintah git init, git add, git commit, hingga push ke GitHub atau GitLab.'
    ],

    // --- TIPS & TRICK ---
    [
        'id' => 5,
        'kategori' => 'tips-trick',
        'badge_class' => 'badge-tips',
        'kategori_label' => 'Tips & Trick',
        'judul' => '5 Tips Menulis Clean Code agar Program Mudah Dipelihara',
        'penulis' => 'Mega Utami',
        'avatar' => 'M',
        'avatar_bg' => '#0284c7',
        'tanggal' => '11 Juni 2026',
        'gambar' => 'https://images.unsplash.com/photo-1600132806370-bf17e65e942f?w=800',
        'ringkasan' => 'Menulis kode tidak sekadar membuat aplikasi berjalan normal. Simak tips and trik menerapkan prinsip DRY (Don\'t Repeat Yourself).'
    ]
];

// ==========================================
// 2. LOGIKA PENYARING UTAMA (SISTEM FILTER)
// ==========================================
$kategori_aktif = $_GET['kategori'] ?? 'semua';

$artikel_ditampilkan = [];
foreach ($semua_artikel as $artikel) {
    if ($kategori_aktif === 'semua' || $artikel['kategori'] === $kategori_aktif) {
        $artikel_ditampilkan[] = $artikel;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Kami - Beranda</title>
  <style>
    /* --- CSS RESET & BASE STYLES --- */
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
    body { background-color: #f4f7f6; color: #333; }
    a { text-decoration: none; color: inherit; }

    header { background-color: #1e293b; color: #ffffff; padding: 20px 10%; display: flex; justify-content: space-between; align-items: center; }
    .brand h1 { font-size: 24px; font-weight: 700; }
    .brand p { font-size: 12px; color: #94a3b8; margin-top: 4px; }
    
    /* --- STRUKTUR NAVIGASI & TOMBOL MASUK --- */
    nav { display: flex; align-items: center; gap: 30px; }
    nav ul { display: flex; list-style: none; gap: 20px; align-items: center; }
    nav ul li a { font-size: 14px; color: #cbd5e1; }
    nav ul li a:hover, nav ul li a.active { color: #ffffff; font-weight: 600; }
    
    /* Style Kotak Hijau Tombol Masuk */
    .btn-masuk-hijau { 
      background-color: #22c55e; 
      color: #ffffff !important; 
      padding: 8px 20px; 
      border-radius: 8px; 
      font-size: 15px; 
      font-weight: 600; 
      display: inline-block;
      transition: background-color 0.2s ease;
    }
    .btn-masuk-hijau:hover { 
      background-color: #16a34a; 
    }

    /* --- UTAMA CONTAINER --- */
    .container { max-width: 1200px; margin: 40px auto; padding: 0 20px; display: grid; grid-template-columns: 2fr 1fr; gap: 30px; }
    @media (max-width: 768px) { .container { grid-template-columns: 1fr; } }

    .articles-container { display: flex; flex-direction: column; gap: 35px; }
    .card-artikel { background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
    .thumbnail { width: 100%; height: 280px; object-fit: cover; }
    .konten-artikel { padding: 25px; }
    
    .badge-kategori { display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-bottom: 12px; }
    .badge-pemrograman { background-color: #dbeafe; color: #2563eb; }
    .badge-teknologi { background-color: #fee2e2; color: #dc2626; }
    .badge-tutorial { background-color: #fef9c3; color: #ca8a04; }
    .badge-tips { background-color: #e0f2fe; color: #0284c7; }

    .judul-artikel { font-size: 22px; color: #1e293b; margin-bottom: 12px; transition: color 0.2s; }
    .judul-artikel:hover { color: #16a34a; }
    .meta-artikel { display: flex; align-items: center; gap: 10px; font-size: 13px; color: #64748b; margin-bottom: 15px; }
    .avatar { width: 28px; height: 28px; border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 12px; }
    .ringkasan { font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px; }
    .btn-baca { display: inline-block; background-color: #16a34a; color: #ffffff; padding: 10px 20px; border-radius: 20px; font-size: 14px; font-weight: 500; }
    .btn-baca:hover { background-color: #15803d; }

    /* --- SIDEBAR --- */
    .sidebar { align-self: start; }
    .widget-kategori { background: #ffffff; border-radius: 16px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
    .widget-kategori h3 { font-size: 18px; color: #1e293b; margin-bottom: 20px; }
    .list-kategori { display: flex; flex-direction: column; gap: 10px; }
    .item-kategori { display: flex; justify-content: space-between; align-items: center; padding: 12px 16px; border-radius: 8px; font-size: 14px; color: #475569; transition: all 0.2s; }
    .item-kategori:hover { background-color: #f1f5f9; color: #1e293b; }
    .item-kategori.active { background-color: #dcfce7; color: #16a34a; font-weight: 600; }
    .jumlah-badge { background-color: #f1f5f9; color: #64748b; padding: 2px 8px; border-radius: 12px; font-size: 11px; font-weight: 600; }
    .item-kategori.active .jumlah-badge { background-color: #16a34a; color: #ffffff; }
  </style>
</head>
<body>

  <header>
    <div class="brand">
      <a href="index.php?kategori=semua"><h1>Blog Kami</h1></a>
      <p>Artikel terbaru seputar teknologi dan pemrograman</p>
    </div>
    <nav>
      <ul>
        <li><a href="index.php?kategori=semua" class="<?= $kategori_aktif == 'semua' ? 'active' : ''; ?>">Beranda</a></li>
        <li><a href="index.php?kategori=pemrograman" class="<?= $kategori_aktif == 'pemrograman' ? 'active' : ''; ?>">Artikel</a></li>
        <li><a href="index.php?kategori=teknologi" class="<?= $kategori_aktif == 'teknologi' ? 'active' : ''; ?>">Kategori</a></li>
        <li><a href="#">Tentang</a></li>
      </ul>
      
      <a href="/cmsblog/login.php" class="btn-masuk-hijau">Masuk</a>
      
    </nav>
  </header>

  <div class="container">

    <div class="articles-container">
      <?php 
      foreach ($artikel_ditampilkan as $artikel): 
      ?>
        <article class="card-artikel">
          <img src="<?= $artikel['gambar']; ?>" class="thumbnail">
          <div class="konten-artikel">
            <span class="badge-kategori <?= $artikel['badge_class']; ?>"><?= $artikel['kategori_label']; ?></span>
            
            <a href="detail.php?id=<?= $artikel['id']; ?>"><h2 class="judul-artikel"><?= $artikel['judul']; ?></h2></a>
            
            <div class="meta-artikel">
              <div class="avatar" style="background-color: <?= $artikel['avatar_bg']; ?>;"><?= $artikel['avatar']; ?></div>
              <span><?= $artikel['penulis']; ?></span>
              <span>•</span>
              <span><?= $artikel['tanggal']; ?></span>
            </div>
            <p class="ringkasan"><?= $artikel['ringkasan']; ?></p>
            <a href="detail.php?id=<?= $artikel['id']; ?>" class="btn-baca">Baca Selengkapnya →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <aside class="sidebar">
      <div class="widget-kategori">
        <h3>Kategori Artikel</h3>
        <div class="list-kategori">
          
          <a href="index.php?kategori=semua" class="item-kategori <?= $kategori_aktif == 'semua' ? 'active' : ''; ?>">
            <span>Semua Artikel</span>
            <span class="jumlah-badge">5</span>
          </a>
          
          <a href="index.php?kategori=teknologi" class="item-kategori <?= $kategori_aktif == 'teknologi' ? 'active' : ''; ?>">
            <span>Teknologi</span>
            <span class="jumlah-badge">1</span>
          </a>
          
          <a href="index.php?kategori=pemrograman" class="item-kategori <?= $kategori_aktif == 'pemrograman' ? 'active' : ''; ?>">
            <span>Pemrograman</span>
            <span class="jumlah-badge">2</span>
          </a>
          
          <a href="index.php?kategori=tutorial" class="item-kategori <?= $kategori_aktif == 'tutorial' ? 'active' : ''; ?>">
            <span>Tutorial</span>
            <span class="jumlah-badge">1</span>
          </a>
          
          <a href="index.php?kategori=tips-trick" class="item-kategori <?= $kategori_aktif == 'tips-trick' ? 'active' : ''; ?>">
            <span>Tips & Trick</span>
            <span class="jumlah-badge">1</span>
          </a>
          
        </div>
      </div>
    </aside>

  </div>

</body>
</html>