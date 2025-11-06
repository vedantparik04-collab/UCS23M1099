<?php
$book_id=$_POST['book_id'] ;
$conn=new mysqli("localhost", "root", "", "database");
$stat=$conn->prepare("delete from library where book_id=?");
$stat->bind_param("s",$book_id);
if ($stat->execute()) 
{
    echo "delted";
} 
else 
{
    echo "not delted";
}
?>
