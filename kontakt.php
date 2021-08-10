<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['posalji'])){


  $name = htmlspecialchars($_POST['ime']);
  $surname = htmlspecialchars($_POST['prezime']);
  $email = htmlspecialchars($_POST['mail']);
  $phone = htmlspecialchars($_POST['telefon']);
  $message = htmlspecialchars($_POST['pitanje']);


  require 'PHPMailer/src/Exception.php'; 
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer();                              // Passing `true` enables exceptions
// try {

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.interbuy.rs';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rentacar@interbuy.rs';                 // SMTP username
    $mail->Password = 'rentakar23';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('rentacar@interbuy.rs');
    $mail->addAddress('rentacar@interbuy.rs', 'Milovan Rajak');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('radovanbastic@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Poruka sa kontakt forme rentacarinterbuy.rs';
    $mail->Body    = '<html>
    <head>
    </head>
  		<body>
        <table width="60%" cellspacing="2" cellpadding="2">
  				<tr>
  					<td colspan="2" align="left" valign="middle"style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#fff; background-color:#0072c6;">Poruka sa sajta RENTA CAR INTER BUY</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Ime i Prezime</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $name . ' ' . $surname . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Telefon</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $phone . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Email adresa</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $email . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Pitanje, ideja..</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $message . '</td>
  				</tr>
        </table>
        </body>
       </html>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

       $mail->send();
  

}



 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INTER BUY RENTA CAR | Kontakt </title>
  <link rel="stylesheet" href="css/prettyPhoto.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="icon" type="image/png" sizes="32x32" href="/logo.png">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>

<!-- Header START -->
<header class="header-main">
    <div class="container">
        <div class="row">
            <div class="top col-md-12 col-12">
              <ul>
                <!-- <li><i class="fa fa-home" aria-hidden="true"></i>Neka Ulica 91, Pazova</li> -->
                <li><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:+38169777820">+381 69 777 820</a></li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:rentacar@interbuy.rs">rentacar@interbuy.rs</a></li>
              </ul>
            <div class="social-header d-none d-sm-block">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            </div>
          </div>  
      <div class="row">
        <nav class="navbar navbar-inverse">
           
             
          <!-- <div class="navbar-header"> -->
              <!-- <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button> -->
          
         
         
          
        <!-- </div> -->
          
            
          <div class="navbar navbar-expand-lg navbar-light">
            <!-- <nav> -->
                <a href="/" id="brand">
                  <img src="/img/logo.png" alt="Izrada sajta logo">
                </a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav justify-content-end w-100 nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link" href="/">Početna</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/o-nama.php">O nama</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/automobili.php">Vozni park</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/uslovi.php">Uslovi najma</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/kontakt.php">Kontakt</a>
                </li>
              </ul>
              </div>
            <!-- </nav> -->
          </div>
          <!--/.nav-collapse -->
      </div>
    </div>
    </nav>
  </header>
  <!-- Header END -->

  <!-- Google Map Start -->
  <section class="section-map">
    <iframe src="https://maps.google.com/maps?q=Ustani%C4%8Dka%20204A%2C%2011050%20Beograd&t=&z=17&ie=UTF8&iwloc=&output=embed"
      width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- Google Map End -->


  <section class="kontakt-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <h3>Pošaljite pitanje, predlog, sugestiju</h3>
            <em>Polja označena zvezdicom su obavezna!</em>
            <form  name="ponudite" action="" method="post" class="formStyle">
                <div class="row">
                <div class="col-sm-6"><label>Vaše Ime: <span class="obavezno">*</span></label><input type="text" name="ime" class="form-control paddbut" required></div>
                  <div class="col-sm-6"><label>Vaše Prezime: <span class="obavezno">*</span></label><input type="text" name="prezime" class="form-control paddbut" required></div>
                  <div class="col-sm-6"><label>Vaša E-mail adresa: <span class="obavezno">*</span></label><input type="email" name="mail" class="form-control paddbut" required></div>
                  <div class="col-sm-6"><label>Kontakt telefon: <span class="obavezno">*</span></label><input type="text" name="telefon" class="form-control paddbut" required></div>
                  <div class="col-sm-12"><label>Pitanje: <span class="obavezno">*</span></label><textarea name="pitanje" rows="8" class="form-control control-pitanje paddbut" required></textarea></div>
                  <div class="col-sm-12"><input name="posalji" type="submit" value="Pošalji"  class="mojedugme btn"></div>
                </div>
                </form>
        </div>
        <div class="col-md-4 details">
          <div class="widget widget-contact">
                <h4>Kontakt podaci</h4>
                <ul class="listnone">
                    <li><strong>Telefon: &nbsp;</strong>+381 69 777 820</li>
                    <li><strong>Email: &nbsp;</strong>rentacar@interbuy.rs</li>
                    <li><strong>Radno vreme: &nbsp;</strong>Pon-Pet 08h-16h <br> Sub 09h-14h, Nedeljom zatvoreno</li>
                </ul>
                <address>
                    <strong>INTER BUY</strong>
                    <br>Ustanička 204A
                    <br>11050 Beograd
                    <br> PIB: 100379953
                    <br> MB:  07883978
                </address>
            </div>
          </div>
      </div>
    </div>
  </section>


<!-- footer START -->
<footer class="page-footer font-small mdb-color pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Inter buy</h6>
      <!-- <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing
        elit.</p> -->
        <p>
        <i class="far fa-copy mr-3 mt-4"></i> Matični broj: 07883978</p>
      <p>
        <i class="far fa-copy mr-3"></i> PIB: 100379953</p>
      <p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none d-none d-sm-block">

    <!-- Grid column -->
    <div class="col-md-5 col-lg-2 col-xl-2 mx-auto mt-3 mapa d-none d-sm-block">
      <h6 class="text-uppercase mb-4 font-weight-bold mapa-site-small">Mapa sajta</h6>
      <p>
          <i class="fas fa-angle-right"></i>
        <a href="/">Početna</a>
      </p>
      <p>
          <i class="fas fa-angle-right"></i>
        <a href="/o-nama.php">O nama</a>
      </p>
      <p>
          <i class="fas fa-angle-right"></i>
        <a href="/automobili.php">Automobili</a>
      </p>
      <p>
          <i class="fas fa-angle-right"></i>
        <a href="/uslovi.php">Uslovi</a>
      </p>
      <p>
          <i class="fas fa-angle-right"></i>
          <a href="/kontakt.php">Kontakt</a>
        </p>
    </div>
    <!-- Grid column -->

    <!-- <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
      <p>
        <a href="#!">Your Account</a>
      </p>
      <p>
        <a href="#!">Become an Affiliate</a>
      </p>
      <p>
        <a href="#!">Shipping Rates</a>
      </p>
      <p>
        <a href="#!">Help</a>
      </p>
    </div>  -->

    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Kontakt podaci</h6>
      <p>
        <i class="fas fa-home mr-3"></i> Ustanička 204A, 11050 Beograd</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> rentacar@interbuy.rs</p>
      <p>
        <i class="fas fa-phone mr-3"></i>+381 11 770 66 84</p>
      <p>
        <i class="fa fa-mobile mr-3"></i>+381 69 777 820</p>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

    <!-- Grid column -->
    <div class="col-md-7 col-lg-8">

      <!--Copyright-->
      <p class="text-center text-md-left">© 2020 Copyright:&nbsp;
        <a href="https://smartwebart.rs/" target="_blanc" class="text-white copy">
          <strong> Smart Web Art</strong>
        </a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0">

      <!-- Social buttons -->
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
  <a id="button" class="hidden-xs"></a>
</div>
<!-- Footer Links -->

</footer>
<!-- footer END -->



  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/swiper.min.js"></script>
  

  <script>
   var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
    btn.addClass('animated');
    btn.addClass('slideInUp');

  } else {
    btn.removeClass('show');
    btn.removeClass('animated');
    btn.removeClass('slideInUp');
  }
});

btn.on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, '300');
    });


    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        loop: true,
        nav: true,
        navText: ["<img src='/img/left.png'>", "<img src='/img/right.png'>"],
        navigation: true
      });
    });
   
  </script>

</body>

</html>