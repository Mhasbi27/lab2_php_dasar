<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>
    <?php
    if (isset($_POST['nama'])) {
        echo 'Selamat Datang ' . htmlspecialchars($_POST['nama']);
    } else {
        echo 'Selamat Datang ';
    }
    ?>
</body>
</html>