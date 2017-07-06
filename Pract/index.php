<?php
  $lang = @$_COOKIE['lang'];
  if (!$lang) {
    $lang = 'en';
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<script type="text/javascript" src="jquery.js"></script> 
	<title>PRIVILEGE</title>
	
    <link rel="stylesheet/less" href="style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js"></script>

	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
	    /*SLIDER*/
		$(document).ready(function() {
		 $(".slider").each(function () { // оброблюємо кожний слайдер
		  var obj = $(this);
		  $(obj).append("<div class='nav'></div>");
		  $(obj).find("li").each(function () {
		   $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>"); // додаємо блок навігації
		   $(this).addClass("slider"+$(this).index());
		  });
		  $(obj).find("span").first().addClass("on"); // робимо активним перший елемент меню
		 });
		});
		function sliderJS (obj, sl) { // slider function
		 var ul = $(sl).find("ul"); // знаходимо блок
		 var bl = $(sl).find("li.slider"+obj); // знаходимо будь який з елементів блока
		 var step = $(bl).width(); // ширина об'єкта
		 $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 - швидкість прокрутки
		}
		$(document).on("click", ".slider .nav span", function() { // slider click navigate
		 var sl = $(this).closest(".slider"); // знаходимо, в якому блоці був клік
		 $(sl).find("span").removeClass("on"); // забираємо активний елемент
		 $(this).addClass("on"); // робимо активним поточний
		 var obj = $(this).attr("rel"); // дізнаємось його номер
		 sliderJS(obj, sl); // слайдим
		 return false;
		});
</script>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
</head>
<body class="<?= $lang; ?>">
	<header>
		<div class="header_1">
			<div class="langua">
				<button class="lang-switcher lang-switcher--en" id="switcher-en"><img src="images/eng.jpg" alt=""> ENG </button>
				<button class="lang-switcher lang-switcher--uk" id="switcher-uk"><img src="images/ukr.jpg" alt=""> УКР </button>
				<button class="lang-switcher lang-switcher--ru" id="switcher-ru"><img src="images/rus.png" alt=""> РУС </button>
			</div>
		</div>
		<div class="header_2 title">
		    <div class="title">
		        PRIVILEGE
		    </div>
		    <ul class="menu">
		        <li class="en" lang="en"><a href="http://www.vebprog.h1n.ru/Pract/index.php">HOME</a></li>
		        <li class="en" lang="en" id="en_about"><a href="#">ABOUT</a></li>
		        <li class="en" lang="en" id="en_man"><a href="#">MAN</a></li>
		        <li class="en" lang="en" id="en_woman"><a href="#">WOMEN</a></li>
		        <li class="en" lang="en" id="en_contacts"><a href="#">CONTACTS</a></li>
		    </ul>
		    <ul class="menu">
		        <li class="uk" lang="uk"><a href="http://www.vebprog.h1n.ru/Pract/index.php">ГОЛОВНА</a></li>
		        <li class="uk" lang="uk" id="uk_about"><a href="#">ПРО НАС</a></li>
		        <li class="uk" lang="uk" id="uk_man"><a href="#">ДЛЯ ЧОЛОВІКІВ</a></li>
		        <li class="uk" lang="uk" id="uk_woman"><a href="#">ДЛЯ ЖІНОК</a></li>
		        <li class="uk" lang="uk" id="uk_contacts"><a href="#">КОНТАКТИ</a></li>
		    </ul>
		    <ul class="menu">
		        <li class="ru" lang="ru"><a href="http://www.vebprog.h1n.ru/Pract/index.php">ГЛАВНАЯ</a></li>
		        <li class="ru" lang="ru" id="ru_about"><a href="#">О НАС</a></li>
		        <li class="ru" lang="ru" id="ru_man"><a href="#">ДЛЯ МУЖЧИН</a></li>
		        <li class="ru" lang="ru" id="ru_woman"><a href="#">ДЛЯ ЖЕНЩИН</a></li>
		        <li class="ru" lang="ru" id="ru_contacts"><a href="#">КОНТАКТЫ</a></li>
		    </ul>
        </div>
        
		    <div class="slider">
		    	<ul>
		            <li><img src="images/img1.png" alt=""></li>
		            <li><img src="images/img2.png" alt=""></li>
		            <li><img src="images/img3.png" alt=""></li>
		            <li><img src="images/img4.png" alt=""></li>
		            <li><img src="images/img1.png" alt=""></li>
	            </ul>
	        </div>
	        
	</header>
	<main class="pos" id="content">
    <div>
        <div class="en small_div" lang="en" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m1.php';" > <b>T-shirt</b><br> Price: <input type="text" readonly id="en_m1" class="text"/> $ <img src="images/clothes/m1_1.jpg" alt=""> </div>
        <div class="uk small_div" lang="uk" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m1.php';"> <b>Футболка</b><br> Ціна: <input type="text" readonly id="uk_m1" class="text" /> грн. <img src="images/clothes/m1_1.jpg" alt=""></div>
        <div class="ru small_div" lang="ru" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m1.php';"> <b>Футболка</b><br> Цена: <input type="text" readonly id="ru_m1" class="text" /> р. <img src="images/clothes/m1_1.jpg" alt=""></div>
        
        <div class="en small_div" lang="en" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j3.php';"> <b>Dress</b><br> Price: <input type="text" readonly id="en_j3" class="text"/> $ <img src="images/clothes/j3_1.jpg" alt=""></div>
        <div class="uk small_div" lang="uk" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j3.php';"> <b>Плаття</b><br> Ціна: <input type="text" readonly id="uk_j3" class="text" /> грн. <img src="images/clothes/j3_1.jpg" alt=""></div>
        <div class="ru small_div" lang="ru" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j3.php';"> <b>Платье</b><br> Цена: <input type="text" readonly id="ru_j3" class="text" /> р. <img src="images/clothes/j3_1.jpg" alt=""></div>
        
        <div class="en small_div" lang="en" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m2.php';"> <b>Jeans</b><br> Price: <input type="text" readonly id="en_m2" class="text"/> $ <img src="images/clothes/m2_1.jpg" alt=""></div>
        <div class="uk small_div" lang="uk" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m2.php';"> <b>Джинси</b><br> Ціна: <input type="text" readonly id="uk_m2" class="text" /> грн. <img src="images/clothes/m2_1.jpg" alt=""></div>
        <div class="ru small_div" lang="ru" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m2.php';"> <b>Джинсы</b><br> Цена: <input type="text" readonly id="ru_m2" class="text" /> р. <img src="images/clothes/m2_1.jpg" alt=""></div>
        
        <div class="en small_div" lang="en" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j1.php';"> <b>Dress</b><br> Price: <input type="text" readonly id="en_j1" class="text"/> $ <img src="images/clothes/j1_1.jpg" alt=""></div>
        <div class="uk small_div" lang="uk" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j1.php';"> <b>Плаття</b><br> Ціна: <input type="text" readonly id="uk_j1" class="text" /> грн. <img src="images/clothes/j1_1.jpg" alt=""></div>
        <div class="ru small_div" lang="ru" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j1.php';"> <b>Платье</b><br> Цена: <input type="text" readonly id="ru_j1" class="text" /> р. <img src="images/clothes/j1_1.jpg" alt=""></div>
        
        <div class="en small_div" lang="en" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j2.php';"> <b>Dress</b><br> Price: <input type="text" readonly id="en_j2" class="text"/> $ <img src="images/clothes/j2_1.jpg" alt=""></div>
        <div class="uk small_div" lang="uk" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j2.php';"> <b>Плаття</b><br> Ціна: <input type="text" readonly id="uk_j2" class="text" /> грн. <img src="images/clothes/j2_1.jpg" alt=""></div>
        <div class="ru small_div" lang="ru" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j2.php';"> <b>Платье</b><br> Цена: <input type="text" readonly id="ru_j2" class="text" /> р. <img src="images/clothes/j2_1.jpg" alt=""></div>
        
        <div class="en small_div" lang="en" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m3.php';"> <b>Shorts</b><br> Price: <input type="text" readonly id="en_m3" class="text"/> $ <img src="images/clothes/m3_1.jpg" alt=""></div>
        <div class="uk small_div" lang="uk" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m3.php';"> <b>Шорти</b><br> Ціна: <input type="text" readonly id="uk_m3" class="text" /> грн. <img src="images/clothes/m3_1.jpg" alt=""></div>
        <div class="ru small_div" lang="ru" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m3.php';"> <b>Шорты</b><br> Цена: <input type="text" readonly id="ru_m3" class="text" /> р. <img src="images/clothes/m3_1.jpg" alt=""></div>
        
        <div class="en small_div" lang="en" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j4.php';"> <b>Dress</b><br> Price: <input type="text" readonly id="en_j4" class="text"/> $ <img src="images/clothes/j4_1.jpg" alt=""></div>
        <div class="uk small_div" lang="uk" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j4.php';"> <b>Плаття</b><br> Ціна: <input type="text" readonly id="uk_j4" class="text" /> грн. <img src="images/clothes/j4_1.jpg" alt=""></div>
        <div class="ru small_div" lang="ru" onclick="location.href='http://www.vebprog.h1n.ru/Pract/j4.php';"> <b>Платье</b><br> Цена: <input type="text" readonly id="ru_j4" class="text" /> р. <img src="images/clothes/j4_1.jpg" alt=""></div>
        
        <div class="en small_div" lang="en" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m4.php';"> <b>Shirt</b><br> Price: <input type="text" readonly id="en_m4" class="text"/> $ <img src="images/clothes/m4_1.jpg" alt=""></div>
        <div class="uk small_div" lang="uk" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m4.php';"> <b>Сорочка</b><br> Ціна: <input type="text" readonly id="uk_m4" class="text" /> грн. <img src="images/clothes/m4_1.jpg" alt=""></div>
        <div class="ru small_div" lang="ru" onclick="location.href='http://www.vebprog.h1n.ru/Pract/m4.php';"> <b>Рубашка</b><br> Цена: <input type="text" readonly id="ru_m4" class="text" /> р. <img src="images/clothes/m4_1.jpg" alt=""></div>
    </div>
	</main>

	<footer>
	    <div class="en foot" lang="en">Web designer: Savitska Yana ©</div>
	    <div class="uk foot" lang="uk">Веб-дизайнер: Савіцька Яна ©</div>
	    <div class="ru foot" lang="ru">Веб-дизайнер: Савицкая Яна ©</div>
	</footer>
	
	<script src="script.js"></script>

</body>

</html>