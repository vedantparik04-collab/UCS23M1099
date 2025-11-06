<?php
$name=$_POST['name'];
$qty=$_POST['qty'];

$conn=new mysqli("localhost","root","","database");
$stat=$conn->prepare("insert into product(name,qty) values(?,?)");
$stat->bind_param("si",$name,$qty);

if ($stat->execute()) 
{
    echo "inserted";
}
else 
{
    echo "not inserted";
}
?>