<!DOCTYPE html>
<?php

include "aktualizacje.php"

?>

<html lang="pl" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="author" href="https://www.streambase.pl/">
<meta name="author" content="RugFlipper">
<meta name="description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online">
<meta property="og:site_name" content="StreamBase.pl - Pobieranie">
<meta property="og:url" content="https://www.streambase.pl/">
<meta property="og:title" content="StreamBase.pl - Pobieranie">
<meta property="og:description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online">

<link rel="icon" href="img/sbfav.png" type="image/x-icon">
<link rel="shortcut icon" href="img/sbfav.png" type="image/x-icon">

<title property="name">StreamBase.pl - Pobieranie</title>

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
                  <li><a href="./pl-strony">Polskie</a></li>
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
<div class="admonition note">
<div class="admonition-title"><font size="5">Pobieranie filmów/seriali z większości serwisów:</font></div>
<font size="3" color="#d8d8f6">Jest to płatna opcja z 30 dniowym okresem próbnym (który można zresetować, co jest opisane nieco niżej). Do pobierania użyjemy program IDM (Internet Download Manger) pobierzemy go ze strony autora: <a href="https://www.internetdownloadmanager.com/download.html" style="color: #a3a3a3" target="_blank">InternetDownloadManager.com</a>,
niezbędne do pełnego działania będzie pobranie również wtyczki pod nazwą "IDM" lub "Internet Download Manager" do przeglądarki z której korzystacie, wtedy przy danym video pokaże wam się przycisk
 który zaoferuje pobieranie, wtedy go klikacie i uruchamia się program, następnie pobieracie w programie i macie! (ten sposób działa dla filmów z CDA, ale poniżej jest łatwiejszy i szybszy sposób dla tej strony).
Program dostępny jest w wersji próbnej 30 dniowej, później by nadal korzystać jest opcja resetu do ponownej wersji próbnej, więcej informacji na <a href="https://github.com/J2TEAM/idm-trial-reset" target="_blank" style="color: #a3a3a3">IDM Trial Reset</a>.</font>
<br><br>
<div class="admonition-title"><font size="5">Pobieranie filmów/seriali z większości serwisów darmowych:</font></div>
<font size="3" color="#d8d8f6">Do pobierania użyjemy wtyczki do przeglądarki "Video DownloadHelper" pobierzemy ją ze strony autora: <a href="https://www.downloadhelper.net/install" style="color: #a3a3a3" target="_blank">DownloadHelper.net</a>,
po zainstalowaniu by pobrać dany materiał, wystarczy włączyć film/odcinek serialu i kliknąć ikonkę wtyczki na pasku, wtedy ujrzymy opcje pobierania.<br></font>
<br>
<div class="admonition-title"><font size="5">Pobieranie filmów/seriali stricte z CDA (tylko linki darmowe):</font></div>
<font size="3" color="#d8d8f6">Pobieranie materiałów z CDA lub inaczej mówiąc uzyskiwanie tzw. mirrora jest tutaj banalnie proste - służy do tego strona: <a href="https://pobieracz.net/" style="color: #a3a3a3" target="_blank">Pobieracz.net</a>, myśle że
 nie trzeba wiele tu tłumaczyć, wklejacie link > klikacie pobierz > dostajecie link który możecie pobrać klikając PPM.<br></font>
<br>
<div class="admonition-title"><font size="5">Pobieranie filmów/seriali tylko z darmowych portali bez logowania:</font></div>
<font size="3" color="#d8d8f6">Ten sposób działa tylko dla stron na których nie ma kont premium lub jakiegokolwiek logowania. Pobieramy program <a href="https://jdownloader.org/download/index" style="color: #a3a3a3" target="_blank">JDownloader</a>
następnie go instalujecie > i po włączeniu przechodzicie do zakładki "Zbieracz linków" > klikacie PPM > dodaj nowe linki, wklejacie swój link do strony z filmem
i klikacie kontynuuj, po prawej jedynie odznaczanie niepotrzebne pliki które ma wam znaleźć (tj. dokument, grafika itd.) ma zostać jedynie wyszukiwanie plików video.
Jeżeli strona spełnia kryteria, w polu wyszukiwania wyświetlą się pliki które po rozwinięciu będziemy mogli pobrać.</font>

<div class="admonition-title"><br><font size="5">Pobieranie plików video z serwisów VOD (nie wszystkie materiały premium):</font></div>
<font size="3" color="#d8d8f6">Do tego sposobu niezbędna będzie wtyczka "Tampermonkey" do przeglądarki z której korzystacie, gdy już ją macie, pobieracie skrypt ktory znajdziecie
na <a href="https://greasyfork.org/pl/scripts/6049-skrypt-umożliwiający-pobieranie-materiałów-ze-znanych-serwisów-vod" target="_blank" style="color: #a3a3a3">GreasyFork.org</a> > instalujecie i możecie korzystać,
jeżeli macie problem wszystko jest dokładnie opisane w linku który podałem.</font>
</div></font></main>


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
