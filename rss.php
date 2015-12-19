<?



$adate = date("l, d M Y H:i:s");

header("Content-Type: application/rss+xml; charset=utf-8");

	include('function.php');

echo'<?xml version="1.0" encoding="UTF-8"?>

<rss version="2.0"

	xmlns:content="http://purl.org/rss/1.0/modules/content/"

	xmlns:wfw="http://wellformedweb.org/CommentAPI/"

	xmlns:dc="http://purl.org/dc/elements/1.1/"

	xmlns:atom="http://www.w3.org/2005/Atom"

	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"

	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"

	>

	

	<channel>

	<title>test</title>

	<atom:link href="http://'.$urlwebsite.'/rss.xml" rel="self" type="application/rss+xml" />

	<link>http://'.$urlwebsite.'</link>

	<description>Review EBook '.$keyword.' and digital product for you.</description>

	<lastBuildDate>'.date("l, d M Y H:i:s").' +0000</lastBuildDate>

	<language>en</language>

	<sy:updatePeriod>hourly</sy:updatePeriod>

	<sy:updateFrequency>1</sy:updateFrequency>

	<generator>http://wordpress.org/?v=3.3.1</generator>

	

	';



$data1 = file('data1.csv');
$data2 = file('data2.csv');
//$data3 = file('data3.csv');
//$data4 = file('data4.csv');
//$data5 = file('data5.csv');

//$data = array_merge($data1,$data2,$data3,$data4,$data5);
//$data = array_merge($data1,$data2,$data3);
$data = array_merge($data1,$data2);


shuffle($data); // Rand Show;

$limit = 25;

	for($x = 0; $x < $limit; $x++){

	



$prod = explode(",",$data[$x]); /* ถ้า CSV จาก imacro จะประมาณนี้ $prod = explode("\",\"",$data[$x]);*/

$id=$prod[0];

$title = $prod[1]; // คอลั่ม 1;

$img = $prod[2]; // คอลั่ม 2;

$prod_link = $prod[3]; // คอลั่ม3;

$titleurl=slug($title);





echo'

	<item>

		<title>'.$title.'</title>

		<link>http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html</link>

		<comments>http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html</comments>

		<pubDate>'.date("l, d M Y H:i:s").' +0000</pubDate>

		<dc:creator>admin</dc:creator>

				<category><![CDATA[Student Loan]]></category>



		<guid isPermaLink="false">http://localhost/wordpress/?p=94561</guid>

		<description><![CDATA[Looking for '.$title.' ? Here is the spot for that you go shopping for '.$title.' in special value. We have an inclination to collect information and facts of '.$title.' on our internet site. You’ll have the capacity to check image, feature, description and reviews of '.$title.' . Let’s check it currently <a href="http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html">Readmore...</a>]]></description>

			<content:encoded><![CDATA[Looking for '.$title.' ? Here is the spot for that you go shopping for '.$title.' in special value. We have an inclination to collect information and facts of '.$title.' on our internet site. You’ll have the capacity to check image, feature, description and reviews of '.$title.' . Let’s check it currently

]]></content:encoded>

			<wfw:commentRss>http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html</wfw:commentRss>

		<slash:comments>0</slash:comments>

		</item>



';





	}

	echo'</channel>

</rss>';



?>