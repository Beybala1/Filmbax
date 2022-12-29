<pre>
<?php
$keyword=urlencode('Megi');
$data=file_get_contents('https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=5&q='.$keyword.'&key=AIzaSyBn5gms6x8o7-AoSeVlQbreCL4Gn_UDzZc');

$data = json_decode($data);

//print_r($data);

for($i=0; $i<count($data->items); $i++){
    
    $title=$data->items[$i]->snippet->title;
    $desc=$data->items[$i]->snippet->description;
    $video_id=$data->items[$i]->id->videoId;
    
    echo $title.'<br>'.$desc.'<br>';
    echo'<br><iframe width="535" height="401" src="https://www.youtube.com/embed/'.$video_id.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>';
    
}


?>
</pre>