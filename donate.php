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
            <li><a href="https://www.facebook.com/bbswo">Facebook <img id="pal" src="./images/download (7).jfif" alt=""></a></li>
            <li><a href="donate.php">Donate<img id="pal" src="./images/10.png" alt=""></a></li>
            <li><a href="follow.php">Follow<img id="pal" src="./images/follow.png" alt=""></a></li>

        </ul>
    </nav>

    <section class="page-section" id="a">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">DONATE NOW</h2>
            </div>
                <div id="arghya">
                    <div id="details">
                        <div class="card1">
                            <div id="aaa">
                                <h3>Account Details</h3>
                            </div>
                            <p><b>Bank Account: </b> Punjab National Bank.
                                <br> Tobin Road (North 24 Parganas) West Bengal -700036.
                                <br>
                                <b>RTGS/NIFT IFS Code: </b> PUNB0102020
                                <br>
                                <b>Account name:</b> Baranagar Baghajatin Social Welfare Organisation
                                <br>
                                <b>Current Account number:</b> 1020050010794
                            </p>
                        </div>
                    </div>
                    <form id="contactForm" action="razorpay/pay.php" method="post">
                        <div id="gform" class="row align-items-stretch mb-5">
                            <h3>Donation Form</h3>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- Name input-->
                                    <span class="screenshot">Name: *</span>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Eg: John Doe " required>
                                </div>
                                <div class="form-group">
                                    <!-- Email address input-->
                                    <span class="screenshot">Email: *</span>
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Eg: johndoe@gmail.com " required>
                                </div>
                                <div class="form-group mb-md-0">
                                    <!-- Phone number input-->
                                    <span class="screenshot">Phone: *</span>
                                    <input class="form-control" id="phone" type="tel" name="phone" placeholder="Eg: 9876542318 " required>
                                </div>
                                <div class="form-group mb-md-0">
                                    <!-- Phone number input-->
                                    <span class="screenshot">Amount: *</span>
                                    <input class="form-control" id="price" name="price" type="tel" placeholder="Min ₹100" required>
                                </div>
                            </div>
                            
                            <!-- Submit Button-->
                            <div class="text-center"><button class="btn btn-primary text-uppercase" name="submit" value="Proceed to pay" id="submitButton" type="submit">Donate</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </section>
    <!-- Footer-->
    <?php require_once 'footer.php'; ?>

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