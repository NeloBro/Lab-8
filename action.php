<?php 

$x = $_POST['x'];
$n = $_POST['n'];
$result = 0;

for($i = 0;$i<=$n;$i++){
        $result += (((-1)**$i)*($x**($i+1)))/($i+1);
    }
echo $result;

?>
