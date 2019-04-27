<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Kapcsolat</title>
    
    <link rel="stylesheet" type="text/css" href="beadando1.css">
   
</head>

<body>
    
    
    
    <header>
        <a href="Főoldal_1"><img src="img/logo.png"></a>
       
        
    
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
		</div>
		
    <div id="felirat">
        
        <form name="kapcsolat" action="kapcsolat1.php" onsubmit="return ellenoriz();"method="post">
                          <h2>Név</h2>
                         <div>
                                <input type="text"value="" id="name" pattern="[' '\-a-zA-Z]+">
                        </div>
                        <div class="separator"></div>
                    <div class="box">
                             <h2 class="inside">E-mail</h2>
                             <input type="text"  value="" id="email" required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>     
                        
                        <div class="box">
                             <h2 class="inside">Üzenet</h2>
                             <textarea name="text"></textarea>
						</div>
						<div class="kuld">
            <input type="submit">
			
        </div>
		</form>
		
	</div>
							
       
       
</body>
</html>

