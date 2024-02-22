<?php
$a = 10;
$b = 20;
if($a > $b){
    echo "A";
    
}else {
    echo " B";
}


$c = 52;
$c = $c + 1;
$c++;
echo $c;


// PHP Locical && or NOT 

$d = 30;
$e=45;
$f =85;
if($d > $e ){
if($a> $c){
    echo "A is Then Biggest Number";
}
}

if($a> $b && $a> $c){
    echo "A";
}
elseif($b > $a && $b > $c){
    echo $b;
}
else{
    echo $c;
}

?>