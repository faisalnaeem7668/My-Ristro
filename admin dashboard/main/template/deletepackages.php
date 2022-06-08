<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM packages WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
    header("Location:packages.php");

}
else
{
    echo "<center><h3><p style='color:red'>Can't Delete Package </p></h3></center>";
}
mysqli_close($conn);
?>