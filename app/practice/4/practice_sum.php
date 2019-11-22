<?php

$i = 1;

while($i <= 100){
    if($i % 7 === 0){
    echo $i.'は７の倍数<br>';
}
$i++;
}
echo '合計は'.$i;