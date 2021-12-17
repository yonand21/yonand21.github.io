<h1>Edit Data User</h1>
<?php 
	include "koneksi.php";

    $no=$_GET['id'];
    $query=mysqli_query($koneksi, "SELECT * FROM users WHERE id='$no'") or die(mysqli_error($koneksi));
    $result=mysqli_fetch_array($query);
?>

    <form method="GET" id="formEdit">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" id="id" value="<?php echo $result['id']; ?>" />
                    <input type="text" name="nama" id="nama" value="<?php echo $result['nama']; ?>" /> 
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" id="email" value="<?php echo $result['email']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" id="password" value="<?php echo $result['password']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Hak Akses</td>
                <td>
                    <input type="radio" name="hak_akses" value="admin">Admin
                    <input type="radio" name="hak_akses" value="user" checked>User
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>
