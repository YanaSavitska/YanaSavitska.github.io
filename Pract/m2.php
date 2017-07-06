<?php
include 'header.php';
?>
        	<main>
	    <div class="pos_2">
	        <p><img id="largeImg" src="images/clothes/m2_1.jpg" alt="Large image" /></p>
                <p class="thumbs">
                    <a href="images/clothes/m2_1.jpg"><img src="images/clothes/m2_1.jpg" /></a>
                    <a href="images/clothes/m2_2.jpg"><img src="images/clothes/m2_2.jpg" /></a>
                    <a href="images/clothes/m2_3.jpg"><img src="images/clothes/m2_3.jpg" /></a>
                </p>
        </div>
        <div class="pos_2">
            <h2 class="en" lang="en"> Jeans </h2>
            <h2 class="uk" lang="uk"> Джинси </h2>
            <h2 class="ru" lang="ru"> Джинсы </h2>
            
           <p class="en" lang="en"> Price: <input type="text" readonly id="en_m2" class="text"/> $ <br>
                Dimensions: 30-34<br>
                Color: Blue<br>
                Style: everyday<br>
                Composition: 83% Cotton, 16% Polyester, 1% Spandex<br>
                Growth of the model in the photo: 180-185 cm<br>
                Hide girth: 76-78 cm<br>
                Article: Prvlg0126</p>
                <button class="but_2 en" lang="en" <a onclick="javascript:PopUpShow()"></a> Buy <img src="images/buy.png"></button>
                
            <p class="uk" lang="uk"> Ціна: <input type="text" readonly id="uk_m2" class="text" /> грн. <br>
                Розміри:  30-34<br>
                Колір:  блакитний<br>
                Стиль:  повсякденний<br>
                Склад:  83% Хлопок, 16% Поліестер, 1% Спандекс<br>
                Ріст моделі на фото: 180-185 см<br>
                Обхват бедер: 76-78 см<br>
                Артикул: Prvlg0126</p>
                <button class="but_2 uk" lang="uk" <a onclick="javascript:PopUpShow()"></a> Купити <img src="images/buy.png"></button>
                
            <p class="ru" lang="ru"> Цена: <input type="text" readonly id="ru_m2" class="text" /> р. <br>
                Размеры: 30-34<br>
                Цвет: голубой<br>
                Стиль: повседневный<br>
                Состав 83% Хлопок, 16% Полиэстер, 1% Спандекс<br>
                Рост модели на фото: 180-185 см<br>
                Обхват бедер: 76-78 см<br>
                Артикул: Prvlg0125</p>
                <button class="but_2 ru" lang="ru" <a onclick="javascript:PopUpShow()"></a> Купить <img src="images/buy.png"></button>

<?php
include 'buy.html';
?>
                
        </div>
	</main>
            
<?php
include 'input.html';
include 'footer.php';
?>