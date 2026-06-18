<?php

  require 'function.php';

  if(isset($_POST["submit"])) {

    if (tambahdata($_POST) > 0) { 
      echo "<script>
        alert('Data Berhasil Ditambahkan!');
        window.location.href='mahasiswa.php';
      </script>";
    } else {
      echo "<script>
            alert('Data Gagal Ditambahkan!');
            window.location.href='mahasiswa.php';
          </script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data | CDIA</title>
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/tambahdata.css">
</head>
<body>

  <div class="page-wrapper">

    <header class="site-header">
      <h1 class="site-title">CHANDRA DAYA INVESTASI (CDIA)</h1>
    </header>

    <div class="logo-wrap">
      <img src="assets/logo.png" alt="Logo CDIA">
    </div>

    <nav>
      <div class="nav-table">
        <a href="index.php">HOME</a>
        <a href="profile.php">PROFILE</a>
        <a href="contact.php">CONTACT</a>
        <a href="mahasiswa.php" class="active">DATA MAHASISWA</a>
      </div>
    </nav>

    <div class="content-card">
      <a href="mahasiswa.php" class="back-link">Kembali ke Data Mahasiswa</a>

      <h2 style="margin-top: 24px;">Tambah Data Mahasiswa</h2>

      <div class="form-wrap">
        <form action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nama">Nama</label> 
            <input type="text" name="nama" id="nama" placeholder="Masukkan nama mahasiswa" required>
          </div>

          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" name="nim" id="nim" placeholder="Masukkan NIM mahasiswa" required>
          </div>

          <div class="form-group">
            <label for="prodi">Program Studi</label>
            <input type="text" name="prodi" id="prodi" placeholder="Contoh: Teknik Informatika" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Contoh: nama@email.com" required>
          </div>

          <div class="form-group">
            <label for="no_hp">No. HP</label>
            <input type="number" name="no_hp" id="no_hp" placeholder="Contoh: 081234567890" required>
          </div>

          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="text" name="foto" id="foto" accept="image/*" required>
          </div>

          <div class="form-submit">
            <button type="submit" name="submit" class="btn">Submit</button>
          </div>

        </form>
      </div>
    </div>

    <footer>
      &copy; 2026 @zulfikarelreal
    </footer>

  </div>

</body>
</html>