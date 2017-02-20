<?php
echo "Funciones cargadas correctamente<br>";

function connect() {
$con=mysqli_connect("sql10.freemysqlhosting.net","sql10159749","dgK8ewceDm","sql10159749");
if (mysqli_connect_errno())
{echo "Failed to connect to MySQL: " . mysqli_connect_error();} else {echo "Conectado a la base de datos<br>";}
}

function add($username) {
  (mysqli_query($con,"INSERT INTO Users (Username, Status) VALUES ($username, 'online')"));
}

function edit($username, $status){
  mysqli_query("UPDATE Users SET Status=$status WHERE Username=$username",$con);
  }
  
function remove($username){
  mysqli_query("DELETE FROM Users WHERE Username=$username",$con);
}

function buscar($username){
  return mysqli_num_rows(mysqli_query("FROM Users WHERE Username=$username"),$con);
}
?>
