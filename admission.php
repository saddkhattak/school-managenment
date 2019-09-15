<?php
include("include/header.php");
?>

<section>
    
	<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>Admission open </h5>
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="name">Your Name</label>
								<div class="input-group">
									<span class="input-group-addon"></span>
				                    <input type="text" class="form-control" name="name" placeholder="Enter your Name"/>
							</div>
						</div>

						<div class="form-group">
							<label for="fname">Father Name</label>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="text" class="form-control" name="fname" placeholder="Enter your Fname"/>
							</div>
						</div>

						<div class="form-group">
							<label for="class">Class</label>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="text" class="form-control" name="class" placeholder="Enter your Class"/>
    
								</div>
                                
                                    <select>
                                        <option>Science</option>
                                        <option>Art</option>                                    
                                    </select>
						</div>

						<div class="form-group">
							<label for="grade">Grade</label>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="grade" class="form-control" name="grade" placeholder="Enter your grade"/>
								</div>
						</div>

						<div class="form-group">
							<label for="previous">Previous school</label>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="Previousschool" class="form-control" name="previousschool" placeholder="Enter Your Previous School"/>
								</div>
						</div>

						<div class="form-group">
							<label for="address">Address</label>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="password" class="form-control" name="address" placeholder="Enter Your Adddress "/>
								</div>
						</div>

						<div class="form-group">
							<label for="Contact Number">Contact Number</label>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="Contact Number" class="form-control" name=" Enter Your Contact Number" placeholder="Confirm your Password"/>
								</div>
						</div>

				<button type="submit">SUBMIT</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->


</section>
<?php
include("include/footer.php");

?>