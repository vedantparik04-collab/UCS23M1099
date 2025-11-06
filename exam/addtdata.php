<?php
$book_name=$_POST['book_name'] ;
$book_id=$_POST['book_id'] ;
$date=$_POST['date'] ;

$conn=new mysqli("localhost", "root", "", "database");
$stat=$conn->prepare("insert into library (book_name,book_id,`date`) values (?,?,?)");
$stat->bind_param("sss",$book_name, $book_id, $date);

if ($stat->execute()) 
{
    echo "inserted";
}
else 
{
    echo "not inserted";
}

?>
