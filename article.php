<?php


$foldername='./article/';
  $file=glob($foldername."*.txt");
  $rand=rand(0,(count($file)-1));
  $one=str_replace($foldername,'',$file[$rand]);
  $two=str_replace('.txt','',$one);
//echo $two.'<br><br><br>';

$getarticle = glob('article/'.$one);
			foreach($getarticle as $arti){
				$landz = $arti;
				}
				
	$article=file_get_contents($landz); 


$article = spin($article);



?>