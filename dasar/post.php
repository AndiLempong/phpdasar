<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <br>
    <br>
    Umur: <input type="text" umur="umur">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  $umur = $_POST['umur'];
  if (empty($name) && empty ($umur)) {
  } else {
    echo "nama saya adalah $nama";
    echo "umur saya adalah $umur";
}
}
?>
</body>
</html>