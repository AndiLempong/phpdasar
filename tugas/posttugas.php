<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nama: <input type="text" name="nama">
  <br>
  <br>
  Umur: <input type="text" name="umur">
  <br>
  <br>

    Gender:
    <input type="radio" id="html" name="gender" value="laki laki">
    <label for="html">Laki-laki</label>
    <input type="radio" id="css" name="gender" value="perempuan">
  <label for="css">Perempuan</label><br><br>
  Makanan kesukaan:
  <input type="checkbox" id="makanan" name="makanan" value="AyamGeprek">
  <label for="makanan"> Ayam Geprek</label>
  <input type="checkbox" id="makanan" name="makanan" value="AyamPenyet">
  <label for="makanan"> Ayam Penyet</label>
  <input type="checkbox" id="makanan" name="makanan" value="AyamGuling">
  <label for="makanan"> Ayam Guling</label> 
  <br>
  <br>
  <input type="submit"> 
  
  </form>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $gender = $_POST['gender'];
  $makanan = $_POST['makanan'];
  if (empty($nama) && empty($umur) && empty($gender) && empty($makanan)) {

  } else {
    echo "nama saya adalah $nama <br>" ;
    echo "umur saya adalah $umur <br>";
    echo "saya seorang $gender <br>";
    echo "dan makanan kesukaan saya adalah $makanan <br>";
    for ($i=0; $i < count($makanan) ; $i++){
        echo "$makanan[$i],";
    }
  }
}
?>
</body>
</html>