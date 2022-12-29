<?php
session_start();
$tarix = date('Y-m-d H:i:s');

if(isset($_SESSION['email']) && isset($_SESSION['parol']))
{echo'<meta http-equiv="refresh" content="0; URL=index.php">'; exit;}
?>
<!doctype html>
<html lang="az-AZ">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#e90101" />
  <title>Filmbax</title>
  <meta name="author" content="Themezinho">
  <meta name="description" content="For all kind of video streaming website">
  <meta name="keywords"
    content="digiflex, video, movie, show, tv, watch, online, streaming, stream, ads, trailer, imdb, dram, action, hollywood, cinema, rate">

  <!-- SOCIAL MEDIA META -->
  <meta property="og:description" content="digiflex | Online Movie Streaming">
  <meta property="og:image" content="http://www.themezinho.net/digiflex/preview.png">
  <meta property="og:site_name" content="digiflex">
  <meta property="og:title" content="digiflex">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://www.themezinho.net/digiflex">

  <!-- TWITTER META -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@digiflex">
  <meta name="twitter:creator" content="@digiflex">
  <meta name="twitter:title" content="digiflex">
  <meta name="twitter:description" content="digiflex | Online Movie Streaming">
  <meta name="twitter:image" content="http://www.themezinho.net/digiflex/preview.png">

  <!-- FAVICON FILES -->
  <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
  <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
  <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
  <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
  <link href="ico/favicon.png" rel="shortcut icon">

  <!-- CSS FILES -->
  <link rel="stylesheet" href="css/lineicons.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="mobile-menu">
    <div class="inner">
      <div class="mobile-search">
        <h6 style="font-family: Tahoma, sans-serif;">Film ve ya Tv şou axtarin</h6>
        <form method="post" action="axtar.php">
          <input type="search" name="axtar" placeholder="Axtar">
          <input class="btn btn-danger btn-lg" type="submit" value="Tap">
        </form>
      </div>
      <!-- end mobile-search -->
      <a style="font-family: Tahoma, sans-serif;" href="hesab.php" class="button-account">GİRİŞ</a>
      <a style="transform:translateY(10px);" href="qeydiyyat.php" class="button-account">QEYDİYYAT</a>';
      <!-- end button-account -->
      <div class="site-menu">
        <ul>
          <li><a style="font-family: Tahoma, sans-serif;" href="index.php">ANA SƏHİFƏ</a></li>
          <li><a style="font-family: Tahoma, sans-serif;" href="film.php">FİLMLƏR</a></li>
        </ul>
      </div>
      <!-- end site-menu -->
    </div>
    <!-- end inner -->
  </nav>
  <!-- end mobile-menu -->
  <nav class="navbar">
    <div class="logo"> <a href="index.php"> <img src="images/logo.png" alt="Image"> </a> </div>
    <!-- end logo -->
    <div class="site-menu">
      <ul>
        <li><a style="font-family: Tahoma, sans-serif;" href="index.php">ANA SƏHİFƏ</a></li>
        <li><a style="font-family: Tahoma, sans-serif;" href="film.php">FİLMLƏR</a></li>
      </ul>
    </div>
    <!-- end site-menu -->
    <div class="user-menu">
      <div class="navbar-search"> <i class="lni lni-search-alt"></i> </div>
      <div style="font-family: Tahoma, sans-serif;" class="navbar-account"> <a href="hesab.php">GİRİŞ <i
            class="lni lni-user"></i> </a></div>
      <div class="navbar-account"> <a href="qeydiyyat.php">QEYDİYYAT <i class="lni lni-user"></i> </a></div>
      <!-- end navbar-account -->
    </div>
    <!-- end user-menu -->
    <div class="hamburger-menu">
      <button class="hamburger">
        <svg width="45" height="45" viewBox="0 0 100 100">
          <path class="line line1"
            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3"
            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
      </button>
    </div>
    <!-- end hamburger-menu -->
  </nav>
  <!-- end navbar -->
  <section class="search-box">
    <div class="container">
      <h6 style="font-family: Tahoma, sans-serif;">Film ve ya Tv şou axtarin</h6>
      <form method="post" action="axtar.php">
        <input type="search" name="axtar" placeholder="Axtar">
        <input class="btn btn-danger btn-lg" type="submit" value="Tap">
      </form>
      <!--
    <ul>
      <li><a href="#">Pulp Function</a></li>
      <li><a href="#">Henry Porter</a></li>
      <li><a href="#">The Racer</a></li>
    </ul>
    -->
    </div>
    <!-- end container -->
  </section>
  <header class="page-header">
    <div class="container">
      <h1 style="font-family: Tahoma, sans-serif;">Giriş</h1>
    </div>
  </header>
  <!-- end page-header -->
  <main>
    <section class="content-section ">
      <div class="container d-flex justify-content-center">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="membership">
              <h6 style="font-family: Tahoma, sans-serif;">Hesabınıza giriş edin</h6>
              <p style="font-family: Tahoma, sans-serif;">Hesabınız yoxdur? <a class="text-primary" href="qeydiyyat.php">Qeydiyyat</a></p>
              <?php
            //Qeydiyyat start--------------------------------------------------
             if(isset($_POST['d'])){

                //Tehlukesizlik start--------------------------------------------------------
                $email=trim($_POST['email']);
                $email=strip_tags($email);
                $email=htmlspecialchars($email);
                $email=mysqli_real_escape_string($con,$email);
           
                $parol=trim($_POST['parol']);
                $parol=strip_tags($parol);
                $parol=htmlspecialchars($parol);
                $parol=mysqli_real_escape_string($con,$parol);
            
                //Tehlukesizlik end--------------------------------------------------------

                if(!empty($email) && !empty($parol)){   
                    
                    $sec = mysqli_query($con,"select * from users where email='".$email."' and parol='".$parol."'"); 
                    $info = mysqli_fetch_array($sec);
                    
                    if($_POST['token'] == $_SESSION['token']){

                        if(mysqli_num_rows($sec)>0){ 
    
                            $_SESSION['user_id']  = $info['id'];
                            $_SESSION['ad']  = $info['ad'];
                            $_SESSION['email']  = $info['email'];
                            $_SESSION['parol']  = $info['parol'];
                                                        
                            echo'<meta http-equiv="refresh" content="0; URL=hesab.php">';
                        }
                        else{echo'<p style="color:red; font-weight:bold; font-family: Tahoma, sans-serif;">Daxil etdiyiniz məlumatlar yanlışdır</p>';}
                    }
                    else{echo'<p style="color:red; font-weight:bold; font-family: Tahoma, sans-serif;">Daxil etmək olmadı</p>';}
                }
                else{echo'<p style="font-family: Tahoma, sans-serif; font-weight:bold; color:red;">Zəhmət olmasa xanaları boş buraxmayın</p>';}
            }
            //Qeydiyyat end--------------------------------------------------
                                       
            $token = md5(time());
            $_SESSION['token'] = $token;
            ?>
              <form method="post">
                <div class="form-group" style="font-family: Tahoma, sans-serif;">
                  <input type="email" name="email" style="width:100%;" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" name="parol" placeholder="Parol" required>
                </div>
                <div class="form-group">
                  <input type="submit" name="d" class="btn btn-success" value="Daxil ol">
                </div>
                <input type="hidden" name="token" value="<?=$_SESSION['token']?>">
              </form>
            </div>
            <!-- end membership -->
          </div>
          <!-- end col-7 -->

          <!-- end col-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end content-section -->
    <footer class="footer">

      <div class="bottom-bar">
        <div style="font-family: Tahoma, sans-serif;" class="container"> <span>© 2022 Filmbax | Onlayn film və tv şou
            izlə</span> <span>Bəybala Muxtarov <a href="http://filmbax.tk/">Filmbax</a></span> </div>
        <!-- end container -->
      </div>
      <!-- end bottom-bar -->
    </footer>
    <!-- end footer -->
  </main>

  <!-- JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/fancybox.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>
