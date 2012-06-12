<?php
/**
 *	@author adelavea
 *	@version 1
 * 	17 dec. 08
 */
require('setup.php');


$smarty  = new Smarty();

$smarty->assign('file', 'competences.tpl');
$smarty->assign('titre', 'Comp&eacute;tences');
$smarty->assign('competences', 'select_menu');
$smarty->assign('menu', 'competences');

$smarty->display('template.tpl');

?>
