<?php

include 'config.php';

$productName = $_POST["product_name"];
$productVisit = $_POST["product_visit"];
$productUrl = $_POST["product_url"];
$companyName = $_POST["company_name"];

// $productName = $_GET["product_name"];
// $productVisit = $_GET["product_visit"];
// $productUrl = $_GET["product_url"];
// $companyName = $_GET["company_name"];



$count_sql = "select count(product_url) as c from market_visit where product_name = '$productName'";
$count_result = mysqli_query($db, $count_sql);
$data = mysqli_fetch_assoc($count_result);
$count = $data['c'];
$sql = "";
if($count == 0)
{
    $sql = "insert into market_visit (product_name, product_visit, product_url, company_name) 
            values('$productName', $productVisit, '$productUrl', '$companyName')";
}
else 
{
    $sql = "update market_visit set product_visit = $productVisit where product_name = '$productName'";
}

if (mysqli_query($db, $sql))
{

    $user_sql = "select * from market_current_user where id = 1";
    $user_result = mysqli_query($db, $user_sql);
    $row = mysqli_fetch_assoc($user_result);
    
    $userId = $row["market_userid"];
    
    $sql_track = "insert into market_track (product_name, user_id, product_url, company_name)
            values('$productName', '$userId', '$productUrl', '$companyName')";
    if(mysqli_query($db, $sql_track))
    {
        
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}





