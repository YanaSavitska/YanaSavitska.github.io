<?php
include 'header.php';
?>
        	<main>
	    <div class="pos_2">
	        <p><img id="largeImg" src="images/clothes/m3_1.jpg" alt="Large image" /></p>
                <p class="thumbs">
                    <a href="images/clothes/m3_1.jpg"><img src="images/clothes/m3_1.jpg" /></a>
                    <a href="images/clothes/m3_2.jpg"><img src="images/clothes/m3_2.jpg" /></a>
                    <a href="images/clothes/m3_3.jpg"><img src="images/clothes/m3_3.jpg" /></a>
                </p>
        </div>
        <div class="pos_2">
            <h2 class="en" lang="en"> Shorts </h2>
            <h2 class="uk" lang="uk"> Шорти </h2>
            <h2 class="ru" lang="ru"> Шорты </h2>
            
           <p class="en" lang="en"> Price: <input type="text" readonly id="en_m3" class="text"/> $ <br>
                Sizes: 38, 40, 42, 44, 46, 48, 50<br>
                Color: dark blue<br>
                Style: everyday<br>
                Composition: 100% cotton<br>
                Growth of the model in the photo: 180-185 cm<br>
                Hide girth: 76-78 cm<br>
                Article: Prvlg0127</p>
                <button class="but_2 en" lang="en" <a onclick="javascript:PopUpShow()"></a> Buy <img src="images/buy.png"></button>
                
            <p class="uk" lang="uk"> Ціна: <input type="text" readonly id="uk_m3" class="text" /> грн. <br>
                Розміри:  38, 40, 42, 44, 46, 48, 50<br>
                Колір:  темно синій<br>
                Стиль:  повсякденний<br>
                Склад:  100% хлопок<br>
                Ріст моделі на фото: 180-185 см<br>
                Обхват бедер: 76-78 см<br>
                Артикул: Prvlg0127</p>
                <button class="but_2 uk" lang="uk" <a onclick="javascript:PopUpShow()"></a> Купити <img src="images/buy.png"></button>
            <p class="ru" lang="ru"> Цена: <input type="text" readonly id="ru_m3" class="text" /> р. <br>
               Размеры: 38, 40, 42, 44, 46, 48, 50<br>
                Цвет: темно синий<br>
                Стиль: повседневный<br>
                Состав: 100% хлопок<br>
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