  
  
  <?php
       $conn=new mysqli("localhost" , "root" , "" ,"enter");
       session_start();
	   if($_SERVER["REQUEST_METHOD"]=="POST"){
		 $user=$_POST["username"];
	  $dp_password=$_POST["password"];
	    

	  $select=  "SELECT * FROM employee where username='$user' && password='$dp_password'";

	  $result= $conn->query($select);

	  $num_row= $result->num_rows;

	  $row=$result->fetch_assoc();
	  if($num_row>0 && $row["pr"]==1)
		{  
			$_SESSION["login"]=$user;
          header("location:dashpoard.php");
		}
		


 

	   }

        
	   
     
 
 
 
 ?>
  
  
  
  
  
  <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - موقع ألعاب الأطفال</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
    <h1>🎉 مرحبًا بك في موقع ألعاب الأطفال!</h1>
</header>

<section class="login-section">

    <!-- مجسم الطفل ثلاثي الأبعاد -->
    <div class="child-3d">
        <div class="head">
            <div class="eye left"></div>
            <div class="eye right"></div>
            <div class="mouth"></div>
        </div>
        <div class="body"></div>
        <div class="arm left"></div>
        <div class="arm right"></div>
        <div class="leg left"></div>
        <div class="leg right"></div>
    </div>

    <!-- نموذج تسجيل الدخول -->
    <form id="loginForm" class="login-form" action="" method="post">
        <h2>تسجيل الدخول</h2>
        <label for="username">الاسم:</label>
        <input type="text" id="username" placeholder="أدخل اسمك" name="username">

        <label for="password">كلمة المرور:</label>
        <input type="password" id="password" placeholder="********" name="password">

        <button type="submit">دخول</button>
        <p id="loginMessage" class="form-message"></p>

         
 <?php
								   if($_SERVER["REQUEST_METHOD"]=="POST"){

								   
								     
								 if($num_row>0 && $row["pr"]==2)
								 {

                                     echo " <div class='alert  alert-warning'>welcom $user you are super visor put not allwade to enter dashboard </div>";

								 }
								 else if($num_row>0 && $row["pr"]==3)
								 {

                                     echo " <div class='alert  alert-warning'>welcom $user you are admin put not allwade to enter dashboard </div>";

                                     		 
								 }
								 else {

                                             echo " <div class='alert  alert-danger'>enter valid data </div>";
    

								 }
								}
		
								 
								 
								 ?>






    </form>
</section>

<script src="../js/login.js"></script>
</body>
</html>
