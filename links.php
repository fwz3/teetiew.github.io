<?



	include('function.php');



$data1 = file('data1.csv');
$data2 = file('data2.csv');
//$data3 = file('data3.csv');
//$data4 = file('data4.csv');
//$data5 = file('data5.csv');

//$data = array_merge($data1,$data2,$data3,$data4,$data5);
//$data = array_merge($data1,$data2,$data3);
$data = array_merge($data1,$data2);


shuffle($data); // Rand Show;

$limit = 1000;

	for($x = 0; $x < $limit; $x++){

	



$prod = explode(",",$data[$x]); /* ��� CSV �ҡ imacro �л���ҳ��� $prod = explode("\",\"",$data[$x]);*/

$id=$prod[0];

$title = $prod[1]; // ������ 1;

$img = $prod[2]; // ������ 2;

$prod_link = $prod[3]; // ������3;

$titleurl=slug($title);

echo'

	http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html</br>';





	}





?>