
//// step4////
<?php 

$url = 'step4/register?name=rushika&email=rushika@gmail.com'; 
	

$url_components = parse_url($url); 


parse_str($url_components['query'], $params); 
	

echo ' Hi '.$params['name'].' your emailID is '.$params['email']; 

?> 