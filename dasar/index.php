<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- VARIABLE -->
<?php
echo "Hello World"
?>
<br>
<!-- IF ELSE -->
<?php 
$tes ="testing" ;
echo $tes;
?>
<br>
<!-- SWITCH -->
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
<br>
<!-- FOR EACH -->
<?php 
$mobil = array("BMW, Daihatsu, Panther");
foreach ($mobil as $Panther) {
    echo "$Panther <br>";
}
?>
<!-- FUNCTION -->
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>
<br>
<!-- ARRAY -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<!-- DATE AND TIME -->
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
<br>
<br>

<!-- PHP OOP -->
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
<br>
<!-- PHP DESTRUCTOR -->

<?php
class komputer 
{
    public $prosesor;
    public $memory;
    public $ram;
    public function __construct($prosesor = "prosesor", $memory = "Memory", $ram = "RAM")
{
$this->prosesor = $prosesor;
$this->memory = $memory;
$this->ram = $ram;
}
public function getData()
{
  return "$this->prosesor | $this->memory | $this->ram";
}
}
$komputer1 = new komputer("Core i7", "225 GB", "8 GB");
$komputer2 = new komputer("Core i9", "500 GB");
$komputer3 = new komputer("Core i20", "500 GB", "1 TERA");
echo "Spek komputer Sekolah : " . $komputer1->getData();
echo "<br />";
echo "<br />";
echo "Spek Komputer Rumah : " . $komputer2->getData();
echo "<br />";
echo "<br />";
echo "Spek Komputer Pribadi : " . $komputer3->getData();
?>

<?php
class product{
    publiC $ram;
    public function __construct($ram = "RAM") {
        $this->ram = $ram;
    }
     function __destruct() {
        echo "Ram komputer {this->ram}";
    }
}

$komputer1 = new product ("255GB");
?>
<br>
<!-- session -->
<?php
session_start();
echo "id user saya adalah" . $_SESSION['logged_in_user_id'];
echo "<br>";
echo "Username saya adalah" . $_SESSION['logged_in_user_name'];
?>
<br>
</body>
</html>
