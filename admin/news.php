<?php
 ob_start();
include("db.php");


if(isset($_POST['submit']))
{
$dir="images/";
$text=$_POST['text'];

$image=$_FILES['file']['name'];
 $tmp_image=$_FILES['file']['tmp_name'];

              if($image!="")
              {
                  $fdir=$dir.$image;
                  move_uploaded_file($tmp_image,$fdir);
              }


$insert="INSERT INTO `letest_news` (`news_image`,`news_text`) VALUES('$image','$text')";

$query=mysqli_query($conn,$insert);

}
?>

<form action="" method="post">

       <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Upload Image</label>
              <div class="cols-sm-8">
                <div class="input-group">
<!--                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>-->
                  <input  type="file" class="form-control" name="file">
                    
                  
                </div>
              </div>
            </div>

    
       <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Text Of News</label>
              <div class="cols-sm-8">
                <div class="input-group">
<!--                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>-->
                  <input  type="text" class="form-control" name="text">
                    
                  
                </div>
              </div>
            </div>


    <input type="submit" name="submit" >
    

</form>
