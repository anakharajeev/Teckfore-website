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
                        <h1>Locations</h1>
                        <ul class="breadcrumps">
                            <li><span><a href="index.php">Home</a></span>/</li>
                            <li><span>Locations</span></li>
                        </ul>
                    </div>
                </div>
            </div>
           
        </div>

    </section>
    <section class="about-page location-page">
        <div class="container">

            <div class="row">
             
                <div class="col-md-7" data-aos="fade-right" data-aos-duration="3000">
                    <div class="abt-content">
                        <div class="main-heading">
                            <span class="sub-head">Teckfore Interiors</span>
                            <h2>Locations</span></h2>
                                       
                        </div>
                        <p>Teckfore is proud to have a strong presence in seven major cities across India, catering to a wide range of clients and projects. Our offices are conveniently located in Bangalore, Hyderabad, Chennai, Kerala, Mumbai, New Delhi, and Visakhapatnam. With our strategic presence in these key cities, we are able to serve clients from various regions and provide our exceptional interior design services.
                        </p>  
                        <p>Each city represents a unique blend of culture, architecture, and design preferences, and our team of talented professionals understands the nuances of each location. We adapt our designs and services to cater to the specific needs and tastes of the local clientele.
                        </p>      
                        <p>Having a multi-city presence allows us to stay connected with the diverse design trends and innovations in each region. It also enables us to collaborate with local suppliers, artisans, and contractors, ensuring efficient project execution and timely delivery.
                        </p>   
                        <p>No matter which city you are located in, Teckfore is committed to providing exceptional interior design solutions that exceed your expectations. Our widespread presence reflects our dedication to serving clients across India and creating stunning spaces that enhance the lives of our valued customers.
                        </p>
                    </div>
                </div>
                <div class="col-md-5" data-aos="fade-left" data-aos-duration="3000">
                    <div class="map-icon">
                        <img src="images/about/map.png" alt="">
                        <ul>
                            <li style="top:62%; left:50%"><i class="fas fa-map-marker-alt"></i><span>Visakapatanam</span></li>
                            <li style="top:25%; left:30%"><i class="fas fa-map-marker-alt"></i><span>New Delhi</span></li>
                            <li style="top:57%; left:17%"><i class="fas fa-map-marker-alt"></i><span>Mumbai</span></li>
                            <li style="top:86%; left:26%"><i class="fas fa-map-marker-alt"></i><span>Kerala</span></li>
                            <li style="top:81%; left:37%"><i class="fas fa-map-marker-alt"></i><span>Chennai</span></li>
                            <li style="top:66%; left:35%"><i class="fas fa-map-marker-alt"></i><span>Hyderabad</span></li>
                            <li style="top: 74%;left: 24%;"><i class="fas fa-map-marker-alt"></i> <span>Banglore</span></li>
                        </ul>
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