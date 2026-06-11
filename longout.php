<?php
session_start();
session_unset();
session_destroy();

// Paksa browser kembali ke halaman beranda utama blog
header("Location: /cmsblog/beranda.php");
exit;
?>