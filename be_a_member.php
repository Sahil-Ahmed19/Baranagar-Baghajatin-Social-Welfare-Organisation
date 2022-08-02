<?php


include 'config.php';

error_reporting(0);


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $whatsapp=$_POST['whatsapp'];
    $phone = $_POST['phone'];


    $sql = "INSERT INTO follow (name, email, phone, whatsapp)
        VALUES ('$name', '$email', '$phone')";
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

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php require_once 'nav.php'; ?>
    <!-- The social media icon bar -->
    <!-- <div class="icon-bar">
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="donate.html" class="twitter"><h8>Donate</h8></a>
    </div> -->
    <nav class="social">
        <ul>
            <li><a href="https://www.facebook.com/bbswo">Facebook <img id="pal" src="./images/download (7).jfif"
                        alt=""></a></li>
            <li><a href="donate.php">Donate<img id="pal" src="./images/10.png" alt=""></a></li>
            <li><a href="follow.php">Follow<img id="pal" src="./images/follow.png" alt=""></a></li>

        </ul>
    </nav>
    <!-- Team-->
    <section class="page-section" id="b">
        <div id="be" class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">BE A MEMBER</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>

                    <form id="contactForm" action="razorpay/pay.php" method="post">
            <form id="contactForm" action="razorpay/pay.php" >
                <div id="arghya1">
                    <div id="gform" class="row align-items-stretch mb-5">
                        <h3>Enter Details</Details></h3>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required>
                                
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email"  name="email" type="email" placeholder="Your Email *" required>
                                
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input class="form-control" id="whatsapp" name="whatsapp" type="tel" placeholder="Your Whatsup Number *" required>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required>
                                
                            </div>
                            <div class="form-group">
                               
                                <span class="screenshot">Pay ₹500 to be a member</span>
                            </div>
                        </div>
                        
                        <div class="text-center"><button class="btn btn-primary text-uppercase" id="submitButton"  name="submit" value="Proceed to pay" type="submit">Preceed to Pay</button>
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
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>