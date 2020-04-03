<?php
    function nameGetter(){
        echo 'Hello!';
    }
$switch = true;
$x = 1;
while($x < 10){
    nameGetter();
    $x++;
}
?>