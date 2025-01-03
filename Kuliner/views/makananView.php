<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="float-start mt-2 fw-bold">Daftar Makanan Tradisional</h5>
        <div class="float-end mt-2">
            <a title="Tambah data" href="?page=makananAdd" class="btn btn-sm btn-success">Tambah Data</a>
        </div>
    </div>
    <div class="card-body">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Nama Makanan</th>
                    <th class="text-center">Asal Daerah</th>
                    <th class="text-center">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                $sql = mysqli_query($conn, $query);
                $nomor = 1;

                foreach ($sql as $val) {
                ?>
                <tr>
                    <td class="text-center"><?= $nomor++; ?></td>
                    <td><?= htmlspecialchars($val['nama_makanan']); ?></td>
                    <td><?= htmlspecialchars($val['daerah_makanan']); ?></td>
                    <td class="text-center">
                        <a href="?page=makananUpdate&id=<?= $val['id_makanan']; ?>" class="btn btn-sm btn-warning">Update</a>
                        <a href="?page=makananDelete&id=<?= $val['id_makanan']; ?>" 
                           class="btn btn-sm btn-danger" 
                           onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Nama Makanan</th>
                    <th class="text-center">Asal Daerah</th>
                    <th class="text-center">Keterangan</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
