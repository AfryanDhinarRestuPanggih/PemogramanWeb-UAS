<?php
require "includes/config.php";

// Ambil ID dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan = $id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("Data tidak ditemukan...");
}

// Skrip Proses Update
// Cek apakah tombol update sudah diklik atau belum?
if (isset($_POST['update'])) {
    $id2 = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $daerah_makanan = $_POST['daerah_makanan'];

    // Update data
    $query2 = "UPDATE tbl_makanan SET nama_makanan = '$nama_makanan', daerah_makanan = '$daerah_makanan' WHERE id_makanan = '$id2'";
    $sql2 = mysqli_query($conn, $query2);

    // Apakah proses update berhasil?
    if ($sql2) {
        echo "<script>
                window.alert('Data berhasil diupdate!');
                window.location = '?page=makanan';
              </script>";
    } else {
        echo "<script>
                window.alert('Gagal update data!');
                window.location = '?page=makanan';
              </script>";
    }
}
?>

<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Update Data Daftar Makanan</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <!-- Menampung nilai ID yang akan di-edit -->
                        <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />

                        <div class="row">
                            <div class="mb-3">
                                <label for="nama_makanan" class="form-label">Nama Makanan</label>
                                <input type="text" class="form-control" name="nama_makanan" value="<?= $data['nama_makanan'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="daerah_makanan" class="form-label">Daerah Makanan</label>
                                <input type="text" class="form-control" name="daerah_makanan" value="<?= $data['daerah_makanan'] ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light mx-2" style="width: 6em; height: 2.4em;">Update</button>
                            <a class="btn btn-primary" href="?page=makanan" role="button" style="width: 6em; height: 2.4em;">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
