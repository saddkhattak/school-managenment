<?php
session_start();
include("db.php");
include("header.php");


    if(isset($_POST['submit']))
    {
        $subject=$_POST['subject'];
        
        $class=$_POST['class'];
        
//        this is the insert query
        
            $Insert="INSERT INTO `class-subject` (`class_id`,`subject_id`) VALUES ('$class','$subject')";
        
        $query=mysqli_query($conn,$Insert);
            
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
                <?php echo $msg;?>
          </div>
    <?php }?>
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     
        
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Select Class Name & Subject</b></h3>
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
                      
                      //this is select query which isselected from class table 
                       
                      $select1="SELECT * FROM `class`" ;
                      
                            $query1=mysqli_query($conn,$select1);
                            
                      while($row1=mysqli_fetch_assoc($query1))
                            {

                     ?>
                    <option value="<?php echo $row1['class_id'];?>">
                        <?php echo $row1['class_name'];?></option>
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
//    now we select the subject from subject table
                      
                      $select2="SELECT * FROM `subject`";
                      
                      $query2=mysqli_query($conn,$select2);
                      
                        while($row2=mysqli_fetch_assoc($query2))
                            {

                     ?>
                    <option value="<?php echo $row2['subject_id'];?>">
                        <?php echo $row2['subject_name'];?></option>
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
  </div>
  <!-- /.content-wrapper -->
  <?php
        require_once("footer.php");
  ?>









