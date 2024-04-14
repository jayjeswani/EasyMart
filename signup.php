<?php
session_start();

include'admin/db.php';
include 'admin/fun.php';
$db=new connect();
$dconection=$db->dbconnect();

$obj2=new fun($dconection);
$output='';
$error=false;
$shop_name="_";
$seller_name="_";
$seller_address="_";
$seller_mobile="_";
$city=" ";
$area=" ";

$emailerror=$passerror=$username=$password='';
if(isset($_POST['register_btn']))
{
  $usertype=$_POST['user_type'];
    if ($usertype=="user")
     {
      $username=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $city=$_POST['city'];
      $area=$_POST['area'];
      if(empty($email))
      {
        $error=true;
        $emailerror='please enter email';
      }
      if(empty($password)){
        $error=true;
        $passerror='please enter password';
      }
      if(!$error){
       // echo "ok";
      $output=$obj2-> signupu($username,$email,$password,$usertype,$city,$area);
      }

    }
    else
    {
  $username=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $shop_name=$_POST['shop_name'];
  $seller_name=$_POST['seller_name'];
  $seller_address=$_POST['seller_address'];
  $seller_mobile=$_POST['seller_mobile'];
  $city=$_POST['city'];
  $area=$_POST['area'];

  if(empty($email)){
    $error=true;
    $emailerror='please enter email';
  }
  if(empty($password)){
    $error=true;
    $passerror='please enter password';
  }
  if(!$error){
   // echo "ok";
  $output=$obj2->signups($username,$email,$password,$usertype,$shop_name,$seller_name,$seller_address,$seller_mobile,$city,$area);
  
}
}
 
}


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
      <h1 class="title-font font-medium text-3xl text-gray-900"></h1>
      <p class="leading-relaxed mt-4"></p>
    </div>
    <div class="lg:w-3/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">

                 <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

            <form class="row g-3 needs-validation" action="signup.php" method="POST">
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
                          <option value="user" >User</option>
                          <option value="seller" >Seller</option>
                        </select>
                    </div>
                    
                                        <!-- Seller fields -->
                    <div id="seller_fields" style="display:none; width:100%;" >

                      <div class="col-12">
                        <label for="shop_name" class="form-label">Shop Name</label>
                        <input type="text" name="shop_name" class="form-control" id="shop_name" >
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>

                      <div class="col-12">
                        <label for="seller_name" class="form-label">Seller Name</label>
                        <input type="text" name="seller_name" class="form-control" id="seller_name" >
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>

                      <div class="col-12">
                        <label for="seller_address" class="form-label">Seller Address</label>
                        <input type="text" name="seller_address" class="form-control" id="seller_address" >
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>

                      <div class="col-12">
                        <label for="seller_mobile" class="form-label">Seller Mobile Number</label>
                        <input type="tel" name="seller_mobile" class="form-control" id="seller_mobile" >
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>

                    </div>

                    <div id="admin_fields" style="display:block; width:100%;" >

                      <div class="col-12" >
                        <label for="location" class="form-label">city</label>
                        <select class="form-control" name="city" id="cities">
                          <option value="" selected="selected">Select City</option>
                         
                        </select>

                      </div>  
                      </div>

                      <div id="admin_fields" style="display:block; width:100%;" >

                      <div class="col-12" >
                        <label for="location" class="form-label">Location</label>
                         <select class="form-control" name="area" id="areas" disabled>
                          <option value="" id="area" selected="selected">Select Area</option>
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

  <script>
    // Define the array of cities and areas
const citiesAndAreas = [
  {
    city: 'Nagpur',
    areas: ['Ram Nagar', 'Civil Lines', 'Zinga Bai Takli','Jaripatka','Hudkeshwar','Hingna','Koradi','Sadar','Dighori','Bajaj Nagar','Deekshabhoomi','Mahal','Itwari','Dhantoli','Nandanvan','Binaki']
  },
  {
    city: 'Mumbai',
    areas: ['Dadar', 'Dharavi', 'Bandra','Andheri','Dadar','Thane','Dombivali','Bhivandi','Kalyan']
  },
  {
    city: 'Amravati',
    areas: ['Downtown', 'Lakeview', 'Lincoln Park']
  }
];

// Get references to the select boxes
const citiesSelect = document.getElementById('cities');
const areasSelect = document.getElementById('areas');

// Populate the cities select box
citiesAndAreas.forEach(cityAndArea => {
  const option = document.createElement('option');
  option.text = cityAndArea.city;
  option.value = cityAndArea.city;
  citiesSelect.add(option);
});

// Handle the change event for the cities select box
citiesSelect.addEventListener('change', e => {
  const selectedCity = e.target.value;
  
  // Filter the areas based on the selected city
  const selectedCityAreas = citiesAndAreas.find(cityAndArea => cityAndArea.city === selectedCity).areas;
  
  // Clear the previous options and add the new options to the areas select box
  areasSelect.innerHTML = '';
  selectedCityAreas.forEach(area => {
    const option = document.createElement('option');
    option.text = area;
    option.value = area;
    areasSelect.add(option);
  });
  
  // Enable the areas select box
  areasSelect.disabled = false;
});

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