<?php


// $a = array('hello','world');
// var_dump($a);


// echo "<pre>".print_r($a,1)."</pre>";


// $b = [];
// for($i=0;$i<1000;$i++){
// 	$b[$i] = "mobil " . ($i+1);

// }
// for($i=0;$i<sizeof($b);$i++){
// if($i >=199 and $i <=299){
// 	echo $b[$i];

// }	

// }

// $c = ['d'=>['e'=>'s'],array('x'=>'u'),5=>[3,4],['x','d'=>[1,'f']]
// ];
// echo "<br>".$c['d']['e'];
// echo "<br>".$c[0]['x'];
// echo "<br>".$c[1]['0'];
// echo "<br>".$c[6]['d']['1'];

// echo"<pre>".print_r($_SESSION,1)."</pre>";
// $x = [];
// $x['nama'] = 'nama kamu';
// $x['alamat']= 'alamat';

// $s =[];
// $s['identitas']=$x;

// $u=[];
// $u[] = $s;
// $x = [];
// $x['nama'] = 'nama kamu2';
// $x['alamat']= 'alamat2';

// $s =[];
// $s['identitas']=$x;
// $u[]=$s;
for ($i=0;$i <= 100; $i++){
$u[$i]['identitas']['nama'] = 'nama'.$i;
$u[$i]['identitas']['alamat'] = 'alamat'.$i;
}

echo "<pre>".print_r($u,1)."</pre>";

?>