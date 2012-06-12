<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

// Note : Smarty a un 'S' majuscule
require('setup.php');

$smarty  = new Smarty();

$smarty->assign('file', 'references.tpl');

$smarty->assign('titre', 'R&eacute;f&eacute;rences');
$smarty->assign('references', 'select_menu');
$smarty->assign('menu', 'references');

$smarty->display('template.tpl');
?>