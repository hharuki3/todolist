<?php
if(!empty($_POST) && $_POST['list_name'] != ''){
    $title =  $_POST['list_name'] ;
}else{
    echo 'リストの値が渡ってきていません。';
}

if(!empty($_POST) && $_POST['primary'] != ''){
    $primary = $_POST['primary'] ;
}else{
    echo '優先度の値が渡ってきていません。';
}
$plan = $_POST['plan'];
$detail = $_POST['detail'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了ページ</title>
    <link rel="stylesheet" href="../css/style_register.css">
</head>
<body>
    <h1>登録完了ページ</h1>
    <div class="input">
        <div>
            <p>予定タイトル</p>
            <p><?php echo $title; ?></p>
        </div>
        <div>
            <p>優先度</p>
            <p><?php echo $primary; ?></p>
        </div>
        <div>
            <p>予定種別</p>
            <p><?php echo $plan; ?></p>
        </div>
        <p>予定詳細</p>
        <p><?php echo $detail; ?></p>
    </div>
</body>
</html>