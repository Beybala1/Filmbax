<?php

require_once 'mobileDetect/Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
// Any tablet device.
/*elseif( $detect->isTablet() ){
 echo'Bu ancaq planshetde gorunecek';
}*/
if ( $detect->isMobile()) {
echo'
<header class="slider" style="height:550px;">
 <div class="main-slider">
    <div class="swiper-wrapper">';
       
        $sec = mysqli_query($con,"SELECT *,movies.id, video_cdn.id as movie_id FROM movies,video_cdn where movies.original_title=video_cdn.orig_title
        order by vote_average desc limit 1,3");
        while($info = mysqli_fetch_array($sec))
        {
       
      echo'<div class="swiper-slide">
        <div class="slide-inner" data-background=https://www.themoviedb.org/t/p/w220_and_h330_face'.$info['poster_path'].'>
          <div class="container" data-swiper-parallax="200">
            <h6 style="font-family: Tahoma, sans-serif;" class="tagline">Ən yeni filmlər</h6>
            <h2 class="name"><a style="text-decoration:none;" href="film-single.php?id='.$info['movie_id'].'"><br><strong>'.$info['title'].'</strong></a></h2>
            <ul class="features">
              <li>
                <div class="rate">
                  <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                  </svg>
                  <b>'.$info['vote_average'].'</b> IMDB </div>
                <!-- end rate --> 
              </li>
              <li>
                <div class="year">'.$info['relaese_date'].'</div>
              </li>
              <li>
                <div class="hd">4K <b>ULTRA HD</b></div>
              </li>
              <li>';
               
                $jsec = mysqli_query($con,"SELECT * FROM janr WHERE gid='".$info['genre_id']."'");
                $jinfo = mysqli_fetch_array($jsec);
                echo'<div class="tags">'.$jinfo['gname'].'</div>';
    
              echo'</li>
            </ul>
            <a style="font-family: Tahoma, sans-serif;" href="film-single.php?id='.$info['movie_id'].'" class="play-btn">Filmi izlə</a> 
            <a href="hesab.php" class="add-btn">+</a> </div>
        </div>
      </div>';

        }   
        echo'
    </div>
    <div class="swiper-pagination"></div>
  </div>
</header>';
}
else{
 echo'
<header class="slider">
  <div class="main-slider">
    <div class="swiper-wrapper">';
       
        $sec = mysqli_query($con,"SELECT *,movies.id, video_cdn.id as movie_id FROM movies,video_cdn where movies.original_title=video_cdn.orig_title
        order by vote_average desc limit 1,3");
        while($info = mysqli_fetch_array($sec))
        {
      
          echo'<div class="swiper-slide">
          <div class="slide-inner" data-background=https://www.themoviedb.org/t/p/w220_and_h330_face'.$info['poster_path'].'>
            <div class="container" data-swiper-parallax="200">
              <h6 style="font-family: Tahoma, sans-serif;" class="tagline">Ən yeni filmlər</h6>
              <h2 class="name"><a style="text-decoration:none;" href="film-single.php?id='.$info['movie_id'].'"><br><strong>'.$info['title'].'</strong></a></h2>
              <ul class="features">
                <li>
                  <div class="rate">
                    <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                      <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                      <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                    </svg>
                    <b>'.$info['vote_average'].'</b> IMDB </div>
                  <!-- end rate --> 
                </li>
                <li>
                  <div class="year">'.$info['relaese_date'].'</div>
                </li>
                <li>
                  <div class="hd">4K <b>ULTRA HD</b></div>
                </li>
                <li>';
               
                $jsec = mysqli_query($con,"SELECT * FROM janr WHERE gid='".$info['genre_id']."'");
                $jinfo = mysqli_fetch_array($jsec);
                echo'<div class="tags">'.$jinfo['gname'].'</div>';
    
              echo'</li>
            </ul>';
            $desc=mb_substr($info['overview'],0,140);
            echo'
            <p class="description">'.$desc.'...</p>
            <a style="font-family: Tahoma, sans-serif;" href="film-single.php?id='.$info['movie_id'].'" class="play-btn">Filmi izlə</a> 
            <a href="hesab.php" class="add-btn">+</a> </div>
        </div>
      </div>';

        }   
        echo'
    </div>
    <div class="swiper-pagination"></div>
  </div>
</header>';
}
?>
     