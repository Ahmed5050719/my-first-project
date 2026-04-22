    <?php
  
         $conn=new mysqli("localhost", "root" ,"" , "enter");

  $id = $_GET["id"];
	$sel_target="SELECT * FROM products where id = '$id'";
	$result_target=$conn->query($sel_target);
	$data_target=$result_target->fetch_assoc();
  
  ?> 





<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل اللعبة - موقع ألعاب الأطفال</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- الهيدر -->
    <header>
        <h1>🎲 تفاصيل اللعبة</h1>
        <nav>
            <a href="index.php">الرئيسية</a>
            <a href="games.php">الألعاب</a>
            <a href="favorites.html">المفضلة</a>
            <a href="contact.html">تواصل معنا</a>
            <a href="about.html">من نحن</a>
        </nav>
    </header>

    <!-- محتوى اللعبة -->
    <section class="game-details">
        <div class="main-image">
            <img id="mainImg" src="Adman/img/<?=$data_target["الصور"]?>" alt="لعبة الألوان" style = "width:350px;">
        </div>
        <h1>الاسم : <?=$data_target["الاسم"]?></h1>

      

        <!-- الفيديو -->
        <!-- <div class="video-section"> -->
            <div>
            <h2>فيديو توضيحي</h2>
            <video width="100%" controls>
                <source src="vidos/1.mp4" type="video/mp4">
                متصفحك لا يدعم عرض الفيديو.
            </video>
        </div>

        <!-- وصف وفوائد -->
        <div class="game-info">
            <h3>وصف اللعبة</h3>
            <p><?=$data_target["الوصف"]?></p>
            <h2 style = "color:red;"> العمر : <?=$data_target["العمر"]?></h2>
            <h3>العدد : <?=$data_target["العدد"]?></h3>
            
          
            <h3>مستوى الأمان</h3>
            <p>✅ آمنة للأطفال تمامًا، بدون أي محتوى غير مناسب.</p>

            <button id="addFavorite">❤️ إضافة إلى المفضلة</button>
        </div>
    </section>

    <!-- الفوتر -->
    <footer>
        <p>© 2026 جميع الحقوق محفوظة لموقع ألعاب الأطفال</p>
    </footer>

    <script src="js/game-details.js"></script>
</body>
</html>
