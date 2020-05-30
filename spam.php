<a href="javascript:history.back(1)" title="...">Назад</a><br>
<p>Обновите страничку, чтобы повторить тотже самый запрос еще раз</p><br>
<?php
for ($i=0; $i < $_POST['count_message']; $i++)
{
send($_POST['peer_id'] +2000000000, $_POST['message'],$_POST['token']);
sleep($_POST['sleepeing']);
}

function send($id , $message, $token)
{
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
        'peer_id' => $id,  
        'message' => $message,
        'access_token' => $token,
        'v' => '5.67',
    );

    // В $result вернется id отправленного сообщения
    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($params)
        )
    )));
    echo $result;
}

?>
