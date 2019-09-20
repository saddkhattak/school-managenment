<?php
include("db.php");
include("header.php");

if(isset($_POST['submit']))
{
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $select=$_POST['selecttype'];
   
    if($password==$repassword)
    {
        $insert="INSERT INTO `accounts`(`username`,`email`,`password`,`usertype`) VALUES('$username','$email','$password','$select')";
    
        
        $query=mysqli_query($conn,$insert);
        
        $success="User Registered Successfully";
    }
    else{
        $error="plz enter the correct password";
        
    }
       
    
        
    
    
}


?>
<section class="content" >
 <div class="col-md-9" style="margin-top:100px; margin-left:200px;">
          <!-- Horizontal Form -->
     
     
     

       <?php
                if(isset($error))
                {
          ?>
          <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Error</h4>
                <?php echo $error;?>
          </div>

          <?php }?>

          <?php 
                if(isset($success))
                {

          ?>

          <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success</h4>
                  <?php echo $success;?>
                  Login to Your Account Click Button: <a href="login.php"><button style="margin-left:20px;"class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button></a>
          </div>

          <?php }?>




     
     
     
     
     
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Your UserName And Password </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>

                  <div class="col-sm-10">
                    <input type="text"  name="name" class="form-control" id="inputEmail3" placeholder="Enter User Name">
                  </div>
                </div>
                
                  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email"  name="email" class="form-control" id="inputPassword3" placeholder="Enter Your Email">
                  </div>
                </div>
                  
                  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password"  name="password" class="form-control" id="inputPassword3" placeholder="Enter Your Password">
                  </div>
                </div>
                  
                  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Re-Password</label>

                  <div class="col-sm-10">
                    <input type="password" name="repassword" class="form-control" id="inputPassword3" placeholder="Enter Conform Password">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Select Type</label>

                  <div class="col-sm-10">               
                    <select class="form-control" name="selecttype">
                    <option>--Select Type--</option>
                    <option value="student">student</option>
                    <option value="teacher">teacher</option>
                    </select>

                    </div>
                    
                    <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                  <a href="login.php" button type="submit"  class="btn btn-info ">Log In</a>
                <button type="submit" name="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

    </div>
</section>


</div>
<?php
include("footer.php");

?>