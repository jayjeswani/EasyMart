<?php $page ='products'; include 'components/head.php'?>

  <body>
  <?php include 'components/navbar.php';?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><small><del><sup>$</sup>1999 </del></small> &nbsp; <sup>$</sup>1779</h1>
            <span>
                Lorem ipsum dolor sit amet.
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid wc-image">
            </div>

            <br>

            <div class="row">
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-2-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-3-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h4>Info</h4>
              </div>

              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed velit eveniet quibusdam animi eos, cum! Alias, dicta. Minima repudiandae sequi iste, nostrum!</p>
              </div>
            </div>

            <br>
            <br>
          
            <h4>Add to Cart</h4>

            <br>

            <form action="" method="post">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="">Extra 1</label>
                    <select class="form-control">
                      <option value="0">Extra A</option>
                      <option value="0">Extra B</option>
                      <option value="0">Extra C</option>
                      <option value="0">Extra D</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="text" value="1" required="" class="form-control">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <a href="#"class="filled-button">Add to Cart</a>
                  </div>
                </div>
              </div>
            </form>

            <br>
          </div>
        </div>

        <br>

        <h4>Description</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea illum necessitatibus adipisci cum dolor quam magnam similique quasi iure blanditiis?</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum minus reprehenderit, porro alias pariatur perferendis, eaque possimus fugit doloribus perspiciatis.</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur expedita, blanditiis soluta, laudantium veritatis esse nulla quasi praesentium ea architecto vero. Nemo nesciunt veritatis maxime accusamus ipsa optio inventore rem cupiditate vero vitae cumque necessitatibus nisi, sapiente possimus perspiciatis, corporis!</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ratione animi aliquid, non ipsum soluta similique rerum commodi! Ullam quam cupiditate reiciendis a labore. Eos rerum deserunt, sequi dolores vitae consectetur harum animi officiis id vel similique qui, laborum corrupti fuga maiores maxime! Quasi, asperiores nobis accusamus similique est modi totam corporis perferendis consequuntur ea tempore, corrupti provident quos quo.</p>



        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <?php include 'components/footer.php'?>

    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>

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