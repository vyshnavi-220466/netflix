<?php
//IF-ELSE STATEMENTS
/*$a=333;
$b=68;
if($a>78){
    echo "a is greater than 78";
}
else{
    echo "a is smaller than 78";
}*/

//IF-ELSE LADDER
/*$age=40;
if($age>18){
    echo "you are eligible to vote";
}
elseif($age>=13){
    echo "you can drink chai";
}
else{
    echo "you are not eligible to vote";
}*/


/*$marks=90;
if($marks>=90){
    echo "grade is Excellent";
}
else if($marks>=80 && $marks<70){
    echo "grade is A";
}
else if($marks>=70 && $marks<60){
    echo "grade is B";
}
else if($marks>=60 && $marks<50){
    echo "grade is C";
}
else if($marks>=50 && $marks<40){
    echo "grade is D";
}
else{
    echo "grade is fail";
}*/

/*$age=55;
if($age>=25 && $age<=65){
    echo "you are eligible to drive";
}
else{
    echo "not eligible to drive";
}*/


//SWITCH CASE
/*$sasi='nuvvu leka neanu leanu';
switch($sasi){
    case 'nuvvu leka neanu leanu' :
        echo "this is tharun movie <br>";
        break;
    case 'nuvvu naku nachav':
        echo "this is venky movie <br>";
        break;
    default:
        echo "both are my favourite movies";
        break;
}*/



//WHILE LOOPS
/*$i=0;
while($i<10){
    echo "$i <br>";
    $i++;
}*/

//FOR LOOPS
/*$i=0;
for($i=0;$i<6;$i++){
    echo "$i <br>";
}
echo "for loop is ended";
for($j=0;$j<10;$j++){
    echo "j values are $j <br>";
}*/



//DO_WHILE LOOPS
/*$i=0;
do{
   echo "i values are $i <br>";
    $i++;
}while($i<10);*/


//FOR_EACH LOOP
/*$arr=array('sasi','kousalya','sowmya','vyshnavi','vyshu');
$n=count($arr);
for($i=0;$i<$n;$i++){
    echo "$arr[$i] <br>";
}*/


//BETTER WAY TO DO THIS IS FOR_EACH LOOP
//foreach($variable as $key=> $value)
/*foreach($arr as $i){
    echo "$i <br>";
}*/


//FUNCTIONS
/*function marks($arr){
    $sum=0;
    foreach($arr as $i){
        $sum=$sum+$i;
    }
    return $sum;
    }
$vyshnavi=array(90,97,98,95,99,90);
$sasi=[99,98,97,99,100];
echo "total marks are <br>". marks($vyshnavi);
echo "total marks scored by sasi is".marks($sasi);*/

/*function average($arr){
    $sum=0;
    $count=0;
    foreach($arr as $i){
        $sum+=$i;
        $count++;

    }
    $avg=$sum/$count;
    return $avg;
}
 echo  "average is:".average([70,90,40,30]);*/



 //DATES
 /*$d=date(" dS F Y,g:i A");
 echo "todays date is $d <br>"; 
 $year=date("Y");
  echo "copyrigth $year | all rights are reserved <br>";*/
 //QUICK QUIZ-POST ATLEAST 3 EXAMPLES OF DATES IN PHP


 //ASSOCIATIVE ARRAYS 
 /*$favcol=array("vyshnavi"=>"blue",
 "sasi"=>"red","kousalya"=>"blues");
 echo $favcol["vyshnavi"]. "<br>";
echo $favcol["sasi"]. "<br>";
echo $favcol["kousalya"]."<br>";
foreach($favcol as $key=>$value){
    echo "favcolor of $key is $value <br>";
}*/


//MULTIDIMENSIONAL ARRAYS
/*$multidim=array(
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1)
);
//echo var_dump($multidim);
echo $multidim[0][1];
foreach($multidim as $i){
    foreach($i as $j){
        echo "$j <br>";
    }
}
for($i=0;$i<count($multidim);$i++){
    for($j=0;$j<count($multidim[$i]);$j++){
        echo $multidim[$i][$j];
        //echo "<br>";
    }
    echo "<br>";
}*/

//3-DIMENSIONAL ARRAYS(error)
/*$threed=array(
    array(
        array(1,7,9),
        array(5,9,3),
        array(7,9,9),
    ),
);
for($i=0;$i<count($threed);$i++){
    for($j=0;$j<count($threed[$i]);$i++){
        for($k=0;$k<count($threed[$i][$j]);$k++){
            echo $threed[$i][$j][$k];
        }
    }
}*/


//SCOPE VARIABLES 
//$a=98;
//echo $a;
//LOCAL VARIABLES
/*function fun(){
    $a=97;
    echo "the value of variable is $a"."<br>";
}
fun();
$b=5;
//GLOBAL VARIABLES
function globalvar(){
    global $b;
    $b=700;
    echo "the value of b is $b"."<br>";
}
echo "the value odf outside the function is $b"."<br>";
globalvar();
//STATIC VARIABLES
function staticvar(){
    static $count=0;
    $count=$count+1;
    echo "the count is $count"."<br>";
}
staticvar();
staticvar();
staticvar();
staticvar();

 echo var_dump($GLOBALS["b"]);*/

 

 











?>