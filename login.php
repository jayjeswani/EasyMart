<?php
session_start();

include'admin/db.php';
include 'admin/fun.php';
$db=new connect();
$dconection=$db->dbconnect();

$obj2=new fun($dconection);
$output='';
$error=false;
$emailerror=$passerror=$username=$password='';
if(isset($_POST['login'])){

  $email=$_POST['email'];
  $password=$_POST['password'];
  $usertype=$_POST['user_type'];
  
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
  $output=$obj2->login($email,$password,$usertype);
  
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
    <?php $page ='login';
    include 'components/navbar.php' 
    ?>
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Login</h1>
            <span>Login in to buy any product from our website</span>
          </div>
        </div>
      </div>
    </div>
    
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900"></h1>
      <p class="leading-relaxed mt-4"></p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">

  <div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
    <p class="text-center small">Enter your username & password to login</p>
  </div>

  <form class="row g-3 needs-validation" action="login.php" method="POST" >

    <div class="col-12">
      <label for="username" class="form-label">Email</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" name="email" class="form-control" id="username" required>
        <div class="invalid-feedback">Please enter your username.</div>
      </div>
    </div>

    <div class="col-12" >
                      <label for="user_type" class="form-label">User Type</label>
                        <select class="form-control" name="user_type" id="user_type">
                          <option value="" selected="selected">Select User Type</option>
                          
                          <option value="user" >User</option>
                          <option value="seller" >Seller</option>
                        </select>
                    </div>

    <div class="col-12">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password" required>
      <div class="invalid-feedback">Please enter your password!</div>
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit" name="login" value="login">Login</button>
    </div>
    <div class="col-12">
      <p class="small mb-0">Don't have account? <a href="signup.php">Create an account</a></p>
    </div>
  </form>

</div>
</section>


        <!-- Footer Starts Here -->
<?php include 'components/footer.php'?>



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

<!-- <?php 
 

 if(isset($_POST['login']))
 {
  
  $user_name=$_POST['username'];
  $user_pass=$_POST['password'];
  


  $sql="SELECT * FROM user WHERE user_name='$user_name' AND c_password='$user_pass'";
  $result=mysqli_query($con,$sql);
  // if(mysqli_num_rows($result)>0)
  // {
  //   echo "<script>window.open('login.php?logged='Logged in successfully .. !','_self')</script>";

  //   //header('location:home.php');
  // }
  // else
  // {
  //   echo "<script> alert('Password or username is incorrect!')</script>";
  // }


mysqli_close($con);

 }
 ?> -->

