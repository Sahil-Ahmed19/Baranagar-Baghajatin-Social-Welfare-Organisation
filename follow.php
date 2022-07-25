<?php


include 'config.php';

// error_reporting(0);


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = "INSERT INTO follow (name, email, phone)
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
            <li><a href="https://www.facebook.com/bbswo">Facebook <img id="pal" src="./images/download (7).jfif" alt=""></a></li>
            <li><a href="donate.php">Donate<img id="pal" src="./images/10.png" alt=""></a></li>

            <li><a href="follow.php">Follow<img id="pal" src="./images/10.png" alt=""></a></li>
        </ul>
    </nav>

    <section class="page-section" id="a">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">FOLLOW US</h2>
            </div>
            
        
                    <form id="contactForm" action="" method="POST">
                    <div id="arghya1">
                        <div id="gform" class="row align-items-stretch mb-5">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- Name input-->
                                    <span class="screenshot">Name: *</span>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Eg: John Doe " data-sb-validations="required" value="<?php echo $name; ?>"  />
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div class="form-group">
                                    <!-- Email address input-->
                                    <span class="screenshot">Email: *</span>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Eg: johndoe@gmail.com " data-sb-validations="required,email" value="<?php echo $email; ?>"/>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-group mb-md-0">
                                    <!-- Phone number input-->
                                    <span class="screenshot">Phone: *</span>
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Eg: 9876542318 " data-sb-validations="required" value="<?php echo $phone; ?>"/>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
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
                            <div class="text-center"><button class="btn btn-primary text-uppercase disabled" id="submitButton" name="submit" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
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