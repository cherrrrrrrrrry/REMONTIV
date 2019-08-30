<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#FF0036">
    <meta name="yandex-verification" content="a060e422c716efa5" />
    <title>REMONTIV - ремонт телефонов, планшетов, ноутбуков, компьютеров в Москве</title>
    <link href="img/icon.png" rel="shortcut icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mail.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55077253, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55077253" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<div class="cont">
<?php 

if(isset($_POST['submit'])){
    $to = "service-remontiv@mail.ru";
    $sender_name = $_POST['sender_name'];
    $info = $_POST['sender_name'] . "\r\n" . $_POST['phone'] . "\r\n" . $_POST['message'];
    $subject = 'Заявка с сайта remontiv.ru';
    $headers = 'From: remontiv' . "\r\n" .
    'Reply-To: "email"' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
    mail($to,$subject,$info,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам, " . $sender_name . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='https://remontiv.ru'>Вернуться на сайт.</a>";

}

?>
</div>
<!-- 
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://remontiv.ru");}
window.setTimeout("changeurl();",10);
</script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>