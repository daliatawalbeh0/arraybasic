<?php
//example 1
$colors = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2]
carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. -
Richard M. Nixon";
echo "<br>";
//example 2
$colors = array('white', 'green', 'red');
echo $colors[1];
echo "<br>";
echo $colors[2];
echo "<br>";
echo $colors[0];
echo "<br>";
//example 3
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );
foreach ($cities as $x => $y){
    echo "The capital of $x is:$y";
    echo "<br>";
}
//example 4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color["4"];
echo "<br>";
//example 5 
$nArray = array();
function Add($nArray, $addValue, $Location)
{
    array_splice($nArray, $Location - 1, 0, $addValue);
    print_r($nArray);
    echo '<br>';
    for ($i = 0; $i < count($nArray); $i++) {
        echo $nArray[$i] . " ";
    }
};
Add([1, 2, 3, 4, 5], "$", 4);
echo "<br>";
//example 6 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $i => $i_value) {
    echo  $i . " = " . $i_value;
    echo "<br>";
}
echo "<br>";
// example 7 

function temp($Temp)
{

    $ave = array_sum($Temp) /22;
    echo "Average Temperature is : $ave <br>";
    $newArray = array_unique($Temp);
    sort($newArray);

    echo  "List of three lowest temperatures : ";
    for ($i = 0; $i < 3; $i++) {
        echo $newArray[$i] . ' ';
    }
    echo "<br>";
    echo  "List of three highest temperatures : ";
    for ($i = count($newArray) - 1; $i > (count($newArray) - 4); $i--) {
        echo $newArray[$i] . ' ';
    }
    echo "<br>";
}
temp([21, 43, 10, 24, 27, 41, 23, 30, 22, 12, 15, 18, 11, 17, 14, 39, 32, 27, 26, 13, 41, 42]);
echo "<br>";
// example 8 
function Merge($array1, $array2)
{
    $MergArray = array_merge($array1, $array2);
    print_r($MergArray);
}
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
Merge($array1, $array2);
echo "<br>";
//example 9
function upper(){
    $colors = array("red","blue", "white","yellow");
 for ($i=0;$i<4;$i++){
    $ar=strtoupper($colors[$i]);
    print_r($ar);
    echo "<br>";
    
 }
}
upper();
echo "<br>";
//example 10
function lower(){
    $colors = array("red","blue", "white","yellow");
 for ($i=0;$i<4;$i++){
    $ar=strtolower($colors[$i]);
    print_r($ar);
    echo "<br>";
    
 }
}
lower();
echo "<br>";
//example 11
for ($i=200;$i<250;$i=$i+4){
    echo ($i);
    echo "  ";
}
echo "<br>";
//example 12
$word =  array("abcd", "abc", "de", "hjjj", "g", "wer");
$StrLen = array_map('strlen', $word);
echo "The shortest array length is : " . min($StrLen) . "<br>";
echo "The longest array length is : " . max($StrLen);
echo '<br><br>';
//example 13
function randomlynum($i1, $i2){
    $randomNum = range($i1, $i2);
    shuffle($randomNum);
    for ($l = 0; $l < 5; $l++) {
        echo $randomNum[$l] . ' ';
    }
}
randomlynum(11, 20);
echo "<br";
//example 14
function small(){
$array1 = array( 2, 0, 10, 12, 6);
$small=$array1[0];
for($i=1;$i<5;$i++){
    if($array1[$i]<$small){
        if($array1[$i]!=0){
            $small=$array1[$i];
            echo $small;
        }
       }
}
}
small();
echo "<br";
//example 15

echo "<br>";
echo "<br>";
$min = 10000;
$unSortedArray = array( 2, 0, 10, 12, 6 ,3,1,7);
$sortedArray = array();
$length = count($unSortedArray);
for($i = 0 ; $i< $length ; $i++){
    $maxValue =-9999;
    $maxIndex = -1;
    for($j=0 ; $j< $length ; $j++){
        if ($unSortedArray[$j] > $maxValue){
            $maxValue = $unSortedArray[$j] ;
            $maxIndex = $j;
        }
    }
    $sortedArray[]= $maxValue;
    $unSortedArray[$maxIndex] = -1;

}
print_r ($sortedArray);
echo "<br>";
echo "<br>";

//example 16
echo "<br>";
echo "<br>";
$number =1.1555;
$number = strval($number);
$number = str_split($number);
$newNumber =array();
function floorNumber($number , $prec , $sep){
for($i = 0 ; $i < count($number)  ;$i++){
    if(!is_numeric($number[$i])){
        $number[$i] = $sep;
        break;
    }
    
}
for($i=0 ; $i < count($number) - $prec; $i++){
    $newNumber[$i] = $number[$i];
}
echo "the array --->";
echo implode("" ,$newNumber);
// print_r($newNumber);
}
floorNumber($number , 2,".");
echo "<br>";
echo "<br>";
   
//example 17
echo "<br>";
echo "<br>";
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$array1 = explode(", " , $list1);
$array2 = explode(", " , $list2);
$mregedArray =array();
$length = count($array1) + count($array2); 
for($i = 0 ; $i < count($array1)  ; $i++){
    $mregedArray[] = $array1[$i];
}
for($i = 0 ; $i < count($array2)  ; $i++){
    $mregedArray[] = $array2[$i];
}
function removeDup($array){
    $length = count($array);
    for($i= 0 ; $i<$length ; $i++){
        
        for($j= $i + 1 ; $j< $length; $j++){
            if($array[$i] == $array[$j]){
                array_splice($array , $j ,1);
                $length--;

            }

        }
    }
    print_r($array);
}

removeDup($mregedArray);



echo "<br>";
echo "<br>";
//example 18
function delete(){
    $arr= array(3,7,2,5,3,7,3);
   $arrsize=sizeof($arr);
   
   $newar=array();
        for ($i=0;$i<$arrsize;$i++){
           if(array_key_exists($arr[$i],$newar)){
   $i++;
           }
           else
           array_push($newar,$arr[$i]);
        }
        print_r($arr);
         echo "</br> ";
        print_r($newar);
        echo "</br> ";
    }
    delete();
    echo "<br";
//example 19
$arr1= array(3,7,2,5,3,7,3);
$arr2= array(3,2,7);
for ($i=0;$i<sizeof($arr2);$i++){
    if(in_array($arr2[$i], $arr1)){
        echo "The arr2 is subset of arr1"; //checkexist
    }
    else
    echo "The arr2 is not subset of arr1";
}
echo "<br";
 ?>