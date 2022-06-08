<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM myregister WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
    header("Location:tables.php");

}
else
{
    echo "<center><h3><p style='color:red'>Can't Delete User </p></h3></center>";
}
mysqli_close($conn);
?>