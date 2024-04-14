<?php $page ='home'; include 'components/head.php'?>

<body>
    <?php include 'components/navbar.php';?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Do you want to sell your products?</h6>
                        <h4>Best Online Store <br> To Sell  Your Poducts</h4>
                        <p>We provide best services to sell and to buy products online </p>
                        <a href="products.php" class="filled-button">Products</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Sell All Kinds of Products On EasyMart</h6>
                        <h4>Buy What You Want <br> Sell What You Want</h4>
                        <p>You can sell all kinds of product categories on this website, and also you can choose form where you want to buy from. </p>
                        <a href="products.php" class="filled-button">Product Category</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Download our mobile app</h6>
                        <h4>Ecommerce <br>On The Go</h4>
                        <p>Download our mobile app to buy any product you want to on the go from the playstore .</p>
                        <a href="contact.php" class="filled-button">Downoad App</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Request a call back right now ?</h4>
                    <span>If you want to know more about our services then you can contact us by filling this form. </span>
                </div>
                <div class="col-md-4">
                    <a href="contact.php" class="border-button">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Featured <em>Products</em></h2>
                        <span>These are some of the most sold products on our websites</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="assets/images/product-1-720x480.jpg" alt="">
                        <div class="down-content">
                            <h4>Iphone SE</h4>
                            <div style="margin-bottom:10px;">
                                <span> <del><sup>Rs</sup>47000.00</del> <sup>Rs</sup>35000.00 </span>
                            </div>

                            <p>CPU, Hexa-core, Apple GPU, Memory, Card slot ; Internal, 64GB 3GB RAM, 128GB 3GB RAM.</p>
                            <a href="product-details.php" class="filled-button">View More</a>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="assets/images/product-2-720x480.jpg" alt="">
                        <div class="down-content">
                            <h4>Vivo V12</h4>
                            <div style="margin-bottom:10px;">
                                <span> <del><sup>Rs</sup>20000.00</del> <sup>Rs</sup>17000.00 </span>
                            </div>

                            <p>Burgundy Red,Aqua Blue Vivo V12 Smartphone, Capacitive multi-touch, Weight 190.5g, ROM- 64GB/32GB</p>
                            <a href="product-details.php" class="filled-button">View More</a>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="assets/images/product-3-720x480.jpg" alt="">
                        <div class="down-content">
                            <h4>IPhone 13 Pro Max</h4>
                            <div style="margin-bottom:10px;">
                                <span> <del><sup>Rs</sup>50000.00</del> <sup>Rs</sup>41000.00 </span>
                            </div>

                            <p>Apple iPhone 13 Pro Max smartphone. Features 6.7″ display, Apple A15 Bionic chipset, 4352 mAh battery, 6 GB RAM</p>
                            <a href="product-details.php" class="filled-button">View More</a>
                        </div>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="more-info-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-image">
                            <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="right-content">
                            <span>Who we are</span>
                            <h2>Get to know about <em>our company</em></h2>
                            <p>You can know more about our company. The working of our company and some of the most used features of our products</p>
                            <a href="about.php" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info">
        <div class="container">
            <div class="section-heading">
                <h2>Read our <em>Blog</em></h2>
                <span>These blogs will help you know more about different products</span>
            </div>

            <div class="row" id="tabs">
                <div class="col-md-4">
                    <ul>
                        <li><a href='#tabs-1'>AMD A620 chipset for Ryzen 7000 Series processors announced <br> <small>John Doe
                                    &nbsp;|&nbsp;
                                    27.07.2020 10:10</small></a></li>
                        <li><a href='#tabs-2'>Realme narzo N55 teased ahead of India launch <br> <small>John Doe
                                    &nbsp;|&nbsp; 27.07.2020
                                    10:10</small></a></li>
                        <li><a href='#tabs-3'>pTron Basspods Encore with Bluetooth 5.3, up to 50 hours total playback launched <br> <small>John Doe
                                    &nbsp;|&nbsp;
                                    27.07.2020 10:10</small></a></li>
                    </ul>

                    <br>

                    <div class="text-center">
                        <a href="blog.php" class="filled-button">Read More</a>
                    </div>

                    <br>
                </div>

                <div class="col-md-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                            <h4><a href="blog-details.php">AMD A620 chipset for Ryzen 7000 Series processors announced</a>
                            </h4>
                            <p>AMD A620 chipset for Ryzen 7000 Series processors announced. With up to 32 PCIe 4.0 lanes and 4 DDR5 memory slots that can hold up to 128GB, the A620 can handle most user needs. </p>
                        </article>
                        <article id='tabs-2'>
                            <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                            <h4><a href="blog-details.php">Mauris lobortis quam id dictum dignissim</a></h4>
                            <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in,
                                tincidunt vel
                                diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis
                                posuere nibh
                                vestibulum sit amet</p>
                        </article>
                        <article id='tabs-3'>
                            <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                            <h4><a href="blog-details.php">Class aptent taciti sociosqu ad litora torquent per</a></h4>
                            <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus
                                turpis
                                hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In
                                sit amet neque
                                sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada.
                                Curabitur eleifend
                                elit sapien, sed pulvinar orci luctus eget.
                            </p>
                        </article>
                    </section>
                </div>
            </div>


        </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>What they say <em>about us</em></h2>
                        <span>testimonials from our greatest clients</span>
                    </div>
                </div>
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

    <div class="callback-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Request a <em>call back</em></h2>
                        <span>We are ready to resolve and Query you have regarding our service</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                            placeholder="Subject" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="border-button">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
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

</body>

</html>