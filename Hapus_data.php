<?php
require 'connection.php';
if (isset($_GET["id"])) {
    if (hapus($_GET) > 0) {
        echo "
        <script>
            alert('Data Berhasil Dihapuskan!');
            document.location.href = 'home.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Dihapuskan!');
            document.location.href = 'home.php';
        </script>
        ";
    }
}
