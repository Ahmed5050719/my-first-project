<?php
$conn=new mysqli("localhost" , "root" , "" ,"enter");

    $id=$_GET["id"];
              


       $name = $_POST["name"];
    
        $count= $_POST["count"];
       $price = $_POST["price"];
   

        $descr =$_POST["descr"];
      
       $brand = $_POST["brand"];


      


   


              if($_FILES["image"]["error"]==0){

      
       


   $img_name=$_FILES["image"]["name"];
   $img_tmp=$_FILES["image"]["tmp_name"];
   $img_size=$_FILES["image"]["size"];

      $img_exp=explode("." , $img_name);
      $img_ext=end($img_exp);
     $extens=["jpg","png","gif","jpeg"];
          
           if(!in_array($img_ext , $extens))
           {
                echo "image type error";
                exit();
              }


                if($img_size > 3000000)
                {
                  echo "file is too large";
                  exit();
                }
                     

                $new_name=time().rand(1,100000).$img_name;

                move_uploaded_file($img_tmp , "../img/$new_name");
              
              
                      $update = "UPDATE products 
SET 
    الاسم='$name', 
    العدد='$count', 
    الصور='$new_name', 
    السعر='$price', 
    النوع='$brand', 
   
    الوصف='$descr'
WHERE id='$id'";
              }
              else{
                       $update = "UPDATE products 
SET 
  الاسم='$name', 
    العدد='$count', 
    السعر='$price', 
    النوع='$brand', 
    الوصف='$descr'
WHERE id='$id'";
              }
    
                          $conn->query($update);                 
 
    header("location : ../products.php");

    ?>