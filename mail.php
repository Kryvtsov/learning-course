
	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="les.css">
	<title> Статус отправки письма </title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
	<header>
		<div class="header">
			<div class="mid">
				<img src="images/IMG_2649.png" class="logo" alt="логотип Мастер цсс" >
				<div class="icons">
				<a href="https://www.google.com.ua/" title="ссылка на гугл" target="_blank"> <img src="images/igplus.png"> </a>
				<a href="https://www.facebook.com/" title="ссылка на фейсбук" target="_blank"> <img src="images/ifacebook.png"> </a>
				<a href="https://www.skype.com/ru/" title="ссылка на скайп" target="_blank"> <img src="images/iscype.png"> </a>
				</div>
				<div class="name">Онлайн-дневник Владимира (страшно смотреть)</div>
				<div class="disc">Здесь содержатся заметки, созданные в ходе обучения на тренинге.</div>
				
	 		</div>
	 	</div>
	</header>

	<nav>
		<div class="mmenu">
			<div class="mid">
				 <ul>
				 	<li><a href="index.html">Главная</a></li>
				 	<li><a href="#">Об авторе</a></li>
				 	<li><a href="#">Отзыв</a></li>
				 	<li><a href="svyaz.html">Связаться со мной.</a></li>
				 	<div class="clear"></div> 
				 </ul>
			 </div>
		</div>
	 </nav>

	<div class="main">
		<div class="sidebar">
			<div class="widj">
				<ul>
					<li><a href="week1.html"> Неделя 1 - Ясли </a></li>
					<li><a href="week2.html"> Неделя 2 - Детский сад</a></li>
					<li><a href="week3.html"> Неделя 3 - Первый класс :) </a></li>
					<li><a href="week4.html"> Неделя 4 - Средняя школа </a></li>
					<li><a href="week5.html" class="noborder"> Неделя 5 - Старший класс </a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<article>
				<header>
					<a id="top"></a>
					
				</header>

				<section>
					<div class="day">
						<div class="mail">
						<h2 style="margin-bottom: 30px; "> Результат отправки.</h2>
						
						<?php
							if (isset($_POST['imya'])) {$name = $_POST['imya']; 
							echo "<div ><p style="border-bottom: 1px dashed; color:#431EEA;"> <b><i style="color:#0B5A7B">Ваше письмо:</i></b></p></div>". $name."<br>";}
							if (isset($_POST['milo'])) {$email = $_POST['milo']; echo $email."<br>";}
							if (isset($_POST['temma'])) {$tema = $_POST['temma']; echo $tema."<br>";}
							if (isset($_POST['text'])) {$text = $_POST['text']; echo $text."<br>";}

							$to = "vladymyr13@gmail.com"; 
							$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
							$headers .= "From: \"".$name."\" <".$email.">\r\n";
							$subject = $tema;
							$message = "<b>Имя отправителя:</b> $name <br>
										<b>Почта отправителя:</b> $email <br>
										<b>Сообщение:</b><br>$text";

							$send = mail ($to, $subject, $message, $headers);
							 
							 if ($send == 'true')
							 {
								 echo "<p class="fishka">Спасибо! Ваше письмо отправлено. Скоро я внимательно все прочитаю и отвечу Вам.</p>";
							 }
							 else
							 {
								 echo "<p class="important">Письмо не отправлено. Просьба обратиться напрямую на мою почту.</p>";
							 }
						?>
						
						</div>
					</div>
				</section>
				
			</article>
		</div>
	</div>


	<footer>
		<div class="footer" >
			
				<p> 2016 Сделано по тренингу "Верстаем на 5+ 2.0" <img src="images/logo-foot.png" align="right"></p>
			
		</div>
	</footer>
</body> 
</html>


















	