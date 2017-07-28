<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Jungsimes prie DB naudojant PHP </title>
  </head>
  <body>

<?php
echo "PHP";

define("SERVERNAME", "localhost");
define("USERNAME", "root"); //root
define("PASSWORD", "root");  //root
define("DB_NAME", "testuoju");

mysqli connect - jungiasi prie DB
$connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );
if ($connection) { //  $connection == true
   echo "prisijungti prie DB pavyko  <br>";
} else {
   echo "Prisijungti prie DB NEPAVYKO!!!" .  mysqli_connect_error() . "<br>";
}

// id | username | pass | email | rights
mysqli_query("INSERT INTO users VALUES ('', 'Tomulis', 'Drako', 'a@a.lt', 'moderator')")
$sql="INSERT INTO users VALUES ('', 'Tomulis', 'Drako', 'a@a.lt', 'moderator')");
$status=mysqli_query($connection, $sql);
if ($status == false) { // !$status
    echo "nepavyko sukurti vartotojo";
}else{
  echo "sveikinimai";
}

// vartotojo sukurimo veiksmus ideti i f-ija ($connect)
function createUser ($connection){
$sql="INSERT INTO users VALUES ('', 'Tomulis', 'Drako', 'a@a.lt', 'moderator')");
$status=mysqli_query($connection, $sql);
if ($status == false) { // !$status
    echo "nepavyko sukurti vartotojo";
}else{
  echo "sveikinimai";
}
}

?>


  </body>
</html>
