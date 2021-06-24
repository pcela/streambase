<!DOCTYPE html>
<?php

include 'aktualizacje.php'
?>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <link rel="author" href="https://www.StreamBase.pl/">
	<meta name="author" content="RugFlipper">
	<meta name="keywords" content="strony z filmami, strony z filmami online, filmy online, seriale online, Telewizja Online, online, filmy za darmo, seriale za darmo, film online, serial online, ranking seriali, najlepsze seriale,  ranking filmów, Popularne filmy">
	<meta name="description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online, i nie tylko!">
	<meta property="og:site_name" content="StreamBase.pl - Czat online">
	<meta property="og:url" content="https://www.StreamBase.pl/">
	<meta property="og:title" content="StreamBase.pl - Czat online">
	<meta property="og:description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online, i nie tylko!">
	<meta property="og:image" content="https://www.streambase.pl/img/200.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
	<meta property="og:type" content="website"/>

	<link rel="icon" href="img/sbfav.png" type="image/x-icon">
	<link rel="shortcut icon" href="img/sbfav.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style-index.css?<?php echo date('YmdHis',filemtime('css/style-index.css'));?>">
	<link rel="stylesheet" href="css/logo.css?<?php echo date('YmdHis',filemtime('css/logo.css'));?>">

	<title property="name">StreamBase.pl - Czat online</title>
  
</head>
<body>
		
		
	<br>
  <center><a href="./"><div class="logo"></div></a></center>
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
                  <li><a href="./pobieranie">Pobieranie filmów/seriali</a></li>
                </ul>
              </div>

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

		<center>
		
		<br>
<iframe src="https://titanembeds.com/embed/795665744154329108?css=235&lang=pl_PL&defaultchannel=829741478476644432&theme=DiscordDark&scrollbartheme=minimal" height="600" width="800" frameborder="0"></iframe>
<br />
<span style="color: white">Jeżeli po zalogowaniu się do czatu pseudonimy czatujących są białe, zaczekaj aż załadują się ich kolory,<br>
jeżeli po chwili to nie nastąpi, odśwież stronę i ponownie zaczekaj aż kolory się załadują, powinno to nastąpić.<br>
Jeżeli nie widzisz kolorów, nie pojawią Ci się odpowiedzi na twoje ewentualne pytanie. Przepraszmy za utrudnienia.</span><br /><br>
		</center>

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
