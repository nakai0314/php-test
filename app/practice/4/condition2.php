<?php

// $score = 82;
$score = mt_rand(0,100);
echo '得点は'.$score.'です<br>';

if($score >=0 && $score <60){
    echo '平均点以下です。';
}elseif($score >=60 && $score <80){
    echo '平均点を超えています';
}elseif($score >= 80 && $score <100){
    echo '優秀な点数です。';
}elseif($score === 100){
    echo '満点でです!';
}else{
    echo '入力した値が違います。';
}