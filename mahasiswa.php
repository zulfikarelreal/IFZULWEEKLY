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
      <h2>Data Mahasiswa</h2>

      <div class="btn-center">
        <a href="tambahdata.php" class="btn">+ Tambah Data</a>
      </div>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th rowspan="2">NO</th>
              <th rowspan="2">NAMA</th>
              <th rowspan="2">FOTO</th>
              <th colspan="3">NILAI</th>
            </tr>
            <tr>
              <th>UTS</th>
              <th>UAS</th>
              <th>TUGAS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Aristoteles</td>
              <td><img src="assets/aristoteles.jpg" alt="Aristoteles" width="80"></td>
              <td><span class="score-badge">100</span></td>
              <td><span class="score-badge">100</span></td>
              <td><span class="score-badge">100</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Socrates</td>
              <td><img src="assets/socrates.jpg" alt="Socrates" width="80"></td>
              <td><span class="score-badge">100</span></td>
              <td><span class="score-badge">100</span></td>
              <td><span class="score-badge">100</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Plato</td>
              <td><img src="assets/plato.jpg" alt="Plato" width="80"></td>
              <td><span class="score-badge">100</span></td>
              <td><span class="score-badge">100</span></td>
              <td><span class="score-badge">100</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <hr class="divider">

      <!-- Tabel Rowspan/Colspan Demo -->
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