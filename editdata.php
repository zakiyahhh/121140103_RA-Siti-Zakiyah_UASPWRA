<?php
session_start();
include "koneksi.php";

if (isset($_POST["nim"]) && isset($_POST["nama"]) && isset($_POST["gender"]) && isset($_POST["prodi"]) && isset($_POST["sifat"])) {
    $nim = mysqli_real_escape_string($conn, $_POST["nim"]);
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $prodi = mysqli_real_escape_string($conn, $_POST["prodi"]);

    $sifatValues = isset($_POST["sifat"]) ? $_POST["sifat"] : array();
    $sifat = implode(", ", $sifatValues);

    $sql = "UPDATE teman SET nama='$nama', gender='$gender', prodi='$prodi', sifat='$sifat'
            WHERE nim='$nim';";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: teman.php");
        exit();
    } else {
        echo "Data Gagal Diupdate " . mysqli_error($conn);
        header("Location: teman.php");
        exit();
    }
} else {
    echo "Invalid form data";
}
?>