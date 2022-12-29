<pre>
<?php
$con = mysqli_connect('localhost','filmbaxt_beybala','beybala1','filmbaxt_filmbax');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

for($p=0; $p<2; $p++)
{
    $data = file_get_contents('https://api.themoviedb.org/3/discover/movie?api_key=c2d177502205385b5b0e671e3396a2ec&primary_relese_date.gte=2022&primary_release_date.lte=2022-06-01&language=en-US&page='.$p);
    $data = json_decode($data);
    
    //print_r($data);
    for($i=0; $i<count($data->results); $i++)
    {
        $title = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->title)));
        $o_title = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->original_title)));
        $imdb = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->vote_average)));
        $language = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->original_language)));
        $overview = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->overview)));
        $popularity = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->popularity)));
        $date = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->release_date)));
        $v_average = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->vote_average)));
        $vote_count = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->vote_count)));
        $backdrop_path = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->backdrop_path)));
        $g_ids = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->genre_ids[0])));
        $poster_path = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->poster_path)));
        $fid = mysqli_real_escape_string($con,strip_tags(trim($data->results[$i]->id)));
        
        $vlink ='https://api.themoviedb.org/3/movie/'.$fid.'/videos?api_key=c2d177502205385b5b0e671e3396a2ec';
        $vdata = file_get_contents($vlink);
        $vdata = json_decode($vdata);
        
        if($vdata->results[0]->site=='YouTube')
        {$vkey = $vdata->results[0]->key;}
        else
        {
            $keyword = urlencode($title.' Trailer');
            $vdata = file_get_contents('https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=1&q='.$keyword.'&key=AIzaSyBn5gms6x8o7-AoSeVlQbreCL4Gn_UDzZc');
            $vkey = $data->items[$i]->id->videoId;
        }
        //print_r($vdata);
        
       /*
            echo 'TITLE: '.$title.'<br>';
            echo 'ID: '.$fid.'<br>';
            echo 'GENRE ID: '.$g_ids.'<br>';
            echo 'ORIGINAL TITLE: '.$o_title.'<br>';
            echo 'LANGUAGE: '.$language.'<br>';
            echo 'OVERvIEW: '.$overview.'<br>';
            echo 'POPULARITY: '.$popularity.'<br>';
            echo 'Date: '.$date.'<br>';
            echo 'VOTE AVERAGE: '.$v_average.'<br>';
            echo 'VOTE COUNT: '.$vote_count.'<br>';
            echo 'IMDB: '.$imdb.'<br>';
            echo '<img style="width:400px; height:auto;" src="https://www.themoviedb.org/t/p/w1280'.$backdrop_path.'"><br><br><br>';
            echo '<img style="width:400px; height:auto;" src="https://www.themoviedb.org/t/p/w1280'.$poster_path.'"><br><br><br>';
            
            echo'<iframe width="450" height="384" src="https://www.youtube.com/embed/'.$vkey.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>';
        */
            
            if(!empty($title) && !empty($g_ids) && !empty($o_title) && !empty($language) 
            && !empty($overview) && !empty($date) && !empty($vkey)){
                
                $yoxla = mysqli_query($con,"SELECT * FROM movie_db WHERE movie_id='".$fid."'");
                if(mysqli_num_rows($yoxla)==0)
                {
                    $daxilet = mysqli_query($con,"INSERT INTO movie_db(movie_id,title,original_title,vote_average,overview,
                    release_date,genre_id,original_language,popularity,vote_count,backdrop_path,poster_path,video)
                    VALUES('".$d."','".$title."','".$o_title."','".$imdb."','".$overview."','".$date."','".$g_ids."','".$language."','".$popularity."',
                    '".$vote_count."','https://www.themoviedb.org/t/p/w1280".$backdrop_path."','https://www.themoviedb.org/t/p/w1280".$poster_path."','".$vkey."')");
                }
                else
                {echo'Bu film artiq bazada var<br><br>';}
            }
            else{
                echo 'Error<br>';
            }
            
            $jdata = file_get_contents('https://api.themoviedb.org/3/genre/movie/list?api_key=c2d177502205385b5b0e671e3396a2ec&language=en-US');
            $jdata = json_decode($jdata);
            
            $g_id = mysqli_real_escape_string($con,strip_tags(trim($jdata->genres[$i]->id)));
            $janr = mysqli_real_escape_string($con,strip_tags(trim($jdata->genres[$i]->name)));
            
            //print_r($jdata);
            
            $yoxla = mysqli_query($con,"SELECT * FROM janr WHERE gid='".$g_ids."'");
            if(mysqli_num_rows($yoxla)==0){ 
                
                $daxilet = mysqli_query($con,"INSERT INTO janr(gid,gname) VALUES('".$g_id."','".$janr."')");
                    
                echo"INSERT INTO janr(gid,gname) VALUES('".$g_id."','".$janr."')";
            
                if($daxilet==true)
                {echo'Ugurla elave edildi!<br>';}
                else
                {echo'Elave etmek mumkun olmadi!<br>';}
            }

        //break;
        echo'<br><br>';
    }
}
?>

</pre>