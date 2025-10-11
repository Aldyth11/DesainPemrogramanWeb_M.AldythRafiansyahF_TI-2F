<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Lanjutan PHP</title>
</head>
<body>
    <h1>Contoh Form</h1>

    <form action="proses_lanjut.php" method="post">
        <label for="buah">Pilih buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih warna favorit: </label>
        <br>
        <input type="checkbox" name="wanra[]" value="merah">Merah <br>
        <input type="checkbox" name="warna[]" value="biru">Biru <br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau <br>

        <br>

        <label>Pilih jenis kelamin: </label>
        <br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br>

        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>