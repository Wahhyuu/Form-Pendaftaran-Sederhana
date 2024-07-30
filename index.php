<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pendaftaran | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Status Pendaftaran</h3>
    </header>

    <?php if (isset($_GET['status'])): ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
    <?php endif; ?>

    <p><a href="form_daftar.php">Kembali ke Formulir Pendaftaran</a></p>
</body>
</html>
