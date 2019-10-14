<?php
    require_once("db.php");
    require_once("header.php");

    // login code

      if(isset($_POST['login']))
      {
            $username=$_POST['username'];
            $password=$_POST['password'];

            //query to fetch record
            $sql=mysqli_query($conn,"SELECT * FROM `accounts` where `username`='$username' AND `password`='$password'") or die(mysqli_error($conn));
            $row=mysqli_fetch_assoc($sql);

            // count fuction to check fetch record
             $count=mysqli_num_rows($sql);


             if($count==1)
             {
                  session_start();
            $username=$row['username'];
            $usertype=$row['usertype'];

        
                   // assign username to session variable

                $_SESSION['username']=$username;
                $_SESSION['usertype']=$usertype;
                 
               if($usertype=="admin")
               {
                 header("Location:index.php?msg=User login Successfully");
               }

               if($usertype=="student")
               {
                 header("Location:index.php?msg=User login Successfully");
               }
                if($usertype=="teacher")
               {
                 header("Location:index.php?msg=User login Successfully");
               }
               
                 


             }else
             {

                  $error="Username & Password is incorrect";
             }
           

      }
    

?>
  
  <!-- Content Wrapper. Contains page content -->
 
    

    <!-- Main content -->
    <section class="content" style="height:500px;">
      
          

       <div class="col-md-9" style="margin-top:150px;margin-left:150px;">
          <!-- Horizontal Form -->
          <div class="box box-info">
              <div style="color:red;font-size:16px;text-align:center"><?php if(isset($error)) { echo $error;}?></div>
            <div class="box-header with-border">
              <h3 class="box-title">Enter Your UserName and Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
               <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" name="login" class="btn btn-info pull-right">Log in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
        require_once("footer.php");
  ?>