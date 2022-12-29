<html lang="az-AZ">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#e90101"/>
<title>Filmbax</title>
<meta name="author" content="Themezinho">
<meta name="description" content="For all kind of video streaming website">
<meta name="keywords" content="digiflex, video, movie, show, tv, watch, online, streaming, stream, ads, trailer, imdb, dram, action, hollywood, cinema, rate">

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
      <input type="submit" value="Tap">
    </form>
		</div>
	<!-- end mobile-search -->
    <?php
    if(!isset($_SESSION['ad']) && !isset($_SESSION['parol'])){
        echo'
        <a style="font-family: Tahoma, sans-serif;" href="hesab.php" class="button-account">GİRİŞ</a>
        <a style="transform:translateY(10px);" href="qeydiyyat.php" class="button-account">QEYDİYYAT</a>';   
    }
    else{
        echo'
        <a style="font-family: Tahoma, sans-serif;" href="exit.php" class="button-account">Çıxış</a>';
    }
    ?>    
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
    <!-- end navbar-search -->
    <?php
    if(!isset($_SESSION['ad']) && !isset($_SESSION['parol'])){
        echo'
        <div style="font-family: Tahoma, sans-serif;" class="navbar-account"> <a href="hesab.php">GİRİŞ <i class="lni lni-user"></i> </a></div>
        <div class="navbar-account"> <a href="qeydiyyat.php">QEYDİYYAT <i class="lni lni-user"></i> </a></div> ';   
    }
    else{
        $sec = mysqli_query($con,"SELECT * FROM users where id='".$_SESSION['user_id']."'");
        $info = mysqli_fetch_array($sec);
        echo'<div style="font-family: Tahoma, sans-serif; font-weight:bold;" class="navbar-account"><a href="exit.php">Çıxış</a></div>
        <div style="font-family: Tahoma, sans-serif; font-weight:bold; " class="navbar-account">'.$info['full_ad'].'<i class="lni lni-user"></i></div>';
    }
    ?>    
    <!-- end navbar-account --> 
  </div>
  <!-- end user-menu --> 
      <div class="hamburger-menu">
        <button class="hamburger">
        <svg width="45" height="45" viewBox="0 0 100 100">
          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
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
      <input type="text" name="sorgu" placeholder="Axtar">
      <input type="submit" name="axtar" class="btn btn-danger btn-lg" value="Tap">
      <a class="btn btn-danger btn-lg" onclick="history.back()">Geri</a>
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
<!-- slider --> 
<?= include 'test.php';?>
<main>
  <!-- end content-section -->
  <section class="content-section" data-background="#111111">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center light">
            <h2 style="font-family: Tahoma, sans-serif;" >Ən yeni filmlər</h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
        <?php
        
        //Axtar start
        if(isset($_POST['axtar']) && !empty($_POST['sorgu'])){
            $axtar=trim($_POST['sorgu']); 
            $axtar=strip_tags($axtar);
            $axtar=htmlspecialchars($axtar);
            $axtar=mysqli_real_escape_string($con,$axtar);
        
            $sorgu = " where (title like '%".$axtar."%' or original_title like '%".$axtar."%')";
        }
        else{$sorgu = "";}
        //Axtar end
        
        $sec = mysqli_query($con,"SELECT *,movies.id, video_cdn.id as movie_id FROM movies,video_cdn 
        ".$sorgu." and 
        movies.title=video_cdn.orig_title 
        GROUP BY movies.original_title limit 1,24");
           
        echo "SELECT *,movies.id, video_cdn.id as movie_id FROM movies,video_cdn ".$sorgu." and movies.original_title=video_cdn.orig_title
        GROUP BY movies.original_title order by release_date desc limit 1,24";
        while($info = mysqli_fetch_array($sec))
        {
        ?>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="video-thumb light">
            <a href="film-single.php?id=<?=$info['movie_id']?>"><figure class="video-image"> <img src="<?='https://www.themoviedb.org/t/p/w220_and_h330_face'.$info['poster_path']?>" alt="Image">
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b><?=$info['vote_average']?></b> </div>
            </figure>
            </a>
            <div class="video-content"> <small class="range">190 min,</small>
              <ul class="tags">
                <li>Romance</li>
              </ul>
              <div class="age">PG13</div>
              <!-- end age -->
              <h3 class="name"><a href="film-single.php?id=<?=$info['movie_id']?>"><?=$info['title']?></a></h3>
            </div>
            <!-- end video-content --> 
          </div>
          <!-- end video-thumb --> 
        </div>
        <?php
        }
        if(isset($_GET['id'])){
            
            $sec = mysqli_query($con,"SELECT *,movies.id, video_cdn.id as movie_id FROM movies,video_cdn where (title like '%".$_POST['axtar']."%' or 
            overview like '%".$_POST['axtar']."%') and movies.original_title=video_cdn.orig_title
            GROUP BY movies.original_title limit 24,48");
            while($info = mysqli_fetch_array($sec))
            {
        ?>    
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="video-thumb light">
            <a href="film-single.php?id=<?=$info['movie_id']?>"><figure class="video-image"> <img src="<?='https://www.themoviedb.org/t/p/w220_and_h330_face'.$info['poster_path']?>" alt="Image">
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b><?=$info['vote_average']?></b> </div>
            </figure>
            </a>
            <div class="video-content"> <small class="range">190 min,</small>
              <ul class="tags">
                <li>Romance</li>
              </ul>
              <div class="age">PG13</div>
              <!-- end age -->
              <h3 class="name"><a href="film-single.php?fid=<?=$info['fid']?>"><?=$info['title']?></a></h3>
            </div>
            <!-- end video-content --> 
          </div>
          <!-- end video-thumb --> 
        </div>
        <?php
            }
        }
        ?>
        <!-- end col-2 -->
        <div class="col-12 text-center"> <a style="font-family: Tahoma, sans-serif;"  href="axtar.php?id" class="custom-button">Daha çox</a> </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
  <footer class="footer">
    
    <div class="bottom-bar">
        <div style="font-family: Tahoma, sans-serif;" class="container"> <span>© 2022 Filmbax | Onlayn film və tv şou izlə</span> <span>Bəybala Muxtarov <a href="http://filmbax.tk/">Filmbax</a></span> </div>      <!-- end container --> 
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
