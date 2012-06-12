<?php
/**
 *	@author adelavea
 *	@version 1
 * 	12 dÈc. 08
 */

// charge la librairie Smarty
require('libs/Smarty.class.php');

// le fichier setup.php est un bon
// endroit pour charger les fichiers
// de librairies de l'application et vous pouvez
// faire cel‡ juste ici. Par exemple :
// require('livredor/livredor.lib.php');

class Smarty_livredor extends Smarty {

 function Smarty() {

 // Constructeur de la classe.
 // AppelÈ automatiquement ‡ l'instanciation de la classe.

 $this->Smarty();

 $this->template_dir = 'templates/';
 $this->compile_dir = 'templates_c/';
 $this->config_dir = 'configs/';
 $this->cache_dir = 'cache/';

 $this->caching = true;
 $this->assign('app_name', 'Menuiserie Bourachot');

 }

}

?>
