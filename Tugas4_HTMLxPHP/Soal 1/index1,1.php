<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Juan Tuandali 2172034">
    <title>Hasil Input soal 1</title>
</head>
<body align="center">
    <h2>Form input berhasil diterima</h2>
    Nama Saya adalah <?php echo $_POST["nama"]; ?> <br>
    Email saya yaitu <?php echo $_POST["email"]; ?> <br>
    No hp saya yaitu <?php echo $_POST["number"]; ?> <br>
    Hobby saya yaitu <?php echo $_POST["hobby"]; ?> <br>
    Deskripsi diri saya yaitu <?php echo $_POST["deskripsi"]; ?>
</body>
</html>