<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Juan Tuandali 2172034">
    <title>Soal 1</title>
</head>
<body>
    <h2 align="center" id="judul"> Form Input</h2>
   <form action="index1,1.php" method="post" enctype='multipart/form-data'>
      <table align="center">
          <tr>
              <td> Nama </td>
              <td>:</td>
              <td><input type="text" name="nama" id="nama"></td>
          </tr>
          <tr>
              <td>Email</td>
              <td>:</td>
              <td><input type="text" name="email" id="email"></td>
          </tr>
          <tr>
              <td> Phone Number  </td>
              <td>:</td>
              <td><input type="text" name="number" id="number"></td>
          </tr>
          <tr>
              <td> Hobby </td>
              <td>:</td>
              <td><input type="text" name="hobby" id="hobby"></td>
          </tr>
          <tr>
              <td>Description </td>
              <td>:</td>
              <td><textarea name="deskripsi" id="deskrisi" cols="20" rows="10"></textarea></td>
          </tr>
          <tr>
              <td></td>
              <td colspan="2">
                <input type="Submit" value="Submit">
                <input type="Reset" value="Reset" >
              </td>
          </tr>
        </table>
    
    </form>
        
  <?php

  ?>
</body>
</html>