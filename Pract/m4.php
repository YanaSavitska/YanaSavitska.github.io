<?php
include 'header.php';
?>
        	<main>
	    <div class="pos_2">
	        <p><img id="largeImg" src="images/clothes/m4_1.jpg" alt="Large image" /></p>
                <p class="thumbs">
                    <a href="images/clothes/m4_1.jpg"><img src="images/clothes/m4_1.jpg" /></a>
                    <a href="images/clothes/m4_2.jpg"><img src="images/clothes/m4_2.jpg" /></a>
                    <a href="images/clothes/m4_4.jpg"><img src="images/clothes/m4_4.jpg" /></a>
                </p>
        </div>
        <div class="pos_2">
            <h2 class="en" lang="en"> Shirt </h2>
            <h2 class="uk" lang="uk"> Сорочка </h2>
            <h2 class="ru" lang="ru"> Рубашка </h2>
            
           <p class="en" lang="en"> Price: <input type="text" readonly id="en_m4" class="text"/> $ <br>
                Sizes: XS, S, M, L, XL, XXL, 3XL<br>
                Color: Blue<br>
                Style: elegant<br>
                Length of the sleeve: with long sleeves<br>
                Composition: 100% cotton<br>
                Article: Prvlg0128</p>
                <button class="but_2 en" lang="en" <a onclick="javascript:PopUpShow()"></a> Buy <img src="images/buy.png"></button>
                
            <p class="uk" lang="uk"> Ціна: <input type="text" readonly id="uk_m4" class="text" /> грн. <br>
                Розміри: XS, S, M, L, XL, XXL, 3XL<br>
                Колір:  блакитний<br>
                Стиль:  ошатний<br>
                Довжина рукава:  з довгими рукавами<br>
                Склад:  100% хлопок<br>
                Article: Prvlg0128</p>
                <button class="but_2 uk" lang="uk" <a onclick="javascript:PopUpShow()"></a> Купити <img src="images/buy.png"></button>
                
            <p class="ru" lang="ru"> Цена: <input type="text" readonly id="ru_m4" class="text" /> р. <br>
                Размеры: XS, S, M, L, XL, XXL, 3XL<br>
                Цвет: голубой<br>
                Стиль: нарядный<br>
                Длина рукава: с длинными рукавами<br>
                Состав: 100% хлопок<br>
                Article: Prvlg0125</p>
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