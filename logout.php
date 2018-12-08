<?php 

include 'config.php';
$sql = "delete from market_current_user";

if(mysqli_query($db, $sql))
{
    header("Location: index.php");
}
else
{
    echo "delete error";
}
?>