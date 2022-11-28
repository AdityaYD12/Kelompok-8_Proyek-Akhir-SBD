<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Praktikum Antar Muka</title>
</head>

<body>
  <div class="container">
    <center>
      <h2>
        Daftar Barang
      </h2>
    </center>
    <a href="create_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a>
    <table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">NIDN</th>
          <th scope="col">Nama Dosen</th>
          <th scope="col">E-mail</th>
          <th scope="col">Tahun Penilaian</th>
          <th scope="col">Kode Unsur</th>
          <th scope="col">Nilai Total</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require 'connection.php';
        $hasil = mysqli_query($koneksi, "SELECT DISTINCT tbl_dosen.NIDN, nama_dosen, email, kd_unsur, tahun, nilai FROM tbl_dosen LEFT JOIN tbl_penilaian_umum ON tbl_dosen.NIDN = tbl_penilaian_umum.NIDN;")
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['NIDN'] . "</td>";
          echo "<td>" . $data['nama_dosen'] . "</td>";
          echo "<td>" . $data['email'] . "</td>";
          echo "<td>" . $data['tahun'] . "</td>";
          echo "<td>" . $data['kd_unsur'] . "</td>";
          echo "<td>" . $data['nilai'] . "</td>";
          echo "</tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>