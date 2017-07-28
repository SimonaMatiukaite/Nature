<?php

echo "labas";

define('HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'karalystes');


function connect_DB () {
  $connection = mysqli_connect(HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
  if ( $connection) {
    echo " prisijungete sekmingai <br />";
  } else {
    echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
  }
  return $connection;
}

function getArticle($id) {
      $sql = "SELECT * FROM aprasymai
              WHERE  id = $id";
      $connect = karalystes();
      $results = mysqli_query($connect, $sql);

      // mysqli_fetch_assoc - suskaldo gautus rezultatus i masyva (rows)
      $data = mysqli_fetch_assoc($results);
      if( $data > 0 ) {
          // viskas gerai
      } else {
          echo " NR: $id tokio  straipsnio neradome!!! <br>";
      }
      return $data;
}

 ?>
