<?php 

$url = 'https://www.hoteljob.in.th/mobile/get_postjob/trainee';
$content = file_get_contents($url);

$content = json_decode($content);
// echo '<pre>';print_r($content); exit;
foreach($content->result as $var){
    echo '<pre>'; print_r($var) ;
} 
?>