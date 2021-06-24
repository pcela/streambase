<!DOCTYPE html>
<?php

include 'aktualizacje.php'

?>

<html lang="pl" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="author" href="https://www.streambase.pl/">
<meta name="author" content="RugFlipper">
<meta name="description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online">
<meta property="og:site_name" content="StreamBase.pl - Polskie strony z filmami i serialami">
<meta property="og:url" content="https://www.streambase.pl/">
<meta property="og:title" content="StreamBase.pl - Polskie strony z filmami i serialami">
<meta property="og:description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online">

<link rel="icon" href="img/sbfav.png" type="image/x-icon">
<link rel="shortcut icon" href="img/sbfav.png" type="image/x-icon">

<title property="name">StreamBase.pl - Polskie strony z filmami i serialami</title>

<link href="css/style-index.css?<?php echo date('YmdHis',filemtime('css/style-index.css'));?>" rel="stylesheet" type="text/css" />
<link href="css/logo.css?<?php echo date('YmdHis',filemtime('css/logo.css'));?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/czatnumer.css?<?php echo date('YmdHis',filemtime('css/czatnumer.css'));?>"/>

</head>

<body>



<br><center><a href="./"><div class="logo"></div></a></center>

<nav>
    <div class="wrapper">
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        
        <li>
          <a href="#" class="desktop-item">Menu</a>
          <input type="checkbox" id="showMega">
          <div class="mega-box">
            <div class="content">
             <div class="row">
                <header>Filmy i seriale</header>
                <ul class="mega-links">
                  <li><a href="./angielskie">Angielskie</a></li>
				  <li><a href="./wyszukiwarka">Wyszukiwarka</a></li>
				  <li><a href="./filmy-wiecej">Narzędzia</a></li>
                </ul>
				<header>Animowane</header>
                <ul class="mega-links">
                  <li><a href="./animowane">Kreskówki/Anime</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Torrenty</header>
                <ul class="mega-links">
                  <li><a href="./torrenty-polskie">Polskie</a></li>
                  <li><a href="./torrenty-angielskie">Angielskie</a></li>
                  <li><a href="./torrenty-wiecej">Narzędzia</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Warezy</header>
                <ul class="mega-links">
                  <li><a href="./warezy-publiczne">Polskie publiczne</a></li>
                  <li><a href="./warezy-prywatne">Polskie prywatne</a></li>
				  <li><a href="./warezy-angielskie-publiczne">Ang. publiczne</a></li>
                </ul>
              </div>
			  <div class="row">
				<header>Pozostałe</header>
                <ul class="mega-links">
				  <li><a href="./ksiazki">eBooki/AudioBooki</a></li>
				  <li><a href="./konta">Konta premium</a></li>
                  <li><a href="./sport">Sport online</a></li>
                  <li><a href="./tv">TV online</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="./wyszukiwarki">Wyszukiwarki plików video</a></li>
                  <li><a href="./pobieranie">Pobieranie filmów/seriali</a></li>
                </ul>
              </div>
			  
				<li>&nbsp;&nbsp;&nbsp;<span style="color: #d8d8f6">&#8901;</span>&nbsp;&nbsp;
				<a href="./czat-sb">Czat</a></li>

				<li>&nbsp;&nbsp;&nbsp;<span style="color: #d8d8f6">&#8901;</span>&nbsp;&nbsp;
				<a href="./reklamy">Blokowanie reklam</a></li>

				<li>&nbsp;&nbsp;&nbsp;<span style="color: #d8d8f6">&#8901;</span>&nbsp;&nbsp;

				<a href="#" class="desktop-item">Więcej</a>
				<input type="checkbox" id="showDrop">
				<ul class="drop-menu">
				<li><a href="./zmiany">Aktualizacje</a></li>
				
					</ul>
				</li>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
<br><main style="margin-left: 150px; margin-right: 150px">

<div class="admonition note"><span style="color: #d8d8f6">OSTATNIA AKTUALIZACJA: <?php echo "<b>$polskie_data</b>" ?><br>
<?php echo "$polskie_co_zostalo_zmienione" ?><br></div>
<!-- <div class="admonition note">
<font size="3">Do wszystkich stron zalecam instalacje wtyczki do blokowania reklam <b><a href="./reklamy" style="text-decoration: none;color: #f89898">uBlock Origin</b></a> ze względu na ilość reklam w odtwarzaczach oraz podaną tam liste filtrów antyadblockowych. Jest to obecnie najlepsza wtyczka typu "adblock" spośród dostępnych odpowiedników.</font><br></div>

<div class="admonition note">
<font size="3" color="#f89898"><b>ZMIANA:</b> ikonki i legenda stron znikneły - te informacje od teraz pojawiają się po najechaniu na daną stronę myszką. Znaczenie ikon przed adresem stron znajduje się po najechaniu na daną ikone kursorem myszki oraz również na samym dole spisu.</font></span>
</div> -->
<div class="admonition note">
<b><font size="5">Lista darmowych Polskich stron z filmami i serialami:</font></b><br><br>
<font size="5">
	<?php echo "$polskie_linki" ?>
 </font>
 
  <!-- <b>&nbsp;<font size="3">&#9748;</b> <span style="color: #d8d8f6">- INFO 1: gdy pojawia się komunikat o premium, należy odświeżyć stronę i zacząć od momentu w którym się skończyło.</span></br></font>
  <b>&nbsp;<font size="3">&#127746;</b> <span style="color: #d8d8f6">- INFO 2: większość filmów/seriali na tej stronie pojawia się po założeniu konta, bez niego niektóre materiały mogą się nie pokazywać - załóż na niej bezpłatne konto.</span><br></font>
  <b>&nbsp;<font size="3"></font><font size="3" color="lime">&#9851;</b> <span style="color: #d8d8f6">- oznaczenie które informuje że na stronę rzadko są dodawane filmy lub jest ich mało.</span></br></font>
  <b>&nbsp;<font size="3">&#9889;</b> <span style="color: #d8d8f6">- oznaczenie stron które zależnie od ich obciążenia są darmowe.</span></br></font>
  <b>&nbsp;<font size="3">&#127760;</b> <span style="color: #d8d8f6">- oznaczenie stron bez reklam.</span></br></font>
  <b>&nbsp;<font size="3"><span style="color: FUCHSIA">&#128274;</span></b> <span style="color: #d8d8f6">- oznaczenie stron na których do oglądania jest wymagane konto.</span></br></font>
  <b>&nbsp;<font size="3">&#128269;</b> <span style="color: #d8d8f6">- oznaczenie stron na których niektóre filmy/seriale są płatne.</span><br></font>
  -->
  
</main>

		
		<?php echo "$footer" ?>
		
		<br>
		
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<script> 
 function online_24()
 {
	$.ajax({
   url:"24.php",
   method:"POST",
   success:function(data)
   {
    $('#24').html(data);
	
   }
  })
 }
 online_24();
</script>

</body>
</html>