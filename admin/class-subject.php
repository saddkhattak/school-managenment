<?php
    session_start();
    require_once("db.php");
    require_once("header.php");
    require_once("sidebar.php");


    if(isset($_POST['submit']))
    {
        $subject=$_POST['subject'];
        $class=$_POST['class'];
        mysqli_query($conn,"INSERT INTO `class_subject` (`class_id`,`subject_id`) VALUES ('$class','$subject')") or die(mysqli_error($conn));
        $msg="Record Inserted Successfully";
    }

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
                if(isset($msg))
                {
          ?>
          <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $msg;?></h4>
          </div>
    <?php }?>
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     
        
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Select Class Name & Subject</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-md-9" style="margin-top:30px;margin-left:150px;">
          <!-- Horizontal Form -->
         
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Select Class</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="class">
                     <option value="">--Select Class--</option>
                     <?php
                            $qry=mysqli_query($conn,"SELECT * FROM `class`") or die(msyqli_error($conn));

                            while($row=mysqli_fetch_assoc($qry))
                            {

                     ?>
                    <option value="<?php echo $row['class_id'];?>"><?php echo $row['class_name'];?></option>
                   <?php }?>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Select Subject</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="subject">
                     <option value="">--Select Subject--</option>
                 <?php
                            $qry1=mysqli_query($conn,"SELECT * FROM `subject`") or die(msyqli_error($conn));

                            while($row1=mysqli_fetch_assoc($qry1))
                            {

                     ?>
                    <option value="<?php echo $row1['subject_id'];?>"><?php echo $row1['subject_name'];?></option>
                   <?php }?>

                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
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
            </div>
            
          </div>
        </div>
        
    </section>
    <!-- /.content -->
<!-- /.content-wrapper -->
  <?php
        require_once("footer.php");
  ?>