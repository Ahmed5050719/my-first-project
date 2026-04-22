
  <?php
  
         $conn=new mysqli("localhost", "root" ,"" , "enter");
  
  
  ?> 




<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع ألعاب الأطفال</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- الهيدر -->
    <header>
        <h1>🎈 مرحبًا بكم في عالم الألعاب الممتع!</h1>
        <nav>
            <a href="index.html">الرئيسية</a>
            <a href="games.php">الألعاب</a>
            <a href="favorites.html">المفضلة</a>
            <a href="contact.html">تواصل معنا</a>
            <a href="about.html">من نحن</a>
             <a href="Adman/index.php" >لوحة التحكم</a>
        </nav>
    </header>

    <!-- بانر متحرك -->
    <section class="slider">
        <div class="slides">
          
                                            
									
                         <?php 
								$sel_pro="SELECT * FROM products ORDER BY السعر DESC limit 3";
								$result_pro=$conn->query($sel_pro);
								$x = 0;
								while($data_pro=$result_pro->fetch_assoc())
								{
									?>	<div class="item  <?php
										if($x == 0)
											{
												echo "active";
												$x++;
											}
									?> ">
                                    <img src="adman/img/<?=$data_pro["الصور"]?>" class="girl img-responsive" alt="" style="width:600px;
                                    hight:auto;
                                    " />
										
            
                                <?php
                                }?>
                                     
                                    
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </section>

    <!-- قسم الألعاب المميزة -->
    <section class="featured-games">
        <h2>🧸 ألعاب مميزة</h2>
            
<?php 
								$sel_pro="SELECT * FROM products ORDER BY السعر DESC limit 3";
								$result_pro=$conn->query($sel_pro);
								$x = 0;
								while($data_pro=$result_pro->fetch_assoc())
								{
									?>	
									
         

        <div class="card">
  <img src="Adman/img/<?=$data_pro["الصور"]?>" class="card-img-top" alt="..."  style="width:350px;">
  <div class="card-body">
    <h1 class="card-title"> الاسم : <?=$data_pro["الاسم"]?></h1>
   <h3>  العمر : <?=$data_pro["العمر"]?></h3>
       <h2>  السعر : <?=$data_pro["السعر"]?><h2>
      
    <a href="game-details.php?id=<?=$data_pro["id"]?>" class="btn btn-primary">عرض التفاصيل</a>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </div>
          
                         
           
                      

              
             <?php

                                } 
                                ?>
           
            
          
    </section>

    <!-- الشخصيات الكرتونية -->
    <section class="characters">
        <img src="image/12.jpg" alt="شخصية 1" class="char char1">
        <img src="image/11.jpg" alt="شخصية 2" class="char char2">
    </section>

    <!-- الفوتر -->
    <footer>
        <p>© 2026 جميع الحقوق محفوظة لموقع ألعاب الأطفال</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
</body>
</html>
