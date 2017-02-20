<?php
include("funciones.php");
$con=connect();

$user = base64_decode ($_GET['u']);
$status = base64_decode ($_GET['tm']);

echo "Nombre de usuario: $user";
echo "<br>";
echo "Timestamp: $status";
echo "<br>";

  
$total = buscar('JuegOStrower');
if($total==0){
    echo 'Este usuario no está en la base de datos';
}else if ($total==1){
    echo 'Este usuario está en la base de datos';
} else {
    echo 'Este usuario está '.$total.' veces en la base de datos';
}
  echo mysqli_result;

mysqli_close($con);
?>

