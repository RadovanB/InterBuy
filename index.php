<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['posalji'])){


  $nameSurname = htmlspecialchars($_POST['imeprezime']);
  $email = htmlspecialchars($_POST['mail']);
 
  $datePreuzimanje = $_POST['pickup_date'];
  $timePreuzimanje =  $_POST['pickup_time'];

  $dateReturn = $_POST['return_date'];
  $timeReturn =  $_POST['return_time'];

  $phone = htmlspecialchars($_POST['telefon']);
  
  $automobil = $_POST['automobil'];

  $lokacijaPreuzimanja = $_POST['lokacija-preuzimanja'];
  $lokacijaPovratka = $_POST['lokacija-povratka'];




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
    $mail->Subject = 'Upit za vozilo'. ' ' . $automobil;
    $mail->Body    = '<html>
    <head>
    </head>
  		<body>
        <table width="60%" cellspacing="2" cellpadding="2">
  				<tr>
  					<td colspan="2" align="left" valign="middle"style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#fff; background-color:#0072c6;">Upit za Rent A Car</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Ime i Prezime</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $nameSurname . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Email adresa</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $email . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Datum i vreme preuzimanja</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $datePreuzimanje . ' - ' . $timePreuzimanje . '</td>
          </tr>
          <tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Datum i vreme preuzimanja</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $dateReturn . ' - ' . $timeReturn . '</td>
          </tr>
          <tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Broj telefona</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $phone . '</td>
          </tr>
          <tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Marka automobila</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $automobil . '</td>
          </tr>
          <tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Lokacija preuzimanja</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $lokacijaPreuzimanja . '</td>
          </tr>
          <tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Lokacija povratka</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $lokacijaPovratka . '</td>
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
  <title>INTER BUY RENTA CAR | Početna </title>
  <link rel="stylesheet" href="css/prettyPhoto.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/jquery.datetimepicker.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="icon" type="image/png" sizes="32x32" href="/logo.png">
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
                  <a class="nav-link active" href="/">Početna</a>
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
                  <a class="nav-link" href="/kontakt.php">Kontakt</a>
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

   <!-- Slider START -->
  <section class="slider">
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators d-none d-sm-block">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
        <li data-target="#carousel-example-2" data-slide-to="3"></li>

      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
            <img class="d-block w-100 img-fluid" src="img/slide1.jpg" alt="First slide" >
            <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption text-left animated bounceInDown" style="animation-duration: 1.7s;">
            <div class="background-left">
              <h2>Pronađite auto po Vašoj meri!</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aspernatur. Lorem ipsum dolor sit. Lorem ipsum
                dolor sit amet consectetur ecusandae, possimus incidunt deserunt repudiandae. Dicta inventore, eum quia sequi
                voluptates consequatur, dolor consequuntur perferendis laboriosam eos odio a dolorum repellendus id!</p> -->
              <p class="caption-text">
                <a class="btn btn-theme btn-theme-md" href="/automobili.html">Vozni Park</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100 img-fluid" src="img/S500Slide2.jpg" alt="Second slide">
            <div class="mask rgba-black-strong"></div>
          </div>
          <div class="carousel-caption text-left animated bounceInRight" style="animation-duration: 1.7s;">
            <div class="background-left">
              <h2 class="h3-responsive">Interes klijenata nam je na prvom mestu!</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100 img-fluid" src="img/slide33.jpg" alt="Third slide">
            <div class="mask rgba-black-slight"></div>
          </div>
          <div class="carousel-caption text-right animated bounceInLeft" style="animation-duration: 1.7s;">
            <div class="background-right">
              <h2 class="h3-responsive">Tu smo da zadovoljimo Vaše zahteve i potrebe.</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quia.</p> -->
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100 img-fluid" src="img/slide44.jpg" alt="Third slide">
            <div class="mask rgba-black-slight"></div>
          </div>
          <div class="carousel-caption text-center animated bounceInDown" style="animation-duration: 1.7s;">
            <div class="background-center">
              <h2 class="h3-responsive">Kontaktirajte nas već danas.</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
              <p class="caption-text">
                <a class="btn btn-theme btn-theme-md" href="/kontakt.html">Kontakt</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <div class="owl-prev">
          <i class="fa fa-angle-left"></i>
        </div>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <div class="owl-next">
          <i class="fa fa-angle-right"></i>
        </div>
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
  </section>
  <!-- Slider END -->

  <!-- Slanje upita START -->
      <section class="slanje-upita">
        <div class="container">
        <form name="slanje upita" action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="row mt20">
                <div class="col-md-3 col-12">
                <label for="">Ime i Prezime</label>

                    <input type="text" name="imeprezime" class="form-control paddbut" required placeholder="Unesite ime i prezime">
                </div>
                <div class="col-md-3 col-12">
                <label for="">Email adresa</label>
                    <input type="email" name="mail" class="form-control paddbut" required placeholder="Unesite Vašu email adresu">
                </div>
                <div class="col-md-3 col-6" >
                <label for="">Datum i Vreme preuzimanja</label>
                  <div class="input-group">
                  <div class="col-md-8 no-padding">
                      <!-- <input type="text" name="imeprezime" class="form-control paddbut" required placeholder="Unesite ime i prezime"> -->
                      <input type="text" class="form-control date" name="pickup_date" value="2020/02/22" id="date_timepicker_start"  placeholder="Date">
                      <span class="icon-calendar"><img src="img/calendar.svg" width="20px "alt="Rent a car Beograd preuzimanje vozila"></span>
                       
                  </div>
                  <div class="col-md-4 no-padding">
                      <input type="text" class="form-control time" name="pickup_time" value="12:00" id="datetimepicker2" placeholder="Time">
                      <span class="icon-clock"><img src="/img/clock.svg" width="20px "alt="Rent a car Beograd vreme preuzimanja vozila"></span>
                  </div>
                </div>
                </div>
                <div class="col-md-3 col-6">
                <label for="">Datum i Vreme vraćanja</label>
                    <div class="input-group">
                    <div class="col-md-8 no-padding">
                        <input type="text" class="form-control date" name="return_date" value="2020/02/23" id="date_timepicker_end" placeholder="Date">
                        <span class="icon-calendar"><img src="img/calendar.svg" width="20px "alt="Rent a car Beograd preuzimanje vozila"></span>
                    </div>
                    <div class="col-md-4 no-padding">
                        <input type="text" class="form-control time" name="return_time" value="12:00" id="datetimepicker3" placeholder="Time">
                        <span class="icon-clock"><img src="/img/clock.svg" width="20px "alt="Rent a car Beograd vreme preuzimanja vozila"></span>
                    </div>
                    </div>
                  </div>
                 
              </div>
              <div class="row mt20">
                  <div class="col-md-3">
                  <label for="">Vaš kontakt telefon</label>
                      <input type="text" name="telefon" class="form-control paddbut" required placeholder="Unesite telefon">
                  </div>
                  <div class="col-md-3">
                  <label for="">Izaberite željeni automobil</label>
                      <select name="automobil" class="paddbut form-control" data-placeholder="Odaberite automobil">
                          <option value="">Odaberite automobil</option>
                          <option >Auto 1</option><option >Auto 2</option><option >Auto 3</option><option >Auto 4</option><option >Auto 5</option><option >Auto 6</option><option >Auto 7</option><option>Auto 8</option><option >Auto 9</option><option>Auto 10</option>
                        </select>
                  </div>
                  <div class="col-md-3">
                  <label for="">Lokacija preuzimanja</label>
                      <select name="lokacija-preuzimanja" class="form-control"  >
                          <option value="">Lokacija preuzimanja</option>
                          <option >Office</option><option >Aerodrom</option>
                        </select>
                  </div>
                  <div class="col-md-3">
                  <label for="">Lokacija vraćanja</label>
                      <select name="lokacija-povratka" class="paddbut form-control" title='-Izaberite  automobil'>
                          <option value="">Lokacija povratka</option>
                          <option>Office</option><option >Aerodrom</option>
                        </select>
                  </div>
                </div>
                <div class="row mt20">
                  <div class="col-md-3 offset-md-9">
                      <input name="posalji" type="submit" value="POŠALJI UPIT" class="btn btn-light float-right">
                  </div>
                </div>
            </div>
          </div>
          </form>
        </div>
      </section>
  <!-- Slanje upita END -->


<!-- Section ukratko o nama START -->
<section class="ukratko-o-nama">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <h2 class="section-title text-left">
            <small>Upoznajte se sa našom kompanijom</small>
            <br>
            <span>Ko Smo Mi ?</span>
          </h2>
          <p>INTER BUY u ponudi ima široku lepezu automobila za iznajmljivanje. Svako vozilo za rentiranje je u potpunosti pripremljno za letnju i zimsku sezonu shodno godišnjem periodu, redovno se održava i servisira. Sva rent a car vozila pokriva KASKO OSIGURANJE, i imate mogućnost da se vozite sa neograničenom kilometražom. Ukoliko želite dodatni komfor, možete iznajmiti i vozača. </p>
          <ul class="list-icons">
            <li>
              <i class="fa fa-check-circle"></i>&nbsp;&nbsp;&nbsp;Pouzdano, povoljno i sigurno</li>
            <li>
              <i class="fa fa-check-circle"></i>&nbsp;&nbsp;&nbsp;Odaberite jedno od naših mnogobrojnih vozila</li>
          </ul>
          <p class="btn-row">
            <a href="/automobili.php" class="btn btn-theme btn-theme-md btn-theme-1">Pogledajte naš vozni park</a>
            <a href="/kontakt.php" class="btn btn-theme btn-theme-md btn-theme-transparent">Kontaktirajte nas</a>
          </p>
        </div>
        <div class="col-md-6">
          <div class="owl-carousel">
            <div class="item">
              <a href="/img/slide-775x500x1.jpg" data-gal="prettyPhoto">
                <img class="img-fluid" src="/img/slide-mini-1.jpg" alt="" />
              </a>
            </div>

            <div class="item">
              <a href="/img/slide-775x500x1.jpg" data-gal="prettyPhoto">
                <img class="img-fluid" src="/img/slide-mini-2.jpg" alt="" />
              </a>
            </div>

            <div class="item">
              <a href="/img/slide-775x500x1.jpg" data-gal="prettyPhoto">
                <img class="img-fluid" src="/img/slide-mini-3.jpg" alt="" />
              </a>
            </div>

            <div class="item">
              <a href="/img/slide-775x500x1.jpg" data-gal="prettyPhoto">
                <img class="img-fluid" src="/img/slide-mini-4.jpg" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- Section ukratko o nama END -->


  <!-- Section Swiper ponuda START -->
  <section class="extra-ponuda">
    <div class="container">

      <h2 class="section-title">
        <small>Koja Vrsta Vozila Vam Je Potrebna</small>
        <span>Pogledajte našu specijalnu ponudu po povoljnim cenama</span>
      </h2>


        <!-- tab 1 -->
        <!-- <div class="tab-pane" id="tab-1"> -->

          <div class="swiper swiper--offers-best">
            <div class="swiper-container">

              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="thumbnail no-border no-padding thumbnail-car-card">
                    <div class="media">
                      <a class="media-link" data-gal="prettyPhoto" href="/img/car-370x220x1.jpg">
                        <img src="/img/automobili/X6.jpg" alt="" class="img-fluid" />
                        <span class="icon-view">
                          <strong>
                            <i class="fa fa-eye fa-lg"></i>
                          </strong>
                        </span>
                      </a>
                    </div>
                    <div class="caption text-center">
                      <h4 class="caption-title">
                        <a href="#">BMW X6</a>
                      </h4>
                      <div class="caption-text">Po ceni od 4900/dan</div>
                      <div class="buttons">
                        <a class="btn btn-theme" href="#">Rentiraj</a>
                      </div>
                      <table class="table">
                        <tr>
                          <td>
                            <i class="fa fa-car"></i> 2012</td>
                          <td>
                            <i class="fas fa-tachometer-alt"></i> Dizel</td>
                          <td>
                            <i class="fa fa-cog"></i> Automatsko</td>
                          <td>
                            <i class="fa fa-road"></i> 14000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="thumbnail no-border no-padding thumbnail-car-card">
                    <div class="media">
                      <a class="media-link" data-gal="prettyPhoto" href="/img/car-370x220x2.jpg">
                        <img src="/img/automobili/smax_1.jpg" alt="" class="img-fluid"/>
                        <span class="icon-view">
                          <strong>
                            <i class="fa fa-eye fa-lg"></i>
                          </strong>
                        </span>
                      </a>
                    </div>
                    <div class="caption text-center">
                      <h4 class="caption-title">
                        <a href="#">FORD S-MAX</a>
                      </h4>
                      <div class="caption-text">Po ceni od 3800/dan</div>
                      <div class="buttons">
                        <a class="btn btn-theme" href="#">Rentiraj</a>
                      </div>
                      <table class="table">
                        <tr>
                          <td>
                            <i class="fa fa-car"></i><br> 2013</td>
                          <td>
                            <i class="fas fa-tachometer-alt"></i> <br>  Dizel</td>
                          <td>
                            <i class="fa fa-cog"></i><br> Manuelno</td>
                          <td>
                            <i class="fa fa-road"></i>  <br> 115000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="thumbnail no-border no-padding thumbnail-car-card">
                    <div class="media">
                      <a class="media-link" data-gal="prettyPhoto" href="/img/car-370x220x3.jpg">
                        <img src="/img/automobili/phaeton _1.jpg" alt="" class="img-fluid"/>
                        <span class="icon-view">
                          <strong>
                            <i class="fa fa-eye fa-lg"></i>
                          </strong>
                        </span>
                      </a>
                    </div>
                    <div class="caption text-center">
                      <h4 class="caption-title">
                        <a href="#">VOLKSWAGEN  PHAETON</a>
                      </h4>
                      <div class="caption-text">Po ceni od 3360/dan</div>
                      <div class="buttons">
                        <a class="btn btn-theme" href="#">Rentiraj</a>
                      </div>
                      <table class="table">
                        <tr>
                          <td>
                            <i class="fa fa-car"></i><br> 2006</td>
                          <td>
                            <i class="fas fa-tachometer-alt"></i><br> Dizel</td>
                          <td>
                            <i class="fa fa-cog"></i><br> Automatsko</td>
                          <td>
                            <i class="fa fa-road"></i><br> 49000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="thumbnail no-border no-padding thumbnail-car-card">
                    <div class="media">
                      <a class="media-link" data-gal="prettyPhoto" href="/img/car-370x220x4.jpg">
                        <img src="/img/automobili/rr_1.jpg" alt="" class="img-fluid"/>
                        <span class="icon-view">
                          <strong>
                            <i class="fa fa-eye fa-lg"></i>
                          </strong>
                        </span>
                      </a>
                    </div>
                    <div class="caption text-center">
                      <h4 class="caption-title">
                        <a href="#">RANGE ROVER SPORT</a>
                      </h4>
                      <div class="caption-text">Po ceni od 5400/dan</div>
                      <div class="buttons">
                        <a class="btn btn-theme" href="#">Rentiraj</a>
                      </div>
                      <table class="table">
                        <tr>
                          <td>
                            <i class="fa fa-car"></i><br> 2006</td>
                          <td>
                            <i class="fas fa-tachometer-alt"></i><br> Dizel</td>
                          <td>
                            <i class="fa fa-cog"></i><br> Automatsko</td>
                          <td>
                            <i class="fa fa-road"></i><br> 88000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="swiper-button-next">
              <i class="fa fa-angle-right"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="fa fa-angle-left"></i>
            </div>

          </div>

        <!-- </div> -->
     
      </div>

  </section>
  <!-- Section Swiper ponuda END -->



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
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/jquery.datetimepicker.js"></script>
  <script src="js/bootstrap-select.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

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

    const swiper = new Swiper('.swiper-container', {

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
            // pagination: '.swiper-pagination',
            slidesPerView: 3,
            paginationClickable: true,
            spaceBetween: 25,
            loop: true,
            autoplay: {
                delay: 2000
            },
            grabCursor: true,
            observer: true, 
            observeParents: true,
            breakpoints: {
        300: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
            }  
        });

//               var navBar = $('.navbar');

// $(window).scroll(function() {
//   if ($(window).scrollTop() > 300) {
//     navBar.addClass('animated');
//     navBar.addClass('slideInDown');
//     navBar.addClass("nav-opacity");

//   }
//   //  else {
//   //   navBar.removeClass('animated');
//   //   navBar.removeClass('slideInDown');
//   //   navBar.removeClass("nav-opacity");

//   // }
// });
/////////////////////////////////////////////////
jQuery(function(){
 jQuery('#date_timepicker_start').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
      minDate: new Date()
       
   })
  },
  timepicker:false
 });
 jQuery('#date_timepicker_end').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
   })
  },
  timepicker:false
 });
});

jQuery('#datetimepicker2').datetimepicker({
  datepicker:false,
  format:'H:i'
});

 jQuery('#datetimepicker3').datetimepicker({
  datepicker:false,
  format:'H:i'
});
  </script>

</body>

</html>