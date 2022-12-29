<pre>
	<?php
	$con = mysqli_connect('localhost','filmbaxt_beybala','beybala1','filmbaxt_filmbax');
	$api = file_get_contents('https://videocdn.tv/api/movies?api_token=XiqFlE1vFOJQoZcmxbed1xzShiciNmPU&ordering=id&direction=desc');
	$data = json_decode($api);
	print_r($data);

	for($i=0; $i<=count($data->data); $i++){

		for($a=0; $a<=4; $a++){

			$id = $data->data[$i]->id;
			$title = mysqli_real_escape_string($con,strip_tags(trim($data->data[$i]->orig_title)));
			$relase_date = mysqli_real_escape_string($con,strip_tags(trim($data->data[$i]->released)));
			$content_type = mysqli_real_escape_string($con,strip_tags(trim($data->data[$i]->media[0]->content_type)));
			$path = mysqli_real_escape_string($con,strip_tags(trim($data->data[$i]->media[0]->path)));
			$url = mysqli_real_escape_string($con,strip_tags(trim($data->data[$i]->media[0]->qualities[$a]->url)));
			//$resolution = $data->data[$i]->media[0]->qualities[$a]->resolution;
			
			echo $id.'<br>';
			echo $title.'<br>';
			echo $relase_date.'<br>';
			echo $content_type.'<br>';
			echo $path.'<br>';
			echo $url.'<br>';
			//echo $resolution.'<br>';
			//echo '<iframe src='.$path.' frameborder="0"  width="640" height="480" allowfullscreen></iframe><br>';
			//echo "<img width=500 height=400 src=".$image."><br>";

			/*$daxilet = mysqli_query($con,"INSERT INTO movies(title,relase_date,content_type,paths,urls)
			VALUES('".$title."','".$relase_date."','".$content_type."','".$path."','".$url."')");

			if($daxilet==true)
			{echo'Ugurla elave edildi!<br>';}
			else
			{echo'Elave etmek mumkun olmadi!<br>';}*/
		}
	}
	?>
</pre>