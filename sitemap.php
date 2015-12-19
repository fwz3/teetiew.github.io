<?

header("Content-Type: application/rss+xml; charset=utf-8");

	include('function.php');

echo'<?xml version="1.0" encoding="UTF-8"?>  

<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">		';



$data1 = file('data1.csv');
$data2 = file('data2.csv');
//$data3 = file('data3.csv');
//$data4 = file('data4.csv');
//$data5 = file('data5.csv');

//$data = array_merge($data1,$data2,$data3,$data4,$data5);
//$data = array_merge($data1,$data2,$data3);
$data = array_merge($data1,$data2);

shuffle($data); // Rand Show;

$limit = 4234;

	for($x = 0; $x < $limit; $x++){

	



$prod = explode(",",$data[$x]); /* ถ้า CSV จาก imacro จะประมาณนี้ $prod = explode("\",\"",$data[$x]);*/

$id=$prod[0];

$title = $prod[1]; // คอลั่ม 1;

$img = $prod[2]; // คอลั่ม 2;

$prod_link = $prod[3]; // คอลั่ม3;

$titleurl=slug($title);

echo'

	<url>  

		<loc>http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html</loc>

		<changefreq>weekly</changefreq>  

		<priority>1.0</priority>  

    </url>		';





	}

	echo'</urlset>';



?>