<?php
require 'functions.php';

// ambil id dari URL

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
      alert ('Data berhasil dihapuskan');
      document.location.href = 'index.php';
      </script>";
} else {
  echo "Data gagal dihapuskan";
}
