<?php
// include "admin/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>MOBILE Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>


<body>
    <?php $page ='signup';
    include 'components/navbar.php' 
    ?>
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Sign Up</h1>
            <span>Sign in to buy any product from our website</span>
          </div>
        </div>
      </div>
    </div>
    
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-2/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Slow-carb next level shoindcgoitch ethical authentic, poko scenester</h1>
      <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p>
    </div>
    <div class="lg:w-3/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">

                 <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

            <form class="row g-3 needs-validation" action="functions/authcode.php" method="POST">
                    <div class="col-12">
                      <label for="name" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12" >
                      <label for="user_type" class="form-label">User Type</label>
                        <select class="form-control" name="user_type" id="user_type">
                          <option value="" selected="selected">Select User Type</option>
                          <option value="admin" >Admin</option>
                          <option value="user" >User</option>
                          <option value="seller" >Seller</option>
                        </select>
                    </div>
                    
                    <!-- Seller fields -->
                		<div id="seller_fields" style="display:none; width:100%;" >

                      <div class="col-12">
                        <label for="shop_name" class="form-label">Shop Name</label>
                        <input type="text" name="shop_name" class="form-control" id="shop_name" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>

                      <div class="col-12">
                        <label for="seller_name" class="form-label">Seller Name</label>
                        <input type="text" name="seller_name" class="form-control" id="seller_name" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>

                      <div class="col-12">
                        <label for="seller_address" class="form-label">Seller Address</label>
                        <input type="text" name="seller_address" class="form-control" id="seller_address" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>

                      <div class="col-12">
                        <label for="seller_mobile" class="form-label">Seller Mobile Number</label>
                        <input type="text" name="seller_mobile" class="form-control" id="seller_mobile" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>

                    </div>

                		<div id="admin_fields" style="display:block; width:100%;" >

                      <div class="col-12" >
                      <label for="location" class="form-label">Location</label>
                      
                        <select class="form-control" name="location" id="location"  >
                         <option value="location" selected="selected" id="city">Select Location</option>
                         <option value="location" selected="selected" id="city">Akola</option>
                         <option value="location" selected="selected" id="city">Amravati</option>
                         <option value="location" selected="selected" id="city">Chandrapur</option>
                         <option value="location" selected="selected" id="city">Mumbai</option>
                         <option value="location" selected="selected" id="city">Nagpur</option>
                         <option value="location" selected="selected" id="city">Nashik</option>
                         <option value="location" selected="selected" id="city">Pune</option>
                         <option value="location" selected="selected" id="city">Wardha</option>
                      </select>
                      </div>  
                      </div>
                    

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="userpassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    

                    <div class="col-12">
                      <label for="cpassword" class="form-label">Confirm Password</label>
                      <input type="password" name="cpassword" class="form-control" id="cpassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="register_btn" >Submit</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
</section>





        <!-- Footer Starts Here -->
<?php include 'components/footer.php';

// location PHP script


?>



<script>
    
		// Show seller fields if seller is selected in user type dropdown
		document.getElementById("user_type").addEventListener("change", function() {
			if (this.value == "seller") {
				document.getElementById("seller_fields").style.display = "block";
			} else {
				document.getElementById("seller_fields").style.display = "none";
			}
			if (this.value == "admin") {
        document.getElementById("admin_fields").style.display = "none";
			} else {
				document.getElementById("admin_fields").style.display = "block";
			}
		});

    // Location Script

	</script>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordions.js"></script>

<script language="text/Javascript">
cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
    }
}
</script>

<!-- <script src="https://cdn.tailwindcss.com"></script> -->

</body>

</html>