<?php
include("include/header.php");
include("admin/db.php");
//  require_once("admin/inc/db.php");

if(isset($_POST['submit']))
        {
              $name=$_POST['name'];
              $fname=$_POST['fname'];
              $email=$_POST['email'];
              $mobile=$_POST['mble'];
              $address=$_POST['address'];
              $class=$_POST['class'];
            
   mysqli_query($conn,"INSERT INTO `register` (`name`,`fname`,`email`,`mobile_num`,`address`,`class_id`,) VALUES ('$name','$fname','$email','$mobile','$address','$class')") or die(mysqli_error($conn));

              header("Location:admission.php?msg=Registered Successfully");

        }
?>
<style>
	body{
		color: #999;
		background: #e2e2e2;
		font-family: 'Roboto', sans-serif;
	}
	.form-control{
		min-height: 41px;
		box-shadow: none;
		border-color: #e1e1e1;
	}
	.form-control:focus{
		border-color: #00cb82;
	}	
    .form-control, .btn{        
        border-radius: 3px;
    }
	.form-header{
		margin: -30px -30px 20px;
		padding: 30px 30px 10px;
		text-align: center;
		background: #00cb82;
		border-bottom: 1px solid #eee;
		color: #fff;
	}
	.form-header h2{
		font-size: 34px;
		font-weight: bold;
        margin: 0 0 10px;
		font-family: 'Pacifico', sans-serif;
    }
	.form-header p{
		margin: 20px 0 15px;
		font-size: 17px;
		line-height: normal;
		font-family: 'Courgette', sans-serif;
	}
    .signup-form{
		width: 390px;
		margin: 0 auto;	
/*        height:3400px;*/
		padding: 30px 0;	
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f0f0f0;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        height:900px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}		
	.signup-form label{
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form input[type="checkbox"]{
		margin-top: 2px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #00cb82;
		border: none;
		min-width: 200px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #00b073 !important;
        outline: none;
	}
    .signup-form a{
		color: #00cb82;		
	}
    .signup-form a:hover{
		text-decoration: underline;
	}
</style>
<div><?php if(isset($_GET['msg'])){ echo $_GET['msg'];}?></div>
<div class="signup-form">
    <form method="post" action="">
		<div class="form-header">
			<h2>Admission Open</h2>
			<p>Fill out this form to get new addmission</p>
		</div>
        <div class="form-group">
			<label>Name</label>
        	<input type="text" class="form-control" name="name" required="required">
        </div>
        <div class="form-group">
			<label>Father Name</label>
        	<input type="text" class="form-control" name="fname" required="required">
        </div>
		<div class="form-group">
			<label>Email</label>
            <input type="email" class="form-control" name="email" required="required">
        </div>
		<div class="form-group">
			<label>Mobile Number</label>
            <input type="text" class="form-control" name="mble" required="required">
        </div>
        
		<div class="form-group">
			<label>Address</label>
            <input type="text" class="form-control" name="address" required="required">
        </div>
        
                    <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Select Class for Admission</label>
              <div class="cols-sm-8">
                <div class="input-group">
<!--                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>-->
                  <select class="form-control" name="class">
                      <option>--Select Class--</option>
               
                <?php
                            $qry1=mysqli_query($conn,"SELECT * FROM `class`") or die(msyqli_error($conn));

                            while($row1=mysqli_fetch_assoc($qry1))
                            {

                ?>     
          <option value="<?php echo $row1['class_id'];?>"><?php echo $row1['class_name'];?></option>
                  <?php }?>
                  
                  </select>
                  
                </div>
              </div>
                        
                        
                        
              
                    <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Select Type Admission</label>
              <div class="cols-sm-8">
                <div class="input-group">
<!--                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>-->
                  <select class="form-control" >
               
          <option>--Select Type--</option>
          <option>Science</option>
          <option>Art</option>
                
                  
                  </select>
                  
                </div>
              </div>
            
                        
                        
                        <br>
                        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
			<button type="submit"  name="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
		</div>	
    
   </div>
</div>
    </form>


<?php
include("admin/footer.php");

?>