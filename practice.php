<?php 
//1
$arr = [0,1,2,3,4];
echo $arr[2];
echo'<br>';
//2
$arr = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4];
echo $arr['two'];
echo'<br>';
//3
$a = "a,b,c,d,e,f";
$a2 = explode(",",$a);
var_dump($a2);
echo'<br>';
//4
$a = "a,b,c,d,e,f";
$a2 = explode(",",$a);
$a3 = array_combine($a2,$a2);
var_dump($a3);

echo'<br>';
//5
$arr = [0, 1, 2, 3, 4, 5, 6];
echo(array_sum($arr));
echo '<br>';

//6
$marks1 = [360,310,310,330,313,375,456,111,256];
$marks2 = [350,340,356,330,321];
$marks3 = [630,340,570,635,434,255,298];
$numbers = array_merge($marks1,$marks2,$marks3);
//.1
echo max($numbers);
echo '<br>';
//6.2
echo min($numbers);
echo '<br>';
//7
function randStrGen($len){
    $result = "";
    $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
    $charArray = str_split($chars);
    for($i = 0; $i < $len; $i++){
	    $randItem = array_rand($charArray);
	    $result .= "".$charArray[$randItem];
    }
    return $result;
}
echo randStrGen(11);

echo '<br>';
//8
$sentence = 'This is a sentence which is written in php.';
//8.1
echo strtoupper($sentence);
echo '<br>';
//8.2
echo strtolower($sentence);
echo '<br>';
//8.3
echo ucfirst($sentence);
echo '<br>';
//8.4
echo ucwords($sentence);
echo '<br>';
//9
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
echo '<br>';
//9.1
$url = 'http://www.example.com/public_html/index.php';
echo basename($url);

?>