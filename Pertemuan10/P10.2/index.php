<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Data Anggota</h2>
        <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
        <br>
        <?php
        include('koneksi.php');

        $query = "SELECT * FROM anggota order by id desc";
        $result = mysqli_query($koneksi, $query);
        ?>

        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $jenis_kelamin . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "<td>" . $row['no_telp'] . "</td>";
                        echo "<td>";
                        echo "<a class='btn btn-primary' href='edit.php?id=" . $row['id'] . "'>Edit</a>";
                        echo " <a class='btn btn-danger' href='#' data-toggle='modal' data-target='#hapusModal" . $row['id'] . "'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                        // Modal Konfirmasi Hapus
                        echo "<div class='modal fade' id='hapusModal" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='exampleModalLabel'>Konfirmasi Hapus</h5>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                        echo "<span aria-hidden='true'>&times;</span>";
                        echo "</button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";
                        echo "Apakah Anda yakin ingin menghapus data dengan Nama **" . $row['nama'] . "** ?";
                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<a class='btn btn-danger' href='proses.php?aksi=hapus&id=" . $row['id'] . "'>Hapus</a>";
                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Batal</button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>