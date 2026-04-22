<?php
    $conn=new mysqli("localhost", "root" ,"" , "enter");
    $select="SELECT * FROM products";
    $result=$conn->query("$select");
      
    
    ?>


<table class="table table-bordered table-striped">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>count</th>
        <th>img</th>
        <th>price</th>
        <th>prand</th>
        <th>dis</th>
        <th>controls</th>
        
        
        
    </tr>
    
    <?php
    while ($row=$result->fetch_assoc())
    {
        ?>
        <tr>
        <td><?= $row["id"]?></td>
        <td><?=$row["الاسم"]?></td>
        <td><?=$row["العدد"]?></td>
        <td><img src="img/<?=$row["الصور"]?>" style="width:50px;height:50px;"></td>
        <td><?=$row["السعر"]?></td>
        
        <td><?php
        
        $name_brand=$row["النوع"];
        $select_brand="SELECT * FROM النوع where id='$name_brand'";
        $result_brand=$conn->query("$select_brand");
        $row_brand=$result_brand->fetch_assoc();
        echo $row_brand["النوع"];
        
        ?>
    
    
    </td>
    <td><?=$row["الوصف"]?></td>
        <td>
          <a href="?name=update&id=<?=$row["id"]?>"><button class="btn btn-primary">update</button></a>
          <a href ="design/delete.php?id=<?=$row["id"]?>"><butto class="btn btn-danger">delete</button></a>
        </td>
        
        
        </tr>
        <?php
    }
    ?>
    


    
    
    





</table>
<a href="?name=add"><button class="btn btn-success">add product</button></a>