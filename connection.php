<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "praktikum_9");

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $news = [];
    while ($new = mysqli_fetch_assoc($result)) {
        $news[] = $new;
    }
    return $news;
}

function tambah($data)
{
    global $db;
    $name = ($data['name']);
    $email = ($data['email']);
    $address = ($data['address']);
    $gender = ($data['gender']);
    $position = ($data['position']);
    $status = ($data['status']);

    $query = "INSERT INTO karyawan
                VALUES
               ('', '$name', '$email', '$address', '$gender', '$position', '$status') 
            ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($data)
{
    global $db;
    $id = $data["id"];
    mysqli_query($db, "DELETE FROM karyawan WHERE id = $id");

    return mysqli_affected_rows($db);
}
