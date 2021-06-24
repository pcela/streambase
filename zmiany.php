<!DOCTYPE html>
<?php 

include "aktualizacje.php"

?>

<html lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="author" href="https://www.streambase.pl/">
<meta name="author" content="RugFlipper">
<meta name="description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online">
<meta property="og:site_name" content="StreamBase.pl - Ostatnie aktualizacje">
<meta property="og:url" content="https://www.streambase.pl/">
<meta property="og:title" content="StreamBase.pl - Ostatnie aktualizacje">
<meta property="og:description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online">

<link rel="icon" href="img/sbfav.png" type="image/x-icon">
<link rel="shortcut icon" href="img/sbfav.png" type="image/x-icon">

<title property="name">StreamBase.pl - Ostatnie aktualizacje</title>

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
                  <li><a href="./pobieranie">Pobieranie filmów/seriali</a></li>
                </ul>
              </div>
				<li>&nbsp;&nbsp;&nbsp;<span style="color: #d8d8f6">&#8901;</span>&nbsp;&nbsp;
				<a href="./czat-sb">Czat</a></li>

				<li>&nbsp;&nbsp;&nbsp;<span style="color: #d8d8f6">&#8901;</span>&nbsp;&nbsp;
				<a href="./reklamy">Blokowanie reklam</a></li>
			
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</span>
<br><main style="margin-left: 150px; margin-right: 150px">
<div class="admonition note">
<font size="5">
Ostatnie aktualizacje poszczególnych kategorii:</br></br>

<span style="float: left;"><font size="3">FILMY I SERIALE > <a href="./polskie" style="color: #d8d8f6">POLSKIE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$polskie_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">FILMY I SERIALE > <a href="./angielskie" style="color: #d8d8f6">ANGIELSKIE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$ang_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">FILMY I SERIALE > <a href="./filmy-wiecej" style="color: #d8d8f6">NARZĘDZIA</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$filmy_narzedzia_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">ANIMOWANE > <a href="./animowane" style="color: #d8d8f6">KRESKÓWKI/ANIME</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$anima_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">TORRENTY > <a href="./torrenty-polskie" style="color: #d8d8f6">POLSKIE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$tor_pl_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">TORRENTY > <a href="./torrenty-angielskie" style="color: #d8d8f6">ANGIELSKIE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$tor_ang_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">TORRENTY > <a href="./torrenty-wiecej" style="color: #d8d8f6">NARZĘDZIA</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$tor_wiecej_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">WAREZY > <a href="./warezy-publiczne" style="color: #d8d8f6">POLSKIE PUBLICZNE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$war_pub_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">WAREZY > <a href="./warezy-prywatne" style="color: #d8d8f6">POLSKIE PRYWATNE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$war_priv_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">WAREZY > <a href="./warezy-angielskie-publiczne" style="color: #d8d8f6">ANG. PUBLICZNE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$war_ang_pub_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">POZOSTAŁE > <a href="./konta" style="color: #d8d8f6">KONTA PREMIUM</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$konta_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">POZOSTAŁE > <a href="./sport" style="color: #d8d8f6">SPORT ONLINE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$sport_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">POZOSTAŁE > <a href="./wyszukiwarki" style="color: #d8d8f6">WYSZUKIWARKI PLIKÓW</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$wysz_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">POZOSTAŁE > <a href="./tv" style="color: #d8d8f6">TV ONLINE</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$tv_data</b>" ?></span></span><br>
<span style="float: left;"><font size="3">POZOSTAŁE > <a href="./ksiazki" style="color: #d8d8f6">EBOOKI/AUDIOBOOKI</a></font></span><span style="float: right;">OSTATNIA AKTUALIZACJA: <span style="color:#f89898;"><?php echo "<b>$ksiazki_data</b>" ?></span></span><br>


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