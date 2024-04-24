<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-spacing">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" class="img-fluid main-logo">
                <img src="images/logo-footer.png" class="img-fluid mobile-main-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="how-it-works.php">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="location.php">Locations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="career.php">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <div class="input-box">
                        <input type="text" placeholder="Search..." />
                        <span class="search">
                            <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        </span>
                        <i class="fas fa-times close-icon"></i>
                    </div>
                </form>
            </div>
        </div>
    </nav>



<script>
    let inputBox = document.querySelector('.input-box'),
        searchIcon = document.querySelector('.search'),
        closeIcon = document.querySelector('.close-icon');

    searchIcon.addEventListener('click', () => {
        inputBox.classList.add('open');
    });

    closeIcon.addEventListener('click', () => {
        inputBox.classList.remove('open');
    });
</script>

