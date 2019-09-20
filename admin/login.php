<?php
include("db.php");
include("header.php");

if(isset($_POST['login']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    
     $select="SELECT * FROM `accounts` where `username`='$name' AND `password`='$password'";
    
     $query=mysqli_query($conn,$select);
    
    $row=mysqli_fetch_assoc($select);
    
    $count=mysqli_num_rows($query);
    
    if($count==1)
    {
        
        session_start();
        
          $name=$row['name'];
                   // assign username to session variable

                $_SESSION['name']=$name;

                header("location:index.php?msg=User login Successfully");
                 


             }else
             {

                  $error="Username & Password is incorrect";
             }
    
}
    
?>

<section class="content" style="height:520px;">
 <div class="col-md-9" style="margin-top:150px; margin-left:200px;">
          <!-- Horizontal Form -->
          <div class="box box-info">
                <div style="color:red;font-size:16px;text-align:center"><?php if(isset($error)) { echo $error;}?></div>
            <div class="box-header with-border">
              <h3 class="box-title">Enter Your UserName And Password </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">UserName</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
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
                <button type="submit" name="login" class="btn btn-info pull-right">Log In</button>
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
