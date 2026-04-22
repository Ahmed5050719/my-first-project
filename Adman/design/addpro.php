<?php 
 $conn=new mysqli("localhost" , "root" , "" ,"enter");

?>



<div class="row">
    <div class="col-lg-12">
        <form method="post" action=" design/doadd.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" style="font-weight: bold;"> Product name :</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="price" style="font-weight: bold;"> Price :</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="count" style="font-weight: bold;"> Count :</label>
                <input type="number" class="form-control" name="count">
            </div>
            <div class="form-group">
                <label for="description" style="font-weight: bold;"> Description :</label>
                <textarea class="form-control" name="descr" style="height:150px;"></textarea>
            </div>
            <div class="form-group">
                <label for="image" style="font-weight: bold;"> Image :</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="form-group">
                <label for="category" style="font-weight: bold;"> Category :</label>
                <select class="form-control" name="category">
                 

                </select>
            </div>
            <div class="form-group">
                <label for="brand" style="font-weight: bold;"> Brand :</label>
                <select class="form-control" name="brand">
                    <?php
                    $sel_brand = "SELECT * FROM النوع";
                    $result_brand = $conn->query($sel_brand);
                    while ($row_brand = $result_brand->fetch_assoc()) {
                        
                                          ?>
                                              <option value="<?=$row_brand["id"]?>"><?=$row_brand["النوع"]?></optiob>
                                          <?php

                    } 
                    ?> 
                </select>
            </div>

               
                    <button type="submit" class="form-control btn btn-success">ADD products</button>
                




        </form>

    </div>
</div>