<?php
      require_once("include/header.php");
       require_once("admin/db.php");

       if(isset($_POST['search']))
          {
              $std_name=$_POST['stdname'];
              $classname=$_POST['classname'];
              header("Location:marksheet.php?std-name=$std_name&class=$classname");
          }

?>

          <!--Slider Stat Here-->
<main role="main">

<div class="col-md-10" style="margin-top:50px;margin-left:40px;">
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Enter Student Name</label>
      <input type="text" class="form-control" name="stdname" >
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Enter Student Name</label>
      <select class="form-control" name="classname">
          <option>--Select Class--</option>
          <?php
                $qry="SELECT * FROM `class`";
                $result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
                while($row=mysqli_fetch_assoc($result))
                {
          ?>
          <option value="<?php echo $row['class'];?>">
                  <?php echo $row['class_name'];?>
          </option>
          <?php }?>
      </select>
    </div>
  </div>
  
  <button type="submit" name="search" class="btn btn-primary">Search Result</button>
</form>
 </div> 



    
</div> <!-- /.container -->


    <?php  require_once("include/footer.php");?>