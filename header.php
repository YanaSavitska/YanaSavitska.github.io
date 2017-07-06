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
	<title>PRIVILEGE</title>
	
	<link rel="stylesheet/less" href="style2.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js"></script>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
    // галерея
    $(document).ready(function(){
        $("h2").append;
        $(".thumbs a").click(function(){
            var largePath = $(this).attr("href");
            var largeAlt = $(this).attr("title");
            $("#largeImg").attr({ src: largePath, alt: largeAlt });
            $("h2 em").html(" (" + largeAlt + ")"); return false;
        });
  
    });
    
    $(document).ready(function(){
        PopUpHide();            // приховати PopUp при завантаженні сторінки
    });
    
    function PopUpShow(){       //функція відображення PopUp
        $("#popup1").show();
    }
    function PopUpHide(){       // функція приховання PopUp
        $("#popup1").hide();
    }

    </script>
    
</head>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
<body class="<?= $lang; ?>">
	<header>
		<div class="header_1">
			<div class="langua">
				<button class="lang-switcher lang-switcher--en" id="switcher-en"><img src="images/eng.jpg"> ENG </button>
				<button class="lang-switcher lang-switcher--uk" id="switcher-uk"><img src="images/ukr.jpg"> УКР </button>
				<button class="lang-switcher lang-switcher--ru" id="switcher-ru"><img src="images/rus.png"> РУС </button>
			</div>
		</div>
		<div class="header_2 title">
		    <div class="title">
		        <a href="http://www.vebprog.h1n.ru/Pract/index.php" class="en" lang="en">Back</a>
		        <a href="http://www.vebprog.h1n.ru/Pract/index.php" class="uk" lang="uk">Назад</a>
		        <a href="http://www.vebprog.h1n.ru/Pract/index.php" class="ru" lang="ru">Назад</a>
		    </div>
		 </div>
	</header>
