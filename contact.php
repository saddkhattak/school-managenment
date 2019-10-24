<?php

include("admin/db.php");
include("include/header.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $messege=$_POST['messege'];
    
    $insert="INSERT INTO `contactus` (`name`,`email`,`messege`) VALUES('$name','$email','$messege')";
    
    $query=mysqli_query($conn,$insert);
    
    $success="The Messege Is Successfully Send";
    
    
}


?>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">
<link href="css/contact.css" rel="stylesheet">
<style>


.image{
background-image: url(images/slide1.jpeg);

}
</style>

<body>
         <?php 
                if(isset($success))
                {

          ?>

          <div class="alert alert-success alert-dismissible" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Success</h4>
                
                  <?php echo $success;?>
        </div>

          <?php }?>
        
    <section class="contact image  pt-100 pb-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <p>get in touch</p>
                     <h4>contact me</h4>
                  </div>
               </div>
            </div>
             
            <div class="row text-center">
                  <div class="col-md-8">
                     <form action="" method="post" class="contact-form">
                        <div class="row">
                           <div class="col-xl-12">
                              <input type="text" placeholder="name" name="name">
                           </div>
                           <div class="col-xl-12">
                              <input type="text" placeholder="email" name="email">
                           </div>
                           <div class="col-xl-12">
                              <textarea name="messege" placeholder="message" cols="30" rows="10"></textarea>
                              <input type="submit" name="submit" value="send message">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-4">
                     <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <p>Pardise Public High school Dabb Main Sabir Abad Road Karak (Pakistan)</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <p>0927260258</p>
                        <p>03339968302</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>pphs27200@gmail.com.com</p>
                     </div>
                  </div>
            </div>
         </div>
      </section>

    
<?php
include("include/footer.php");

?>