<?php

$arrays = array(

    0 => array(
        'name' => '鈴木',
        'hobby' => 'テニス',
        'email' => 'sample@sample.com'
    ),
    1 => array(
        'name' => '山田',
        'hobby' => 'パソコン',
        'email' => 'sample@sample2.com'
    ),
    2 => array(
    'name' => '斎藤',
    'hobby' => '水泳',
    'email' => 'sample@sample3.com'
    )
    );
    // echo $arrays[1]['name'];
    ?>

    <html>
    <body>
        <table border="1">
        <tr><th>名前</th><th>趣味</th><th>メールアドレス</th></tr>
        <?php foreach($array as $row){ ?>
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['hobby'];?></td>
            <td><?php echo $row['email'];?></td>
        </tr>
        <?php } ?>
        </table>

    </body>
    </html>