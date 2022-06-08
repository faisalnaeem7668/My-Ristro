<?php 
$email=$_SESSION["email"];
if(!isset($email))
{
    header("Location:/myristro/admin dashboard/main/template/login.php");
}
?>
<?php 
$host="localhost";
$username="root";
$password="";
$db="my_ristro";
$port="3306";
$conn=mysqli_connect($host,$username,$password,$db,$port) or die("connection not established");

session_start();
session_unset();
session_destroy();


?>