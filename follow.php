<?php


include 'config.php';

error_reporting(0);


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
<script type="text/javascript">
        function openTab(th)
        {
            window.open(th.name,'_blank');
        }
    </script>
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
            <li><a href="https://rzp.io/l/02hkEOU6G">Donate<img id="pal" src="./images/10.png" alt=""></a></li>

            <!-- <li><a href="follow.php">Follow<img id="pal" src="./images/follow.png" alt=""></a></li> -->
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
                            <h3>Enter Details</h3>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- Name input-->
                                    <span class="screenshot">Name: *</span>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Eg: John Doe "  value="<?php echo $name; ?>"  required/>
                                </div>
                                <div class="form-group">
                                    <!-- Email address input-->
                                    <span class="screenshot">Email: *</span>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Eg: johndoe@gmail.com "  value="<?php echo $email; ?>" required/>
                                </div>
                                <div class="form-group mb-md-0">
                                    <!-- Phone number input-->
                                    <span class="screenshot">Phone: *</span>
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Eg: 9876542318 "  value="<?php echo $phone; ?>" required/>
                                </div>
                            </div>
                            
                            <!-- Submit Button-->
                            <div class="text-center"><button class="btn btn-primary text-uppercase" id="submitButton" name="submit" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
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