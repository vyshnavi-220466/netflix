$a=20;
function test(){
    global $a;
    echo $a;
    $r=5;
    echo $r;
}
test();
function mycount(){
    static $c=0;
    $c++;
    echo $c;
}
mycount();
mycount();
mycount();
$name="padmavasanthi";
echo "string";
echo $name;
echo "<br>";
$age=20;
echo "Integer:";
echo $age;
echo "<br>";
$price=99.75;
echo "Float:";
echo $price;
echo "<br>";
$isActive = true;
echo "Boolean (true): ";
echo $isActive; 
echo "<br>";
$colors = array("Red", "Green", "Blue");
echo "Array elements: ";
echo $colors[0] . ", " . $colors[1] . ", " . $colors[2];
?>