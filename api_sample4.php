<?php
// APIログインURL
// '坂本龍馬' → URLエンコード
$url = 'https://umayadia-apisample.azurewebsites.net/api/persons/%E5%9D%82%E6%9C%AC%E9%BE%8D%E9%A6%AC';

// ストリームコンテキストのオプションを作成
$options = array(
    // HTTPコンテキストオプションをセット
    'http' => array(
        'method'=> 'DELETE',
        'header'=> 'Content-type: application/json; charset=UTF-8', //JSON形式で表示
    )
);

// ストリームコンテキストの作成
$context = stream_context_create($options);

// DELETE送信
$contents = file_get_contents($url, false,$context);

// reception.php のレスポンスを表示
echo $contents;
?>