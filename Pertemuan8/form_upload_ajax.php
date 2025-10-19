<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah FIle Dokumen</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <div class="upload-form-container">
        <h1>Unggah File Dokumen</h1>
        <form method="post" id="upload-form">
            <div id="file-input-container">
                <input type="file" name="file" id="file" class="file-input">
                <label for="file" class="file-label">Pilih File</label>
            </div>
            <button type="submit" name="submit" class="upload-button" id="upload-button">Unggah</button>
        </form>
        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>