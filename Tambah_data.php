<?php
require 'connection.php';
if (isset($_GET["batal"])) {
    echo "
        <script>
            document.location.href = 'home.php';
        </script>
        ";
}
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'home.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'home.php';
        </script>
        ";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data</title>
</head>

<body>
    <div class="container mb-3 mt-1">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tambah Data</a>
            </div>
        </nav>
    </div>

    <div class="container">
        <form action="" method="post">
            <div class="row mb-3 justify-content-center">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" Required>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" Required>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="address" name="address">
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="gender" name="gender">
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <label for="position" class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="position" name="position" Required>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="status" name="status">
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-success mt-3 me-5" name="submit">Submit</button>
                <button type="button" class="btn btn-dark mt-3 me-4" name="batal" onclick="return document.location.href = 'home.php';">Batal</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>