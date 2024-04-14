<?php $page ='about'; include 'components/head.php';?>


  <body>
  <?php include 'components/navbar.php';?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Testimonials</h1>
            <span>testimonials from our greatest clients</span>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials" style="margin: 0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              

            <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Suresh Gawande</h4>
                                <span>Seller From Nagpur</span>
                                <p>"I used this website to sell products online and now my sale has doubled and also the profit margin is also high. Now I am thinking of shifting my whole business online because this gives me more output as compared to my shop"</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Manish Tale</h4>
                                <span>Seller From Mumbai</span>
                                <p>"I live in a area where the requirement of the Electrnoics items are less and because of that I was facing problems to sell these products, but all thanks to EasyMart and now I can say that EasyMart has helped me immensely to increase my sales "</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Ganesh Parkhi</h4>
                  <span>Buyer</span>
                  <p>"I was not able to find the product that I needed in the local market. But when I got to know about EasyMart I instantly searched the product and boom.. the product was available. EasyMart made find the product in seconds. "</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

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