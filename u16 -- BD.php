<?php

require_once 'db.php';
      // <?php
      // $servername = "localhost";
      // $username = "username";
      // $password = "password";
      // $dbname = "myDB";

      // // Create connection
      // $conn = mysqli_connect($servername, $username, $password, $dbname);
      // // Check connection
      // if (!$conn) {
      //   die("Connection failed: " . mysqli_connect_error());
      // }

      // $sql = "SELECT id, firstname, lastname FROM MyGuests";
      // $result = mysqli_query($conn, $sql);

      // if (mysqli_num_rows($result) > 0) {
      //   // output data of each row
      //   while($row = mysqli_fetch_assoc($result)) {
      //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      //   }
      // } else {
      //   echo "0 results";
      // }

      // mysqli_close($conn);
    

require_once 'config.php';          // подключи файл (доступ к БД)
      // define("SERVER", "localhost");
      // define("USER", "root");
      // define("PASSWORD", "root");
      // define("DB", "php_stage2");

require_once 'function.php';        // подключаем функцию(2)
      // 
      // 
      // 

// Create connection или же, подключение к БД
$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
// Check connection или же, проверка на выполнения подключения
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");    // подключение кириллицы(рус яз)

$sql = "SELECT * FROM users";         // необходим.нам запрос выполнения в БД
$result = mysqli_query($conn, $sql);  // выбор подключение к БД (это начальный, простой)

if (mysqli_num_rows($result) > 0) {   // функ.,считает сколк.строк выбрал $result
  $res = [];    // создаем пустой массив
  // ели строк больше 0 (как у нас), то...
  while($row = mysqli_fetch_assoc($result)) { //(имя перем.выдаем любое) идет преображение запроса, в необх.для нас формат
      $res[] = $row;    // всю БД, кидаем в массив, для дальнейшего ознакмление с ним
  }
  // echo "<pre>";
  // print_r($res);        // читаем БД

  //////////////////////////////// или работаем с ним дальше (вывод картинок из БД)
  $out = " ";
  for($i = 0; $i < count($res); $i++) {
    $out .= '<img src="'.$res[$i]['photo'].'">';
  }
  echo $out;              // вывод картинок.

} else {
  echo "0 results";
}

mysqli_close($conn);    // выключаем подключение к БД
?>


