<?php
include 'header.php';
?>
        	<main>
	    <div class="pos_2">
	        <p><img id="largeImg" src="images/clothes/m1_1.jpg" alt="Large image" /></p>
                <p class="thumbs">
                    <a href="images/clothes/m1_1.jpg"><img src="images/clothes/m1_1.jpg" /></a>
                    <a href="images/clothes/m1_2.jpg"><img src="images/clothes/m1_2.jpg" /></a>
                    <a href="images/clothes/m1_4.jpg"><img src="images/clothes/m1_4.jpg" /></a>
                </p>
        </div>
        <div class="pos_2">
            <h2 class="en" lang="en"> T-shirt </h2>
            <h2 class="uk" lang="uk"> Футболка </h2>
            <h2 class="ru" lang="ru"> Футболка </h2>
            
            <p class="en" lang="en"> Price: <input type="text" readonly id="en_m1" class="text"/> $ <br>
                Dimensions: 48, 50, 52, 54, 56, 58, 60<br>
                Country of origin: Ukraine<br>
                Composition: 100% cotton<br>
                Model size on photo: 48/50<br>
                Model Parameters: 95-78-90<br>
                Growth of the model in the photo: 186 cm<br>
                Length: 69 cm<br>
                Length: 23 cm<br>
                Season: Multi<br>
                Color: red<br>
                Article: Prvlg0125</p>
                <button class="but_2 en" lang="en" <a onclick="javascript:PopUpShow()"></a> Buy <img src="images/buy.png"></button>
                
            <p class="uk" lang="uk"> Ціна: <input type="text" readonly id="uk_m1" class="text" /> грн. <br>
                Розміри: 48, 50, 52, 54, 56, 58, 60<br>
                Країна-виробник: Україна<br>
                Склад: 100% хлопок<br>
                Размір моделі на фото: 48/50<br>
                Параметри моделі: 95-78-90<br>
                Ріст моделі на фото: 186 см<br>
                Довжина: 69 см<br>
                Довжинарукава: 23 см<br>
                Сезон: мульті<br>
                Колір: червоний<br>
                Артикул: Prvlg0125</p>
                <button class="but_2 uk" lang="uk" <a onclick="javascript:PopUpShow()"></a> Купити <img src="images/buy.png"></button>
                
            <p class="ru" lang="ru"> Цена: <input type="text" readonly id="ru_m1" class="text" /> р. <br>
                Размеры: 48, 50, 52, 54, 56, 58, 60<br>
                Страна-производитель: Украина<br>
                Состав: 100% хлопок<br>
                Размер модели на фото: 48/50<br>
                Параметры модели: 95-78-90<br>
                Рост модели на фото: 186 см<br>
                Длина: 69 см<br>
                Довжинарукава: 23 см<br>
                Сезон: мульти<br>
                Цвет: красный<br>
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