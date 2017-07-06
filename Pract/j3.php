<?php
include 'header.php';
?>
        	<main>
	    <div class="pos_2">
	        <p><img id="largeImg" src="images/clothes/j3_1.jpg" alt="Large image" /></p>
                <p class="thumbs">
                    <a href="images/clothes/j3_1.jpg"><img src="images/clothes/j3_1.jpg" /></a>
                    <a href="images/clothes/j3_2.jpg"><img src="images/clothes/j3_2.jpg" /></a>
                    <a href="images/clothes/j3_4.jpg"><img src="images/clothes/j3_4.jpg" /></a>
                </p>
        </div>
        <div class="pos_2">
            <h2 class="en" lang="en"> Dress </h2>
            <h2 class="uk" lang="uk"> Плаття </h2>
            <h2 class="ru" lang="ru"> Платье </h2>
            
            <p class="en" lang="en"> Price: <input type="text" readonly id="en_j3" class="text"/> $ <br>
                Dimensions: 40, 42, 44, 46, 48<br>
                Season: autumn-spring<br>
                Composition: 71% polyester, 17% viscose, 12% elastane<br>
                Color: black with print<br>
                Country of origin: Ukraine<br>
                Style: for every day<br>
                Article: Prvlg1126</p>
                <button class="but_2 en" lang="en" <a onclick="javascript:PopUpShow()"></a> Buy <img src="images/buy.png"></button>
                
            <p class="uk" lang="uk"> Ціна: <input type="text" readonly id="uk_j3" class="text" /> грн. <br>
                Розміри:  40, 42, 44, 46, 48<br>
                Сезон:  осінньо-весняний<br>
                Склад:  71% поліестер, 17% віскоза, 12% еластан<br>
                Колір: чорний з принтом<br>
                Країна-виробник:  Україна<br>
                Стиль:  на кожен день<br>
                Артикул: Prvlg1126</p>
                <button class="but_2 uk" lang="uk" <a onclick="javascript:PopUpShow()"></a> Купити <img src="images/buy.png"></button>
                
            <p class="ru" lang="ru"> Цена: <input type="text" readonly id="ru_j3" class="text" /> р. <br>
                Размеры: 40, 42, 44, 46, 48<br>
                Сезон: осенне-весенний<br>
                Состав 71% полиэстер, 17% вискоза, 12% эластан<br>
                Цвет: черный с принтом<br>
                Страна-производитель: Украина<br>
                Стиль: на каждый день<br>
                Артикул: Prvlg1126</p><br>
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