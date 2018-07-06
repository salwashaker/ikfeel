<?php
session_start();
include("config.php");
$name=strip_tags(preg_replace("/\s+/"," ",$_POST['name']));
$title=strip_tags(preg_replace("/\s+/"," ",$_POST['title']));
$number_of_palms=strip_tags(preg_replace("/\s+/"," ",$_POST['number_of_palms']));
$class_of_palms=strip_tags(preg_replace("/\s+/"," ",$_POST['class_of_palms']));
$type_of_palm=strip_tags(preg_replace("/\s+/"," ",$_POST['type_of_palm']));
$number_of_fossils=strip_tags(preg_replace("/\s+/"," ",$_POST['number_of_fossils']));
$type=strip_tags(preg_replace("/\s+/"," ",$_POST['type']));
$fossils=$_POST['fossils'];
$email=strip_tags(trim($_POST['Email']),"");
$password=strip_tags(trim($_POST['password']),"");
$confirm_password=strip_tags(trim($_POST['confirm_password']),"");
mysqli_query($con,"insert into users (name,title,number of palms,class of palms,type of palm,number of fossils,type,fossils,Email) values('$name','$title','$number_of_palms','$class_of_palms','$type_of_palm','$number_of_fossils','$type','$fossils','$Email')");
//echo "insert into users (name,title,number_of_palms,class_of_palms,type_of_palm,number_of_fossils,type,fossils,Email) values('$name','$title','$number_of_palms','$class_of_palms','$type_of_palm','$number_of_fossils','$type','$fossils','$Email')";
$id=mysqli_insert_id($con);
mysqli_query("insert into security(username,password,user_type,per_id)values('$username','$password',0,$id)";
foreach ($_POST[os] as $value) {

    mysqli_query($con,"insert into rest_info(os_id,user_id) values($value,$id)");
}
header ("location:form.php");


?>

