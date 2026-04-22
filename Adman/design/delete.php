<?php 

 $conn=new mysqli("localhost" , "root" , "" ,"enter");

    $id=$_GET["id"];


     $delete="DELETE FROM products where id=$id";

     $conn->query($delete);

     header("location:../products.php");






?>