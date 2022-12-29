<?php
session_start();
date_default_timezone_set('Asia/Baku');
$tarix = date('Y-m-d H:i:s');
?>
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
        <h6>Type movie or tv show name to find it</h6>
        <form>
          <input type="search" placeholder="Search here">
          <input type="submit" value="FIND">
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
          <li><a style="font-family: Tahoma, sans-serif;" href="tv-shows.html">TV ŞOULAR</a></li>
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

      <div class="navbar-account"> <a href="hesab.php">Qeydiyyat <i class="lni lni-user"></i> </a></div>
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
      <h6>Type movie or tv show name to find it</h6>
      <form>
        <input type="search" placeholder="Search here">
        <input type="submit" value="FIND">
      </form>
      <ul>
        <li><a href="#">Pulp Function</a></li>
        <li><a href="#">Henry Porter</a></li>
        <li><a href="#">The Racer</a></li>
      </ul>
    </div>
    <!-- end container -->
  </section>
  <main>
    <header class="page-header single" data-background="images/movie-poster-bg.jpg">
      <div class="container">
        <div class="row">
          <?php
            require_once 'mobileDetect/Mobile_Detect.php';
            $detect = new Mobile_Detect;
            if ( $detect->isMobile()){
         ?>
          <div class="col-12">
            <div class="video-player">
              <a onclick="history.back()" class="back-btn"><i class="lni lni-chevron-left"></i> Geri</a>
              <?php
                $sec = mysqli_query($con,"SELECT *,movies.id, video_cdn.id as movie_id FROM movies,video_cdn where 
                movies.original_title=video_cdn.orig_title and video_cdn.id='".$_GET['id']."'");
                $info = mysqli_fetch_array($sec);
              ?>
              <iframe width="950" height="600" src="<?=$info['iframe']?>" title="Movie" frameborder="0"
              w="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
              </iframe>
            </div>
            <!-- end video-player -->
          </div>
          <!-- end col-12 -->
        </div>
        <?php
        }
        else{
        ?>
        <div class="col-12">
          <div class="video-player">
            <a onclick="history.back()" class="back-btn"><i class="lni lni-chevron-left"></i> Geri</a>
            <?php
                $sec = mysqli_query($con,"SELECT *,movies.id, video_cdn.id as movie_id FROM movies,video_cdn 
                where movies.original_title=video_cdn.orig_title and video_cdn.id='".$_GET['id']."'");
                $info = mysqli_fetch_array($sec);
            ?>
            <iframe width="950" height="600" src="<?=$info['iframe']?>" title="Movie" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
          <!-- end video-player -->
        </div>
        <!-- end col-12 -->
      </div>
      <?php
		}
		?>

      <!-- end col-12 -->
      <!-- end row -->
      </div>
      <!-- end container -->
    </header>
    <!-- end header -->
    <section class="content-section" data-background="#ffffff">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <?php
            $sec = mysqli_query($con,"SELECT *,movies.id, video_cdn.id as movie_id FROM movies,video_cdn where 
            movies.original_title=video_cdn.orig_title and video_cdn.id='".$_GET['id']."'");
            $info = mysqli_fetch_array($sec);
            if ( $detect->isMobile()){
            ?>
            <div class="movie-info-box">
              <h2 style="font-size:3em;" class="name"><?=$info['title']?><br></h2>
              <?php
            }
            else{
            ?>
              <div class="movie-info-box">
                <h2 class="name"><?=$info['title']?><br></h2>
                <?php
            }
            ?>
                <ul class="features">
                  <li>
                    <div class="rate">
                      <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" fill="transparent"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle class="circle-chart__background" stroke="#eee" stroke-width="2" fill="none" cx="15"
                          cy="15" r="14"></circle>
                        <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100"
                          cx="15" cy="15" r="14"></circle>
                      </svg>
                      <b><?=$info['vote_average']?></b> IMDB </div>
                    <!-- end rate -->
                  </li>
                  <li>
                    <div class="year"><?=$info['relaese_date']?></div>
                  </li>
                  <li>
                    <div class="hd">1080 <b>HD</b></div>
                  </li>
                  <li>
                    <?php
                $jsec = mysqli_query($con,"SELECT * FROM janr WHERE gname='".$info['genre']."'");
                $jinfo = mysqli_fetch_array($jsec);
                ?>
                    <div class="tags"><?=$jinfo['gname']?></div>
                  </li>
                </ul>
                <p class="description"><?=$info['overview'].'.'?></p>
              </div>
              <!-- end movie-info-box -->
            </div>
            <!-- end col-8 -->
            <div class="col-lg-4">
              <div class="movie-side-info-box">
                <figure><img style="height:420px;" src="<?='https://www.themoviedb.org/t/p/w220_and_h330_face'.$info['poster_path']?>" alt="Image"></figure>
                <ul>
                  <li style="font-family: Tahoma, sans-serif;"><strong>Çıxış tarixi: </strong>
                    <?=$info['release_date']?></li>
                  <li><strong>Director:</strong></li>
                  <li><strong>Production:</strong></li>
                  <li><strong>Screenplay:</strong></li>
                </ul>
              </div>
              <!-- end movie-side-info-box -->
            </div>
            <!-- end col-4 -->
          </div>
          <!-- end col-12 -->
          <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section" data-background="#111111">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title light">
              <h2 style="font-family: Tahoma, sans-serif;">Oxşar filmlər</h2>
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <?php
        $sec = mysqli_query($con,"SELECT
        movies.genre,
        movies.poster_path,
        movies.vote_average,
        movies.title,
        janr.id,
        janr.gid,
        janr.gname,
        video_cdn.id
        FROM movies,janr,video_cdn
        where movies.genre=janr.gname AND
        movies.genre='".$info['genre']."' AND
        movies.original_title=video_cdn.orig_title
        GROUP BY movies.title
        limit 1,12");

        while($info = mysqli_fetch_array($sec))
        {
        ?>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="video-thumb light">
              <a href="film-single.php?id=<?=$info['id']?>">
                <figure class="video-image"> <img src="<?='https://www.themoviedb.org/t/p/w220_and_h330_face'.$info['poster_path']?>" alt="Image">
                  <div class="circle-rate">
                    <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                      xmlns="http://www.w3.org/2000/svg">
                      <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15"
                        cy="15" r="14"></circle>
                      <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100"
                        cx="15" cy="15" r="14"></circle>
                    </svg>
                    <b><?=$info['vote_average']?></b> </div>
                  <!-- end circle-rate -->
                  <div class="hd">1080 <b>HD</b></div>
                  <!-- end hd -->
                </figure>
              </a>
              <div class="video-content"> <small class="range"></small>
                <ul class="tags">
                  <li>
                    <?php
                echo'<div class="tags">'.$info['gname'].'</div>';
                ?>
                  </li>
                </ul>
                
                <!-- end age -->
                <h3 class="name"><a href="film-single.php?id=<?=$info['id']?>"><?=$info['title']?></a></h3>
              </div>
              <!-- end video-content -->

            </div>
            <!-- end video-thumb -->
          </div>
          <?php
        }
        ?>
          <!-- end col-2 -->
          <!-- end col-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end content-section -->


    <section class="content-section" data-background="#ffffff">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2 style="font-family: Tahoma, sans-serif;">Film haqqında kommentlər</h2>
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-12">
            <div class="comments">
              <?php
				    
				    if(isset($_POST['d'])){	
                        
                        if($_POST['komment']!=$_POST['metn']){
        				    
            				$metn=trim($_POST['metn']);
                            $metn=strip_tags($metn);
                            $metn=htmlspecialchars($metn);
                            $metn=mysqli_real_escape_string($con,$metn);
                                
                            $id=$_GET['id'];
                            
                            if(!empty($metn)){   
            
                                if($_POST['token'] == $_SESSION['token']){

                                    $daxil_et = mysqli_query($con,"INSERT INTO comments(fid,user_id,comment,tarix) VALUES('".$id."','".$_SESSION['user_id']."','".$metn."','".$tarix."')"); 
                                }
                            } 
                            else{echo'<p style="font-family: Tahoma, sans-serif; font-weight:bold; color:red;">Zəhmət olmasa xanaları boş buraxmayın</p>';}
                        }
                        else{echo'Metn eynidir';}
        			}
                    ?>
              <ul class="comments-list">
                <?php
				    $id=$_GET['id'];
				    $sec = mysqli_query($con,"select 
            		users.id,
            		users.ad,
            	    comments.fid,
            	    comments.user_id,
            	    comments.comment,
            	    comments.tarix
            		from users,comments 
            		where fid='".$id."' AND comments.user_id=users.id
            		order by tarix desc");
            		
				    while($info = mysqli_fetch_array($sec)){
				    echo'
					<li>
					    <figure class="avatar"><img src="images/avatar01.jpg" alt="Image"></figure>
				        <div class="comment">
				            <h6>'.$info['ad'].'</h6>
        					<p style="font-family: Tahoma, sans-serif;">'.$info['comment'].'</p>
        					<small>'.$info['tarix'].'</small>
        					<a href="#">Cavab</a>
				        </div>
					</li>';
				    }
				    echo'<form method="post"><input type="hidden" name="komment" value="'.$_POST['metn'].'"></form>';
					?>
              </ul>
              <div class="comments-form">
                <?php
				    $token = md5(time());
                    $_SESSION['token'] = $token;
				    if(isset($_SESSION['ad']) && isset($_SESSION['parol'])){
				        
				        echo'
    					<h5 style="font-family: Tahoma, sans-serif;">Komment yazın</h5>
    					<form method="post">
        					<div class="form-group">
        					    <textarea style="font-family: Tahoma, sans-serif; color:black; font-weight:bold;" name="metn" placeholder="Düşüncələriniz"></textarea>
        					    <input type="hidden" name="token" value="'.$_SESSION['token'].'">
        					</div>
        					<div class="form-group">
        					    <input style="font-family: Tahoma, sans-serif;" name="d" type="submit" value="Göndər">
        					</div>
    					</form>';
				    }
				    else{
				        echo'<h5 style="font-family: Tahoma, sans-serif;">Filmlərdə komment yaza bilmək üçün əvvəlcə giriş etməlisiniz 
    				    <a target="_blank" style="font-family: Tahoma, sans-serif; color:red;" href="hesab.php" class="button-account">Giriş.</a> 
    				    Hesabınız yoxdursa <a target="_blank" style="font-family: Tahoma, sans-serif; color:red;" href="qeydiyyat.php" class="button-account"> Qeydiyyat</a></h5>';
				    }
    				?>
              </div>
              <!-- end comments-form -->
            </div>
          </div>
          <!-- end col-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>


    </section>
    <!-- end content-section -->
    <footer class="footer">
      <div class="bottom-bar">
        <div style="font-family: Tahoma, sans-serif;" class="container"> <span>© 2022 Filmbax | Onlayn film və tv şou
            izlə</span>
          <span>Bəybala Muxtarov <a href="http://filmbax.tk/">Filmbax</a></span> </div>
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
