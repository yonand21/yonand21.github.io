<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" id="nama" required="" />
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" id="email">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" id="password">     
            </td>
        </tr>
        <tr>
            <td>Hak Akses</td>
            <td>
                    <input type="radio" name="hak_akses" value="admin">Admin
                    <input type="radio" name="hak_akses" value="user" checked>User
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <button id="cancelButton" type="button">Batal</button>
            </td>
        </tr>
    </table>
</form>