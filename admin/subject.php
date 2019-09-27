<?php
session_start();
include("db.php");
include("header.php");




if(isset($_POST['submit']))
{
    $subject=$_POST['subject'];
    
    $empty="";

if(!$subject==$empty)
{
    

     $insert="INSERT INTO `subject` (`subject_name`)VALUES('$subject')";
    
     $query=mysqli_query($conn,$insert);
    
    
    
    $success="The Record Is Inserted Is Sucessfully";
    
}
    else{

$empty= "please enter the class name ";    
    
}
    
}
?>

    <!-- Main content -->
    <section class="content" style="height:500px; ">
      

          <?php 
                if(isset($success))
                {

          ?>

          <div class="alert alert-success alert-dismissible" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Success</h4>
                The Record Is Inserted Sucessfully<a href="login.php"><button style="margin-left:20px;"class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button></a>

                  <?php echo $success;?>
        </div>

          <?php }?>
        
<?php 
                if(isset($empty))
                {

          ?>

          <div class="alert alert-danger alert-dismissible" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Success</h4>
                The Record Is Inserted Sucessfully<a href="login.php"><button style="margin-left:20px;"class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button></a>

                  <?php echo $empty;?>
        </div>

          <?php }?>

       <div class="col-md-9" style="margin-top:10px;margin-left:220px;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Subjects</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Subject</label>

                  <div class="col-sm-10">
                    <input type="text" name="subject" class="form-control" id="inputEmail3" placeholder="Enter Subject Name">
                  </div>
                </div>


              
               <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right" name="submit">Submit </button>
              </div>
 <!-- /.box-footer -->
                </div>
                
            </form>
          </div>
        </div>
</section>
      <?php
        require_once("footer.php");
  ?>
