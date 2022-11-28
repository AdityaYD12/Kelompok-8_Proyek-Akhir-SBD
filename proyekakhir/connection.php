<?php
$koneksi = mysqli_connect("localhost", "root", "", "proyek_akhir");

// Check connection
if (!$koneksi) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
