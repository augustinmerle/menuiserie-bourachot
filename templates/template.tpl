<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="design.css" type="text/css" />
	<title>Menuiserie Bourachot</title>
{literal}
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11573363-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
{/literal}
</head>
<body>
	<div id="wrapper">
		<div id="header">
		</div>
		<div class="content">
			<ul id="menu">
				<li><a class="{if $menu eq 'accueil'}current{/if}" href="index.php">Accueil</a></li>
				<li><a class="{if $menu eq 'competences'}current{/if}" href="competences.php">Comp&eacute;tences</a></li>
				<li><a class="{if $menu eq 'references'}current{/if}" href="references.php">R&eacute;f&eacute;rences</a></li>
				<li><a class="{if $menu eq 'realisations'}current{/if}" href="realisations.php">R&eacute;alisations</a></li>
				<li><a class="{if $menu eq 'contact'}current{/if}" href="contact.php">Contact</a></li>
			</ul>
			<div id="pitch">
				<div id="logo">
					<a href="index.php"><img src="images/logo.jpg" alt="Menuiserie Bourachot" style="border:none; height: 228px;"></a>
				</div>
				<br/>
				<h1>Une dimension artisanale <br />
				pour une qualité haute gamme</h1>
				<p><em></em></p>
			
			</div>
			<p style="float:left;padding-right:50px;">Nous contacter :<br/> Téléphone: 04 70 55 32 21<br/> Email: <a href="mailto:postmaster@menuiserie-bourachot.com" style="color:white;text-decoration:underline;">postmaster@menuiserie-bourachot.com</a> </p>
			<p style="float:left;padding-right:50px;width:300px">Adresse : Menuiserie Bourachot<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Les Ravats
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 03130 LE BOUCHAUD</p>
		<div class="clr"></div>
		</div>
				<div id="main">


				{include file=$file}

							</div>

						<div id="footer">
							
							<p>
							Copyright &copy; 2010 &minus; Menuiserie Bourachot
							<a href="http://www.infostravaux.fr" title="infostravaux">
								<img alt="infotravaux.fr" src="images/logoinfostravaux.jpg" style="height:20px;vertical-align:middle;border:0px;">
							</a> 
<!--							<a href="http://www.laveaucoupet.fr/">
								<img alt="laveaucoupet.fr" src="images/logolaveaucoupet.jpg" style="height:22px;vertical-align:middle;border:0px;">
							</a>
-->							</p>
						</div>
					</div>

		</body>
		</html>
 