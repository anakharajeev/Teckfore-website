<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/fav.webp" rel="icon" />
    <title>Teckfore</title>
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">

</head>

<body>
    <!-- Preloader -->
    <div class="loader-mask">
        <div class="spinnerContainer">
            <img src="images/fav.webp" class="img-fluid logo-rotate-center">
            <div class="rotate-preloader">
                <img src="images/reloader.webp" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Preloader -->


    <?php include("header.php") ?>

    <section class="banner-box inner-banner">
        <div class="owl-carousel owl-theme banner-class">
            <div class="item">
                <div class="image-slider">
                    <img src="images/banner2.webp" class="img-fluid">
                    <div class="banner-info">
                        <h1>Contact us</h1>
                        <ul class="breadcrumps">
                            <li><span><a href="index.php">Home</a></span>/</li>
                            <li><span>Contact us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
           
        </div>

    </section>
    <section class="contact-page">
        <div class="container">

            <div class="row">
                <div class="col-md-8" data-aos="fade-up" data-aos-duration="2000">
                    <div class="contact-left">
                        <span class="sub-head">CONTACT US</span>
                        <h2>Get in touch with us</h2>
                        <p>For any questions, comments, or help you might require, we invite you to get in touch with us. Our devoted team is prepared to rapidly address your worries and offer the assistance you require. Simply complete the contact form or get in touch with us using the details provided, and we will be happy to help.</p>
                    </div>
                    <div class="contact-form" data-aos="fade-up" data-aos-duration="2000">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Full Name"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone No</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="Your City">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service">Service Required</label>
                                    <select name="service" id="" class="form-control">
                                        <option value="">Residential</option>
                                        <option value="">Commercial</option>
                                        <option value="">Corporate</option>
                                        <option value="">Architectural planning</option>
                                        <option value="">Design2Build</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 submit-btn">
                                <button class="button-moidel3" >Submit <i class="fa-solid fa-arrow-right-long ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-right">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-up" data-aos-duration="2000">
                                <div class="address-box">
                                    <div class="adrs-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5500.386781344072!2d77.7456838739201!3d12.884506500865271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae12dcfd512b95%3A0xdec75746c0ed7789!2sSarjapur%20-%20Marathahalli%20Rd%2C%20Dommasandra%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1691399667831!5m2!1sen!2sin" class="map-ifrm" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        <div class="addrs-content">
                                            <h3>Bangalore Address</h3>
                                            <hr>
                                            <p>PS Arcade, Sarjapur - Marathahalli Rd, Dommasandra, Anekal, Karnataka 562125</p>
                                            <p><svg class="phone-svg" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.2 21.5C15.07 21.5 13.88 21.23 12.65 20.71C11.45 20.2 10.24 19.5 9.06 18.65C7.89 17.79 6.76 16.83 5.69 15.78C4.63 14.71 3.67 13.58 2.82 12.42C1.96 11.22 1.27 10.02 0.78 8.86C0.26 7.62 0 6.42 0 5.29C0 4.51 0.14 3.77 0.41 3.08C0.69 2.37 1.14 1.71 1.75 1.14C2.52 0.38 3.4 0 4.34 0C4.73 0 5.13 0.09 5.47 0.25C5.86 0.43 6.19 0.7 6.43 1.06L8.75 4.33C8.96 4.62 9.12 4.9 9.23 5.18C9.36 5.48 9.43 5.78 9.43 6.07C9.43 6.45 9.32 6.82 9.11 7.17C8.92621 7.48238 8.70081 7.76833 8.44 8.02L7.76 8.73C7.77 8.76 7.78 8.78 7.79 8.8C7.91 9.01 8.15 9.37 8.61 9.91C9.1 10.47 9.56 10.98 10.02 11.45C10.61 12.03 11.1 12.49 11.56 12.87C12.13 13.35 12.5 13.59 12.72 13.7L12.7 13.75L13.43 13.03C13.74 12.72 14.04 12.49 14.33 12.34C14.88 12 15.58 11.94 16.28 12.23C16.54 12.34 16.82 12.49 17.12 12.7L20.44 15.06C20.81 15.31 21.08 15.63 21.24 16.01C21.39 16.39 21.46 16.74 21.46 17.09C21.46 17.57 21.35 18.05 21.14 18.5C20.93 18.95 20.67 19.34 20.34 19.7C19.77 20.33 19.15 20.78 18.43 21.07C17.74 21.35 16.99 21.5 16.2 21.5ZM4.34 1.5C3.79 1.5 3.28 1.74 2.79 2.22C2.33 2.65 2.01 3.12 1.81 3.63C1.6 4.15 1.5 4.7 1.5 5.29C1.5 6.22 1.72 7.23 2.16 8.27C2.61 9.33 3.24 10.43 4.04 11.53C4.84 12.63 5.75 13.7 6.75 14.71C7.75 15.7 8.83 16.62 9.94 17.43C11.02 18.22 12.13 18.86 13.23 19.32C14.94 20.05 16.54 20.22 17.86 19.67C18.37 19.46 18.82 19.14 19.23 18.68C19.46 18.43 19.64 18.16 19.79 17.84C19.91 17.59 19.97 17.33 19.97 17.07C19.97 16.91 19.94 16.75 19.86 16.57C19.7961 16.4461 19.6992 16.3423 19.58 16.27L16.26 13.91C16.06 13.77 15.88 13.67 15.71 13.6C15.49 13.51 15.4 13.42 15.06 13.63C14.86 13.73 14.68 13.88 14.48 14.08L13.72 14.83C13.33 15.21 12.73 15.3 12.27 15.13L12 15.01C11.59 14.79 11.11 14.45 10.58 14C10.1 13.59 9.58 13.11 8.95 12.49C8.46 11.99 7.97 11.46 7.46 10.87C6.99 10.32 6.65 9.85 6.44 9.46L6.32 9.16C6.26 8.93 6.24 8.8 6.24 8.66C6.24 8.3 6.37 7.98 6.62 7.73L7.37 6.95C7.57 6.75 7.72 6.56 7.82 6.39C7.9 6.26 7.93 6.15 7.93 6.05C7.93 5.97 7.9 5.85 7.85 5.73C7.78 5.57 7.67 5.39 7.53 5.2L5.21 1.92C5.11638 1.78564 4.98867 1.67864 4.84 1.61C4.68 1.54 4.51 1.5 4.34 1.5ZM12.7 13.76L12.54 14.44L12.81 13.74C12.76 13.73 12.72 13.74 12.7 13.76Z" />
                                                </svg>
                                                <a href="tel:9606048006">96060 48006,</a><a href="tel:8049894313">8049894313</a></p>
                                            <p><svg class="email-svg" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 18.5H6C3 18.5 1 17 1 13.5V6.5C1 3 3 1.5 6 1.5H16C19 1.5 21 3 21 6.5V13.5C21 17 19 18.5 16 18.5Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16 7L12.87 9.5C11.84 10.32 10.15 10.32 9.12 9.5L6 7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <a href="mailto:info@teckfore.com"> info@teckfore.com</a></p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-duration="2000">
                                <div class="address-box">
                                    <div class="adrs-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.4034955449124!2d77.73530831189!3d12.881756087373002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6d00dd29ad27%3A0xc9e0db41eaeca474!2sM.R.%20Godown%20and%20warehouses!5e0!3m2!1sen!2sin!4v1691471106424!5m2!1sen!2sin" class="map-ifrm" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                  
                                        <div class="addrs-content">
                                            <h3>Factory Address</h3>
                                            <hr>
                                            <p>M R Godown, 46/2, Muthanallur cross, Dommasandra, Bengaluru, Karnataka 562125</p>
                                          
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              
                </div>
            </div>
        </div>
    </section>

    <a href="javascript:" id="return-to-top"><i class="fa-solid fa-arrow-up"></i></a>

    <?php include("footer.php") ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/fontawsome.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/bootstrap.bundle.min.js">
    </script>
    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>

</body>

</html>