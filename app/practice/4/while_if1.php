<?php

$i = 1;
while($i <= 20){
    if($i % 3 === 0){
        echo $i.'は３の倍数<br>';
    }
    // 条件を満たした場合の処理
    $i++;
}