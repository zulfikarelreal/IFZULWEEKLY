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
              <th>No</th>
              <th>Nama</th>
              <th>Nim</th>
              <th>Program Studi</th>
              <th>Email</th>
              <th>No. HP</th>
              <th>Foto</th>
              <th>Action</th>
            </tr>
            <!-- <tr>
              <th>UTS</th>
              <th>UAS</th>
              <th>TUGAS</th>
            </tr> -->
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>Cristiano Ronaldo</td>
                  <td>13182420001</td>
                  <td>Informatika</td>
                  <td>cr7@gmail.com</td>
                  <td>0821273717273</td>
                  <td>
                      <img src="assets/ronaldo.jpg" alt="Cristiano Ronaldo" width="80">
                  </td>
                  <td>
                    <div class="action-cell">
                      <button class="btn-edit">✏ Edit</button>
                      <button class="btn-delete">🗑 Hapus</button>
                    </div>
                  </td>
              </tr>

              <tr>
                  <td>2</td>
                  <td>Lionel Messi</td>
                  <td>13182420002</td>
                  <td>Informatika</td>
                  <td>messi@gmail.com</td>
                  <td>081234567890</td>
                  <td>
                      <img src="assets/messi.jpg" alt="Lionel Messi" width="80">
                  </td>
                  <td>
                    <div class="action-cell">
                      <button class="btn-edit">✏ Edit</button>
                      <button class="btn-delete">🗑 Hapus</button>
                    </div>
                  </td>
              </tr>

              <tr>
                  <td>3</td>
                  <td>Neymar Junior</td>
                  <td>13182420003</td>
                  <td>Informatika</td>
                  <td>neymar@gmail.com</td>
                  <td>081987654321</td>
                  <td>
                      <img src="assets/neymar.jpg" alt="Neymar Junior" width="80">
                  </td>
                  <td>
                    <div class="action-cell">
                      <button class="btn-edit">✏ Edit</button>
                      <button class="btn-delete">🗑 Hapus</button>
                    </div>
                  </td>
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