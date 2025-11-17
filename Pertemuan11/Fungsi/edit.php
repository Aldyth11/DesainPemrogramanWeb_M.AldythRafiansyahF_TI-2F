<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    if (!empty($_GET['jabatan'])) {
        // Mengambil dan membersihkan data dari POST dan GET
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);

        // Query UPDATE untuk tabel jabatan
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";

        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Gagal Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan kembali ke halaman daftar jabatan
        header("Location: ../index.php?page=jabatan");
    }
}
if (!empty($_GET['anggota'])) {
    // 1. Sanitasi dan Ambil Data POST
    $id = antiinjection($koneksi, $_POST['id']);
    $nama = antiinjection($koneksi, $_POST['nama']);
    $jabatan = antiinjection($koneksi, $_POST['jabatan']);
    $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
    $alamat = antiinjection($koneksi, $_POST['alamat']);
    $no_telp = antiinjection($koneksi, $_POST['no_telp']);
    $username = antiinjection($koneksi, $_POST['username']);
    $password = antiinjection($koneksi, $_POST['password']);
    
    // 2. Query UPDATE untuk Tabel Anggota
    $query_anggota = "UPDATE anggota SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_telp = '$no_telp', jabatan_id = '$jabatan' WHERE user_id = '$id'";
    
    // 3. Eksekusi Query Anggota
    if (mysqli_query($koneksi, $query_anggota)) {
        
        // 4. Proses Update Password (Jika password tidak kosong)
        if (!empty($_POST['password'])) {
            // Generate random salt
            $salt = bin2hex(random_bytes(16));
            // Gabungkan salt dengan password
            $combined_password = $salt . $password;
            // Hash password dengan salt
            $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

            // Query UPDATE untuk Tabel User (dengan password baru)
            $query_user = "UPDATE user SET username = '$username', password = '$hashed_password', salt = '$salt' WHERE id = '$id'";
            
            if (mysqli_query($koneksi, $query_user)) {
                pesan('success', "Anggota Telah Diubah.");
            } else {
                pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
            }

        } else {
            // 5. Proses Update Username Saja (Jika password kosong)
            
            // Query UPDATE untuk Tabel User (tanpa password baru)
            $query_user = "UPDATE user SET username = '$username' WHERE id = '$id'";
            
            if (mysqli_query($koneksi, $query_user)) {
                pesan('success', "Anggota Telah Diubah.");
            } else {
                pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
            }
        }
    } else {
        // 6. Penanganan Kegagalan Update Anggota
        pesan('danger', "Mengubah Anggota Karena: " . mysqli_error($koneksi));
    }
    
    // 7. Redirect
    header("Location: ../index.php?page=anggota");
}
?>