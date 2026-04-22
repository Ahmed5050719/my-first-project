<?php
$conn=new mysqli("localhost" , "root" , "" ,"enter");
              


       $name = $_POST["name"];
    
        $count= $_POST["count"];
       $price = $_POST["price"];
   

        $descr =$_POST["descr"];
       $brand = $_POST["brand"];


   




 
       


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
              
              
      

    $insert="INSERT INTO products(الاسم , العدد, الصور, السعر , النوع  , الوصف)
     VALUES ('$name' , $count , '$new_name' , '$price' , '$brand'   , '$descr')" ;
       
            $conn->query($insert);


         
    header("location : products.php");

        


?>