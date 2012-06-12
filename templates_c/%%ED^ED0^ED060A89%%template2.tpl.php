<?php /* Smarty version 2.6.21, created on 2010-07-27 10:24:06
         compiled from template2.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="design2.css" type="text/css" />
	<title>Menuiserie Bourachot</title>
<?php echo '
	<script type="text/javascript">

	</script>
'; ?>

</head>
<body>
	<div id="wrapper">
		<div id="header">
		</div>
		<div class="content">
			<ul id="menu">
				<li><a class="<?php if ($this->_tpl_vars['menu'] == 'accueil'): ?>current<?php endif; ?>" href="index.php">Accueil</a></li>
				<li><a class="<?php if ($this->_tpl_vars['menu'] == 'competences'): ?>current<?php endif; ?>" href="competences.php">Comp&eacute;tences</a></li>
				<li><a class="<?php if ($this->_tpl_vars['menu'] == 'references'): ?>current<?php endif; ?>" href="references.php">R&eacute;f&eacute;rences</a></li>
				<li><a class="<?php if ($this->_tpl_vars['menu'] == 'realisations'): ?>current<?php endif; ?>" href="realisations.php">R&eacute;alisations</a></li>
				<li><a class="<?php if ($this->_tpl_vars['menu'] == 'contact'): ?>current<?php endif; ?>" href="contact.php">Contact</a></li>
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


				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['file'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
 