<?php
/**
 *	@author adelavea
 *	@version 1
 * 	12 dec. 09
 */

// Note : Smarty a un 'S' majuscule
require('setup.php');

$smarty  = new Smarty();
//$smarty->debugging_ctrl= 'URL';

$smarty->assign('titre','Home');




// 2. Recensement dans smarty de la variable $aMonTableau

$smarty->assign('file', 'index.tpl');


$smarty->assign('titre', 'Accueil');
$smarty->assign('accueil', 'select_menu');
$smarty->assign('menu', 'accueil');

$smarty->display('template.tpl');
?>
