<?php
ob_start();
    session_start();
    require_once("db.php");
    require_once("header.php");
    require_once("sidebar.php");

       if(isset($_POST['submit']))
           
       {
            $stdid=$_GET['std_id'];
           $english=$_POST['english'];
           $maths=$_POST['maths'];
           $urdu=$_POST['urdu'];
           $islamiyat=$_POST['islamiyat'];
           $pakstudy=$_POST['pakstudy'];
           $computerscience=$_POST['computerscience'];
           $biology=$_POST['biology'];
           $physics=$_POST['physics'];
           $chemistry=$_POST['chemistry'];
           
           
           $insert="INSERT INTO `results`(`english`,`maths`,`urdu`,`islamiyat`,`pak_study`,`computer_science`,`biology`,`physics`,`chemistry`,`r_id`)VALUES('$english','$maths','$urdu','$islamiyat','$pakstudy','$computerscience','$biology','$physics','$chemistry','$stdid') ";
           
           $query=mysqli_query($conn,$insert);
           
           $success="The Marks Is Added Sucessfully ";
            header("Location:result.php?std_id=$stdid&msg=Result Submit Successfully");
           
       }
           


?>
<div  class="col-md-12" style="margin-left:200px">

 <?php 
                if(isset($success))
                {

          ?>

          <div class="alert alert-success alert-dismissible" >
                <h4><i class="icon fa fa-check"></i>Success </h4>
                
                  <?php echo $success;?>
        </div>

          <?php }?>
</div>

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     
     <div>

         
            <?php
                if(isset($_GET['std_id']))
                {
                  $std_id=$_GET['std_id'];
                  $qry=mysqli_query($conn,"SELECT * FROM `register` where `r_id`='$std_id'") or die(mysqli_error($conn));
                  $row=mysqli_fetch_assoc($qry);

                  $class_id=$row['class_id'];


                  // query to fetch class Name:
                $qry1=mysqli_query($conn,"SELECT * FROM `class`  where `class_id`='$class_id'") or die(mysqli_error($conn));
                    $row1=mysqli_fetch_assoc($qry1);
                }
            ?>
            <table border="2" width="500px" align="center" >
                    <tr>
                          <td><strong>Student Name: </strong></td>
                          <td><?php echo $row['name'];?></td>
                    </tr>

                     <tr>
                          <td><strong>Father Name: </strong></td>
                          <td><?php echo $row['fname'];?></td>
                    </tr>
                
                     <tr>
                          <td><strong>Class Name: </strong></td>
                          <td><?php echo $row1['class_name'];?></td>
                    </tr>

            </table>
     </div>
        
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Result</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-md-9" style="margin-top:30px;margin-left:150px;">
          <!-- Horizontal Form -->
         
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">English</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="english"  placeholder="Enter Your Marks">
                      
                  </div>
                </div>
                  
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Maths</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="maths" placeholder="Enter Your Marks">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Urdu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="urdu"  placeholder="Enter Your Marks">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Islamiyat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="islamiyat" placeholder="Enter Your Marks">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pak Study</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pakstudy"  placeholder="Enter Your Marks">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Computer Science</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="computerscience" placeholder="Enter Your Marks">
                  </div>
                </div>
                  
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Biology</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="biology" placeholder="Enter Your Marks">
                  </div>
                </div>
                  
                  
                  
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Physics</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="physics" placeholder="Enter Your Marks">
                  </div>
                </div>
                  
                  
                  
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Chemistry</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="chemistry" placeholder="Enter Your Marks">
                  </div>
                </div>
                  
                  
                  

              </div>
               <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
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