<?php
require_once "koneksi.php";

switch ($_GET['action'])
{

    case 'save':
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
        $hak_akses = $_POST['hak_akses'];
        $sql = "INSERT INTO users (nama, email, password, hak_akses) VALUES ('$nama', '$email', '$pass', '$hak_akses')";
        $result = mysqli_query($koneksi, $sql);
        if ($result)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $no = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
        $hak_akses = $_POST['hak_akses'];

        $sql = "UPDATE users SET nama='$nama', email='$email', password='$pass', hak_akses='$hak_akses' WHERE id='$no'";
        $result = mysqli_query($koneksi, $sql);
        if ($result)
        {
            header("Location: index.php");

            echo "Edit Data Berhasil";
        }
        else
            {
                echo "Edit Data Gagal :" . mysqli_error($koneksi);
            }
    break;

    case 'delete':

        $no = $_POST['id'];
        $sql = "DELETE FROM users WHERE id='$no'";
        $result = mysqli_query($koneksi, $sql);
        if ($result)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>
