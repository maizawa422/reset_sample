<?php
// APIログインURL
$url = 'https://umayadia-apisample.azurewebsites.net/api/persons';

// ストリームコンテキストのオプションを作成
$options = array(
    // HTTPコンテキストオプションをセット
    'http' => array(
        'method'=> 'POST',
        'header'=> 'Content-type: application/json; charset=UTF-8', //JSON形式で表示
        'content' => '{"name":"坂本龍馬","note":"日本の幕末の政治家","age":31,"registerDate":"1867-10-07"}'
    )
);

// ストリームコンテキストの作成
$context = stream_context_create($options);

// POST送信
$contents = file_get_contents($url, false,$context);

// reception.php のレスポンスを表示
echo $contents;
?>