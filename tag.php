<?php 



shuffle($data); // Rand Show;

$limit = 10;

//echo '<ul>';

//echo '<div style="text-align: left;">';

$numz=0;

for($x = 0; $x < $limit; $x++){

	



$prod = explode(",",$data[$x]); /* ถ้า CSV จาก imacro จะประมาณนี้ $prod = explode("\",\"",$data[$x]);*/

$id=$prod[0];

$titletag = $prod[1]; // คอลั่ม 1;

$img = $prod[2]; // คอลั่ม 2;

$prod_link = $prod[3]; // คอลั่ม3;

$titletagg=slug($titletag);

echo '<li><a href="http://'.$urlwebsite.'/topic/'.$id.'/'.$titletagg.'.html">'.$titletag.'</a>';

echo '</li>';

	

}

//echo '</div>';

//	echo '</ul>';

?>