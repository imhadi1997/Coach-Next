<?php
require_once($function_url??'../../assets/php/functions.php');


$userid = $_GET['id'];

$sql = "DELETE FROM users WHERE id = {$userid}";



if(mysqli_query($conn, $sql)){
  header("Location: {$hostname}/coachnext/admin/?dashboard");
}else{
  echo "<p style='color:red;margin: 10px 0;'>Can\'t Delete the User Record.</p>";
}

mysqli_close($conn);


?>
