<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

$conn=new mysqli("localhost","root","", "database");

$result=$conn->query("select * from product");

$data=array();

while($row=$result->fetch_assoc())
{
    $data[]=$row;
}
echo json_encode($data);
?>
