<?php 


shuffle($data); // Rand Show;
$x = 0;
echo "<ul style='list-style:none;'>";
while($x < 6){
	

$prod = explode(',',$data[$x]);
$id=$prod[0];
$title = $prod[1]; // คอลั่ม 1;
$img = $prod[2]; // คอลั่ม 2;
$prod_link = $prod[3]; // คอลั่ม3;
$titleurl=slug($title);

echo '<li style="float:left;text-align:center;padding:10px;min-height:200px;max-width:150px"><a title="'.$title.'" shape="rect" rel="nofollow" href="http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html"><img style="width:100%" src="'.$img.'" alt="'.$title.'" /></a>
<p><a title="'.$title.'" shape="rect" rel="nofollow" href="http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html">'.$title.'</a></p>
</li>';
$x++;
}
echo "</ul>";



?>