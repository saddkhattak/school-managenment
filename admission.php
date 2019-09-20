<?php
include("include/header.php");
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
		padding: 30px 0;	
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f0f0f0;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
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
			<label>Admission</label>
            <input type="text" class="form-control" name="admission" required="required">
        </div>
		<div class="form-group">
			<label>Address</label>
            <input type="text" class="form-control" name="text" required="required">
        </div>  
        
        <div class="form-group">
                  <label>Select Type</label>

                  <div class="col-sm-12">               
                    <select class="form-control" name="selecttype">
                    <option>--Select Type--</option>
                    <option value="Science">Science</option>
                    <option value="Art">Art</option>
                    </select>

                    </div>
        </div>
    
        
        
        
        
        
		<div class="form-group">
			<label>Phone Number</label>
            <input type="text" class="form-control" name="text" required="required">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
		</div>	
    </form>
    
</div>



<?php
include("include/footer.php");

?>