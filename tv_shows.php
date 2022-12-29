<pre>

<?php
//https://api.themoviedb.org/3/tv/popular?api_key=<<api_key>>&language=en-US&page=1

    //$data = file_get_contents('https://api.themoviedb.org/3/tv/{tv_id}?177502205385b5b0e671e3396a2ec=177502205385b5b0e671e3396a2ec&language=en-US');
    $data = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=177502205385b5b0e671e3396a2ec&language=en-US&page=1');

    $data = json_decode($data);
    
    print_r($data);
?>
</pre>