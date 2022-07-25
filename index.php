<?php


include 'config.php';

error_reporting(0);


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql = "INSERT INTO enquiry (name, email, phone, message)
        VALUES ('$name', '$email', '$phone', '$message')";
    $result = mysqli_query($conn , $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BBSWO-Baranagar Baghajatin Social Welfare Organisation</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php require_once 'nav.php'; ?>
    <!-- Masthead-->
    <div id="home">
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">
                    <I>"BBSWO - A steps towards sustainability, let's move forward"</I>
                </div>
                <div class="masthead-heading text-uppercase">Baranagar Baghajatin Social Welfare Organisation</div>
                <!-- <a class="btn btn-primary btn-xl text-uppercase" href="donate.html">Donate</a> -->
            </div>
        </header>
    </div>
    <!-- The social media icon bar -->
    <!-- <div class="icon-bar">
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="donate.html" class="twitter">
            <h8>Donate</h8>
        </a>
    </div> -->
    <nav class="social">
        <ul>
            <li><a href="https://www.facebook.com/bbswo">Facebook <img id="pal" src="./images/download (7).jfif" alt=""></a></li>
            <li><a href="donate.php">Donate<img id="pal" src="./images/10.png" alt=""></a></li>
            <li><a href="follow.php">Follow<img id="pal" src="./images/follow.png" alt=""></a></li>
        </ul>
    </nav>
    <!-- <nav class="social">
        <ul>
            <li><a href="https://www.facebook.com/bbswo">Facebook <img id="pal" src="./images/download (7).jfif" alt=""></a></li>
            <li><a href="donate.html">Donate<img id="pal" src="./images/10.png" alt=""></a></li>

        </ul>
    </nav> -->
    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Approach</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
                            <i class="fas fa-book-reader"></i>
                        </span>
                    <h4 class="my-3">Educate</h4>
                    <p class="text-muted">Educating the underprivileged and ill-advised about various social issues which rise in day to day life.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
                            <i class="fas fa-medal"></i>
                        </span>
                    <h4 class="my-3">Empower</h4>
                    <p class="text-muted">Empowering women and the deprived socio-economical section of the population, along with promoting human equality.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
                            <i class="fas fa-rocket"></i>
                        </span>
                    <h4 class="my-3">Enlighten</h4>
                    <p class="text-muted">Enlightening our society by eliminating all kinds of social drawbacks and providing appropriate solutions for it.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <div id="text12">
                    <div id="text1">
                        <h3 class="section-subheading text-muted">Baranagar Baghajatin Social Welfare Organisation was founded by some educated and dedicated youth and social workers with a view to develop the socio economic status of the poor and downtrodden people emphasising on distressed
                            women and children. Now the organisation is taking an important role for up gradation of port status of the many other small village groups (Men & Women). It is registered under West Bengal Societies Registration Act, 1961.</h3>
                        <a id="btn-text" class="btn btn-primary text-uppercase" href=about.php>Read more</a>
                    </div>
                    <div id="text2"><img src="./images/8.jpg" alt=""></div>
                </div>
            </div>

        </div>
    </section>

    <!-- Portfolio Grid-->
    <section class="page-section" id="portfolio">
        <div id="aa" class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Projects</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">Learn more</div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/IMG_20220711_133757.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <!-- <div class="portfolio-caption-heading">Threads</div> -->
                            <div class="portfolio-caption-subheading text-muted">Book Distribution to Needy Children</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">Learn more</div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/IMG_20220711_133818.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <!-- <div class="portfolio-caption-heading">Explore</div> -->
                            <div class="portfolio-caption-subheading text-muted">Health Checkup Camp</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">Learn more</div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/IMG_20220711_134133.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <!-- <div class="portfolio-caption-heading">Explore</div> -->
                            <div class="portfolio-caption-subheading text-muted">Computer Training Programme</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">Learn more</div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/IMG_20220711_133950.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <!-- <div class="portfolio-caption-heading">Lines</div> -->
                            <div class="portfolio-caption-subheading text-muted">Children Education Programme</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">Learn more</div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/IMG_20220711_134014.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <!-- <div class="portfolio-caption-heading">Southwest</div> -->
                            <div class="portfolio-caption-subheading text-muted">SHG Development Programme</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">Learn more</div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/IMG_20220711_134048.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <!-- <div class="portfolio-caption-heading">Window</div> -->
                            <div class="portfolio-caption-subheading text-muted">MSME Development Programme</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle">
                <a id="btn-text" class="btn btn-primary text-uppercase" href=events.php>view more</a>
            </div>
        </div>

    </section>

    <!-- Clients-->
    <!-- <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <h4 class="sent-notification"></h4>
            <form id="contactForm" action="" method="POST">
                <div id="arghya">
                    <div id="gform" class="row align-items-stretch mb-5">
                        <h3>Enquiry</h3>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" data-sb-validations="required" value="<?php echo $name; ?>" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" value="<?php echo $email; ?>"/>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" value="<?php echo $phone; ?>"/>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" data-sb-validations="required" value="<?php echo $message; ?>"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center text-white mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="text-center"><button class="btn btn-primary text-uppercase " id="submitButton" name="submit" type="submit" onclick="sendEmail()" value="Send an Email">Send Message</button>
                        </div>
                    </div>

                    <div id="details">
                        <div id="aaaa">
                            <h3>Address & Contact Info</h3>
                        </div>
                        <div class="card1">
                            <br>
                            <b>Address:&nbsp;</b>36/8/1, Bagha Jatin Road, Baranagar, North 24 Parganas
                            <br>
                            <br> <b>City:&nbsp;</b>Baranagar
                            <br>
                            <br>
                            <b>Mobile:&nbsp;</b>9903194479
                            <br>
                            <br>
                            <b>Email:&nbsp;</b>bananiraychowdhury683@gmail.com
                        </div>
                        <div class="card1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.420692512684!2d88.37460486496077!3d22.638098235149084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89dbdd138f7a7%3A0x6c32903be2c0dfc8!2s36!5e0!3m2!1sen!2sin!4v1657910688291!5m2!1sen!2sin"
                                width="480" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Book Distribution to Needy Children</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/IMG_20220711_133757.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul> -->
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Health Checkup Camp</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/IMG_20220711_133818.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul> -->
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 8 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Computer Training Programme</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/IMG_20220711_134133.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <!-- <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
                                    </li>
                                </ul> -->
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Children Education Programme</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/IMG_20220711_133950.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul> -->
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">SHG Development Programme</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/IMG_20220711_134014.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul> -->
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">MSME Development Programme</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/IMG_20220711_134048.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul> -->
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            // var subject = $("#subject");
            var body = $("#message");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                    //    subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#contactForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
</body>

</html>