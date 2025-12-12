<?php
include "config.php";
if($_SESSION["blogid"] == '0'){
  header("Location: {$hostname}/coachnext/admin/?blog_detail");
}
$userid = $_GET['id'];

$sql = "DELETE FROM blog WHERE blogid = {$userid}";

if(mysqli_query($conn, $sql)){
  header("Location: {$hostname}/coachnext/admin/?blog_detail");
}else{
  echo "<p style='color:red;margin: 10px 0;'>Can\'t Delete the User Record.</p>";
}

mysqli_close($conn);

?>
