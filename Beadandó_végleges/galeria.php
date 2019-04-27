<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
   
    
    <link rel="stylesheet" type="text/css" href="beadando1.css">
    
</head>
<body>
    
    
    
    <header>
        <a href="Főoldal_1"><img src="img/logo.png"></a>
       
         <title>Galéria</title>
    
    </header>
    <div id="menu">
                <ul>
                    <li><a href="kezdolap.php"><strong>Főoldal</strong></a></li>
                    <li><a href="informacio.php"><strong>Információ</strong></a></li>
                    <li><a href="projectek.php"><strong>Projektek</strong></a></li>
                    <li><a href="kozerdeku.php"><strong>Küzérdekű adatok</strong></a></li>
                    <li><a href="elerhetosegek.php"><strong>Elérhetőségek</strong></a></li>
					<li><a href="galeria.php"><strong>Galéria</strong></a></li>
					<li><a href="kapcsolat.php"><strong>Kapcsolat</strong></a></li>
					<li><a href="video.php"><strong>Videók</strong></a></li>
					<li><a href="belep.php"><strong>Belépés/Regisztráció</strong></a></li>
                    
                </ul>
    </div>
        <div id="google">
        <form method="get" action="http://www.google.com/search">
            <input type="text"   name="q" size="15"axlength="255" value="Keresés az oldalon" />
            <input type="submit" value="Google keresés" />
        </form>
		<tr>
                <td >
                   
                          Az eredeti weboldal: <a href="http://neum.hu/welcome.html">Link</a>
                    
                </td>
            </tr>
			<br>
		<script>
var l = document.getElementById('kep');

window.onclick = function(event) {
  if (event.target == l) {
    mo.style.display = "none";
	
  }
};
</script>
 <div id="felirat">
<br>
<form class="form-inline" action="feltolt.php" method="post" enctype="multipart/form-data">
<input class="form-control" type="text" name="leiras" placeholder="Kép leírás"><br><br>
<input type="file" name="file" ><br>
<button type="submit" name="submit" class="btn btn-primary">Feltölt</button>

</form>
		</div>
		
        </div>
       
   
       
</body>
</html>

