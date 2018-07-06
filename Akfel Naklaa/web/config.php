<?php
$con = mysqli_connect("localhost","root","","code");
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_query($con,"SET COLLATION_CONNECTION = 'utf8_general_ci'");
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING| E_PARSE | E_NOTICE );
try {
  $error_code=2;
  header ("location:form.php? error_code=$error_code");
}
//catch exception
catch(Exception $e) {
  echo "لم يتم خزن البيانات" .$e->getMessage();
}$error_code=1;
 header ("location:form.php? error_code=$error_code");

?>
