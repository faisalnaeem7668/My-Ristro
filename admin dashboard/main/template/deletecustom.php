<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM tablecustom WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
    header("Location:custom.php");

}
else
{
    echo "<center><h3><p style='color:red'>Can't Delete This Customization</p></h3></center>";
}
mysqli_close($conn);
?>