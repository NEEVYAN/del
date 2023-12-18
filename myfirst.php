<?php
echo "<h1>hello world this is my first file</h1>";

# comments # , // , /* */ -->

// var 
$name = "neeraj";
$_name="suresh";
$Name="hellp";
// dont use 2 dollars in variable declarations

echo $name;
echo "<br/>";
echo $_name;
echo "<br/>";
echo $Name;
echo "<br/>";

// ===================================
$num1 = 6;                       
$num2 = 77;
echo $num1+$num2;
echo "<br/>";

echo "number 1<br/>";
echo "<input type='text' name=''/>";
echo "<br/>";
echo "number 2<br/>";
echo "<input type='text' name=''/>";

$student = 'Neeraj';
echo "my name is $student";

// array 
$arr = array(1,20,39,4,5,76,"neeraj");
echo "<br/>";
echo $arr[1];

for($i=0;$i<5;$i++)
{
    echo "<br/> $arr[$i]";
}


echo "<br/>";
echo pow(2,4);

// differnce between single and double quotes 
echo "my name is $student";
echo '<br/> my name is $student'; // treated as plain statement

// using double quote inside double quotes and vice versa
echo "<br/>my name is \"Neeraj\"";

$age = 9;
if($age>=10)
{
  echo "<br/>number greater or equal than 10";
}
else if($age<10)
{
    echo "<br/>number less than 10";
}

// Concatenation 
$a = "neeraj";
$b = "srivastav";
echo '<br/>my name is '.$a.' '.$b;
$a.= ' '.$b; 
echo '<br/>'.$a; 


// for and and or statement 
// if($a>=2 or $b<9);

$num = 9;
echo $num<2 ? "<br/>less than 2":"<br/>greater than 2";

$a= 3;
echo "<br/>";
echo $a++;
echo "<br/>";
echo ++$a;

switch($a){
    case 1: echo "<br/>got 1"; break;
    case 2: echo "<br/>got 2"; break;
    case 3: echo "<br/>got 3"; break;
    case 4: echo "<br/>got 4"; break;
    default: echo "<br/>got unknown";
}


// loop 

// while 
$a=1;
echo '<br/>';
while($a<100)
{
  echo  $a." ";
  $a++;
}

// difference between double (== ) and triple (===) equal 

// == if both value equal 
// === if both value are equal as well as of same data type 

// for random number  rand()

$randNum = rand(0,100); //range
echo "<br/>".$randNum;

echo "<br/>";
for($i=1;$i<=100;$i++)
{
    if($i%3===0 && $i%5===0)
        echo 'Fizz buzz ';
    else if($i%3===0)
        echo 'Fizz ';
    else if($i%5===0)
        echo 'buzz ';
    else 
        echo $i." ";
}


// length of word and sentence 
$sent = "hii thi is me me me neeraj";
echo '<br>'.strlen($sent);

// count words 
echo '<br>'.str_word_count($sent);

// replace characters or words in php
echo '<br>'.str_replace("me","we",$sent);

// useful if 
$str="Neeraj|28|Developer";
echo '<br>'.str_replace("|"," ",$str);


// function 
function sum($a,$b)
{
    echo '<br/>';
    echo $a+$b;

}

sum(20,10);
sum(20,30);
sum(20,70);
sum(20,77);

// default parameters 
function mul($a,$b=8)
{
    echo '<br/>';
    echo $a*$b;

}

mul(10);

// return function 
function sub($a,$b=8)
{
    echo '<br/>';
    return $a-$b;
}

echo "sub of number is ".sub(10);

// php array 
echo '<br/>';
$arr = array('a','b','c','d','e','f','g','h','i','j');
echo '<ol>';
for($i=0;$i<count($arr);$i++)
{
    echo '<li>'.$arr[$i].'</li>';
}
echo '<ol/>';

foreach($arr as $item)
{
    echo $item.' '; 
}

$arr2 = array(1,7,4,9,3,6,8);
sort($arr2);
foreach ($arr2 as $item)
{ 
    echo '<li>'.$item.'</li>';
}

rsort($arr2); //reverse sort
foreach ($arr2 as $item)
{ 
    echo $item.' ';
}

// functions in array 
echo '<br/>';
array_pop($arr2); //remove last element
foreach ($arr2 as $item)
{ 
    echo $item.' ';
}
echo '<br/>';
array_push($arr2,25);
foreach ($arr2 as $item)
{ 
    echo $item.' ';
}
echo '<br/>';
array_shift($arr2); //remove first element of array
foreach ($arr2 as $item)
{ 
    echo $item.' ';
}
echo '<br/>';


array_unshift($arr2,25); // add value at first
foreach ($arr2 as $item)
{ 
    echo $item.' ';
}
echo '<br/>';

// IMPLODE AND EXPLODE 
$arr_to_string = array("b","l","a","c","k");
$res = implode("",$arr_to_string);
echo $res;

echo '<br/>';
$string_to_array = "n.e.e.r.a.j";
$res = explode(".",$string_to_array);

echo "<pre>";
print_r($res);
foreach ($res as $item)
{ 
    echo $item.' ';
}
echo '<br/>';


// Date and time function 
echo date('Y-m-d/D/l');
echo '<br/>';
date_default_timezone_set('Asia/Kolkata');
echo date('h:i:sA');
