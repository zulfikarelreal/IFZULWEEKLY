  <?php

    // $connection = mysqli_connect("localhost", "root", "zulfikar230904", "ifzulweekly");

    // if ($connection) {
    //     echo "anjay mabar";
    //   } else {
    //     echo "matot";
    //   }

    // $query = "SELECT * FROM mahasiswa";
    // $result = mysqli_query($connection, $query);

    // FETCHING
    // mysqli_fetch_row array numeric index
    // mysqli_fetch_assoc array associatif index
    // mysqli_fetch_array
    // mysqli_fetch_object

    // $mhs = mysqli_fetch_row($result); // index
    // $mhs = mysqli_fetch_assoc($result); // key
    // $mhs = mysqli_fetch_array($result); // index & key
    // $mhs = mysqli_fetch_object($result); // object
    
    // while($mhs = mysqli_fetch_object($result)) {
    //   var_dump($mhs);

    // } 

    // var_dump($mhs->nama); //object
    // var_dump($mhs);
  ?>

<?php
  require "function.php";

  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }

  $qmahasiswa = "SELECT * FROM mahasiswa";
  $mahasiswas = tampildata($qmahasiswa);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa | CDIA</title>
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/mahasiswa.css">
</head>
<body>

  <div class="page-wrapper">

    <a href="logout.php">Logout</a>

    <header class="site-header">
      <h1 class="site-title">CHANDRA DAYA INVESTASI (CDIA)</h1>
    </header>

    <div class="logo-wrap">
      <img src="assets/images/logo.png" alt="Logo CDIA">
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
      <h2>Data Mahasiswa</h2>

      <div class="btn-center">
        <a href="tambahdata.php" class="btn">+ Tambah Data</a>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Program Studi</th>
              <th>Email</th>
              <th>No. HP</th>
              <th>Foto</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($mahasiswas as $mhs) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $mhs['nama'] ?></td>
              <td><?= $mhs['nim'] ?></td>
              <td><?= $mhs['prodi'] ?></td>
              <td><?= $mhs['email'] ?></td>
              <td><?= $mhs['no_hp'] ?></td>
              <td>
                <img src="assets/images/<?= $mhs['foto'] ?>" alt="<?= $mhs['nama'] ?>" width="150">
              </td>
              <td>
                <div class="action-cell">
                  <a href="editdata.php?id=<?= $mhs["id"] ?>"> <button class="btn-edit">✏ Edit</button></a>
                  <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yakin deck?')" ><button class="btn-delete">🗑 Hapus</button></a>
                </div>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <hr class="divider">

      <div class="data-table-wrap">
        <table class="span-table">
          <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
          </tr>
          <tr>
            <td>2,1</td>
            <td rowspan="2" colspan="2">?</td>
            <td>2,4</td>
          </tr>
          <tr>
            <td>3,1</td>
            <td>3,4</td>
          </tr>
          <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
          </tr>
        </table>
      </div>

    </div>

    <footer>
      &copy; 2026 @zulfikarelreal
    </footer>

  </div>

</body>
</html>