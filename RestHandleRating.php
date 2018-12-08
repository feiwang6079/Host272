<?php

include 'config.php';

$productName = $_POST["product_name"];
$productRating = $_POST["product_rating"];
$productUrl = $_POST["product_url"];
$companyName = $_POST["company_name"];

// $productName = $_GET["product_name"];
// $productVisit = $_GET["product_visit"];
// $productUrl = $_GET["product_url"];
// $companyName = $_GET["company_name"];

$count_sql = "select count(product_url) as c from market_rating where product_name = '$productName'";
$count_result = mysqli_query($db, $count_sql);
$data = mysqli_fetch_assoc($count_result);
$count = $data['c'];
$sql = "";
if($count == 0)
{
    $sql = "insert into market_rating (product_name, product_rating, product_url, company_name)
            values('$productName', $productRating, '$productUrl', '$companyName')";
}
else
{
    $sql = "update market_rating set product_rating = $productRating where product_name = '$productName'";
}

if (mysqli_query($db, $sql))
{
    echo "isFinish";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}





