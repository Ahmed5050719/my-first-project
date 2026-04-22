    
     <?php
  
         $conn=new mysqli("localhost", "root" ,"" , "enter");
  
  
  ?> 
    
    
    
    
    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الألعاب - موقع ألعاب الأطفال</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <!-- الهيدر -->
    <header>
        <h1>🎮 تصفح جميع الألعاب</h1>
        <nav>
            <a href="index.php">الرئيسية</a>
            <a href="games.html">الألعاب</a>
            <a href="favorites.html">المفضلة</a>
            <a href="contact.html">تواصل معنا</a>
            <a href="about.html">من نحن</a>
        </nav>
    </header>

    <!-- فلترة الألعاب -->
    <section class="filter-section">
        <input type="text" id="search" placeholder="🔍 ابحث عن اللعبة..." />

        <select id="ageFilter">
            <option value="">كل الأعمار</option>
            <option value="3-5">3-5 سنوات</option>
            <option value="5-7">5-7 سنوات</option>
            <option value="6-9">6-9 سنوات</option>
        </select>

        <select id="typeFilter">
            <option value="">كل الأنواع</option>
            <option value="ألوان">ألوان</option>
            <option value="أرقام">أرقام</option>
            <option value="تركيز">تركيز</option>
        </select>
    </section>

    <!-- قائمة الألعاب -->

    <!-- <section class="games-grid" id="gamesGrid"> -->



    <section>
        <!-- الألعاب ستظهر هنا ديناميكياً -->
         <?php 
								$sel_pro="SELECT * FROM products";
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

                                         <div class="card">
  <img src="Adman/img/<?=$data_pro["الصور"]?>" class="card-img-top" alt="..."  style="width:350px;">
  <div class="card-body">
    <h1 class="card-title"> الاسم : <?=$data_pro["الاسم"]?></h1>
   <h3>  العمر : <?=$data_pro["العمر"]?></h3>
       <h2>  السعر : <?=$data_pro["السعر"]?><h2>
      
    <a href="game-details.php?id=<?=$data_pro["id"]?>" class="btn btn-primary">عرض التفاصيل</a>
  </div>
</div>  


                                    <?php
                                }
                                ?>

                            
    </section>

    <!-- الفوتر -->
    <footer>
        <p>© 2026 جميع الحقوق محفوظة لموقع ألعاب الأطفال</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/games.js"></script>
</body>
</html>
