<?php $page ='products'; include 'components/head.php'?>
<?php
error_reporting (E_ALL ^ E_NOTICE); 

include'admin/db.php';
include'admin/fun.php';
$obj1=new connect();

$obj2=new fun($obj1->dbconnect());

$error=false;
$catname='';

$alert='';
$alert1='';
$Check1='';
$errors1='';
$city=$_POST['city'];
$area=$_POST['area'];
$category=$_POST['category'];

?>
  <body>
  <?php include 'components/navbar.php';?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Products</h1>
            <span>Lorem ipsum dolor sit amet.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Search a <em>Product</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">

                  <div class="col-lg-4 col-md-12 col-sm-12">
                     
                        <select class="form-control" name="user_type" id="cities">
                          <option value="" selected="selected">Select City</option>
                       
                        </select>

                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                     
                        <select class="form-control" name="user_type" id="areas" disabled>
                          <option value="" id="area" selected="selected">Select Area</option>
                         
                        </select>

                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                     
                        <select class="form-control" name="cat" id="user_type">
                            <option value="" selected="selected">Select Product Category</option>
                              <?php
                                $result=$obj2->getcategory();
                                $I=1;
                                while($res=mysqli_fetch_array($result,MYSQLI_BOTH)){
                              ?>
                             <option value="<?php echo $res['category_name'];?>" ><?php echo $res['category_name'];?></option>
                              <?php
                                  }
                              ?>
                        </select>

                  </div>


                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Search</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">

          <?php
              $result=$obj2->getshopbycategory($city,$area,$category);
              $I=1;
              while($res=mysqli_fetch_array($result,MYSQLI_BOTH)){
          ?>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-1-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup>1779
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis asperiores eveniet iure impedit soluta aliquid. </p>
                <a href="product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

        </div>

        <br>
        <br>

        <nav>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <?php include 'components/footer.php'?>

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

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>