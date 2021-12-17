<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<br>
<table class="styled-table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Hak Akses</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM users ORDER BY id DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr class="active-row">
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['nama']; ?>
                </td>
                <td>
                    <?php echo $result['email']; ?>
                </td>
                <td>
                    <?php echo $result['hak_akses']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['id']; ?>">Edit</button>

                    <button id="DeleteButton" value="<?php echo $result['id']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table>