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
<meta property="og:site_name" content="StreamBase.pl - Wyszukiwarka filmów i seriali">
<meta property="og:url" content="https://www.streambase.pl/">
<meta property="og:title" content="StreamBase.pl - Wyszukiwarka filmów i seriali">
<meta property="og:description" content="Najaktualniejsza baza z darmowymi stronami do oglądania filmów i seriali online">

<link rel="icon" href="img/sbfav.png" type="image/x-icon">
<link rel="shortcut icon" href="img/sbfav.png" type="image/x-icon">

<title property="name">StreamBase.pl - Wyszukiwarka filmów i seriali</title>

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

<br>
<center><span style="color: white;"><b>Wyszukiwarka filmów i seriali *wersja BETA, tylko Polskie strony*</b></span>
<div style="width: 500px"><script async src="https://cse.google.com/cse.js?cx=c7dd048ff526f3898"></script>
<div class="gcse-search"></div></div>
<center><span style="color: red;"><b>Wyszukiwarka nie działa we wszystkich przeglądarkach,<br> jeżeli nic tu nie widzisz zmień przeglądarke.<br><br>
Jeżeli wyszukiwarka nie znajdzie szukanego przez Ciebie materiału nie oznacza to że go nie ma, <br>zalecamy w takim wypadku udać się do zakładki ze spisem Polskich stron i przeszukać manualnie strony.</b></span></center>
<br>
		
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