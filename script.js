(function(){
    var body = document.getElementsByTagName('body')[0];

    var switcherRU = document.getElementById('switcher-ru');
    var switcherEN = document.getElementById('switcher-en');
    var switcherUK = document.getElementById('switcher-uk');

    // Обрахунок терміну зберігання cookie
    var expires = new Date();
    expires.setDate(expires.getDate() + 366);
    expires.toUTCString();

    var switchLang = function() {
    var lang = this.id
    lang = lang.replace('switcher-', '');

    // Зміна класу для BODY
    body.className = lang;

    // Запис cookie
      document.cookie = [
        'lang=' + lang
        ,'; expires=' + expires // використовуємо expires, max-age не підтримується в ІЕ
        ,'; path=/'
        ,'; domain=' + document.location.host
      ].join;
    }

    switcherRU.onclick = switchLang;
    switcherEN.onclick = switchLang;
    switcherUK.onclick = switchLang;
  })();
  
    // Переведення $ в грн. і р.
    var kurs_dol = 26;
    var kurs_rub = 0.44;
    
    document.getElementById('en_m1').value = 15.5;
    var a = document.getElementById('en_m1').value * kurs_dol;
    document.getElementById('uk_m1').value = Math.round(a);
    var b = document.getElementById('uk_m1').value / kurs_rub;
    document.getElementById('ru_m1').value = Math.round(b);
    
    document.getElementById('en_j3').value = 20;
    var c = document.getElementById('en_j3').value * kurs_dol;
    document.getElementById('uk_j3').value = Math.round(c);
    var d = document.getElementById('uk_j3').value / kurs_rub;
    document.getElementById('ru_j3').value = Math.round(d);
    
    document.getElementById('en_m2').value = 18;
    var e = document.getElementById('en_m2').value * kurs_dol;
    document.getElementById('uk_m2').value = Math.round(e);
    var f = document.getElementById('uk_m2').value / kurs_rub;
    document.getElementById('ru_m2').value = Math.round(f);
    
    document.getElementById('en_j1').value = 15;
    var g = document.getElementById('en_j1').value * kurs_dol;
    document.getElementById('uk_j1').value = Math.round(g);
    var h = document.getElementById('uk_j1').value / kurs_rub;
    document.getElementById('ru_j1').value = Math.round(h);
    
    document.getElementById('en_j2').value = 31;
    var i = document.getElementById('en_j2').value * kurs_dol;
    document.getElementById('uk_j2').value = Math.round(i);
    var j = document.getElementById('uk_j2').value / kurs_rub;
    document.getElementById('ru_j2').value = Math.round(j);
    
    document.getElementById('en_m3').value = 19;
    var k = document.getElementById('en_m3').value * kurs_dol;
    document.getElementById('uk_m3').value = Math.round(k);
    var l = document.getElementById('uk_m3').value / kurs_rub;
    document.getElementById('ru_m3').value = Math.round(l);
    
    document.getElementById('en_j4').value = 17;
    var m = document.getElementById('en_j4').value * kurs_dol;
    document.getElementById('uk_j4').value = Math.round(m);
    var n = document.getElementById('uk_j4').value / kurs_rub;
    document.getElementById('ru_j4').value = Math.round(n);
    
    document.getElementById('en_m4').value = 16;
    var o = document.getElementById('en_m4').value * kurs_dol;
    document.getElementById('uk_m4').value = Math.round(o);
    var p = document.getElementById('uk_m4').value / kurs_rub;
    document.getElementById('ru_m4').value = Math.round(p);
    
// ajax
    $(document).ready(function(){
		
			$('#en_about').click(function(){
				$.ajax({
					url: "about.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#uk_about').click(function(){
				$.ajax({
					url: "about.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#ru_about').click(function(){
				$.ajax({
					url: "about.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#en_contacts').click(function(){
				$.ajax({
					url: "contacts.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#uk_contacts').click(function(){
				$.ajax({
					url: "contacts.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#ru_contacts').click(function(){
				$.ajax({
					url: "contacts.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#en_man').click(function(){
				$.ajax({
					url: "man.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#uk_man').click(function(){
				$.ajax({
					url: "man.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#ru_man').click(function(){
				$.ajax({
					url: "man.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#en_woman').click(function(){
				$.ajax({
					url: "woman.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#uk_woman').click(function(){
				$.ajax({
					url: "woman.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
			$('#ru_woman').click(function(){
				$.ajax({
					url: "woman.html",
					cache: false,
					success: function(html){
						$("#content").html(html);
					}
				});
			});
			
// 			$('#en_back_man').click(function(){
// 				$.ajax({
// 					url: "man.html",
// 					cache: false,
// 					success: function(html){
// 						$("#content").html(html);
// 					}
// 				});
// 			});
			
		
		});