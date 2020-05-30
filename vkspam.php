	<script type="text/javascript" src="jquery.js"></script>
<title>Засри беседу</title>
	<form action="spam.php" method="post">
	 <p>TOKEN: <input type="text" name="token" /> <strong><big>  <a href="http://zornet.ru/load/primery_css_knopok_s_hover_ehffektami/145-1-0-9961"
  target="popup"
  onclick="window.open('https://oauth.vk.com/authorize?client_id=6121396&scope=69632&redirect_uri=https://oauth.vk.com/blank.html&display=page&response_type=token&revoke=1','popup','width=800,height=600'); return false;">
    ПОЛУЧИТЬ ТОКЕН
</a>  </big></strong></p>
	 <p>Текст сообщения: <textarea name="message"  class="form-control" rows="9"></textarea></p>
	 <p>id беседы: <input type="text" name="peer_id" /></p>
	 <p>Сколько сообщений послать: <input type="text" name="count_message" /></p>
	 <p>Задержка между сообщениями (в секундах): <input type="text" name="sleepeing" /></p>
	 <p><input type="submit" name="spam" value="SEND" /></p>
	</form>
<script>
    function show()
    {
        $.ajax({
            url: "spam.php",
            cache: false,
            success: function(html){
                $("#content").html(html);
            }
        });
    }
</script>
<p>Бот работает на php, отсылая post запросы напрямую на сервер Вконтакте.</p>
<p>Чтобы остановить работу скрипта, просто закройте это окно.</p>
<p>Заголовок запроса выглядит примерно так</p>
api.vk.com/method=messages.send&peer_id=id&message=TEXTMESSAGE&v=5.67&access_token=token
<p>Где найти id беседы?</p>
<img src="gde.png">
<p>Где найти токен и взломают ли меня, если я его укажу?</p>
<p> -Нет, не взломают, мы не сохраняем ваши данные на сервере.</p>
<img src="tok.png">
