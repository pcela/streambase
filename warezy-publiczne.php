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
<meta property="og:site_name" content="StreamBase.pl - Polskie publiczne warezy">
<meta property="og:url" content="https://www.streambase.pl/">
<meta property="og:title" content="StreamBase.pl - Polskie publiczne warezy">
<meta property="og:description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online">

<link rel="icon" href="img/sbfav.png" type="image/x-icon">
<link rel="shortcut icon" href="img/sbfav.png" type="image/x-icon">

<title property="name">StreamBase.pl - Polskie publiczne warezy</title>

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
<div class="admonition note"><span style="color: #d8d8f6">OSTATNIA AKTUALIZACJA: <?php echo "<b>$war_pub_data</b>" ?><br> 
<?php echo "$war_pub_co_zostalo_zmienione" ?></div>
<div class="admonition note">
<b><span style="color: #d8d8f6"><font size="5">Lista Polskich publicznych stron/for z warezami:</font></span></b><br>
<br><font size="5">
	<?php echo "$war_pub_linki" ?>
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