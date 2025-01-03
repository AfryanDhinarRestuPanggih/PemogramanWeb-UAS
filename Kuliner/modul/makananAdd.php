<?php
// Cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['submit'])) {
    // Ambil data dari formulir
    $nama_makanan = $_POST['nama_makanan'];
    $daerah_makanan = $_POST['daerah_makanan'];

    // Buat query
    $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan) VALUES ('$nama_makanan', '$daerah_makanan')";
    $sql = mysqli_query($conn, $query);

    // Apakah proses simpan berhasil?
    if ($sql) {
        echo "<script>
                window.alert('Data berhasil ditambah!');
                window.location='?page=makanan';
              </script>";
    } else {
        echo "<script>
                window.alert('Gagal menambah data!');
                window.location='?page=makanan';
              </script>";
    }
} elseif (isset($_POST['cancel'])) {
    echo "<script>window.location='?page=makanan';</script>";
}
?>

<table>
    <tr>
        <th colspan="3"><u>Tambah Data Daftar Makanan</u></th>
    </tr>
    <form method="post" action="">
        <tr>
            <td style="width: 8em;">Nama Makanan</td>
            <td>:</td>
            <td><input type="text" name="nama_makanan" style="width: 20em;"></td>
        </tr>
        <tr>
            <td style="width: 8em;">Daerah Makanan</td>
            <td>:</td>
            <td><input type="text" name="daerah_makanan" style="width: 20em;"></td>
        </tr>
        <tr style="margin-top: 1em;">
            <td></td>
            <td></td>
            <td colspan="3" style="padding: 0.5em;">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
                <input type="submit" name="cancel" value="Cancel">
            </td>
        </tr>
    </form>
</table>