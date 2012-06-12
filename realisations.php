<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// Note : Smarty a un 'S' majuscule
require('setup.php');

$smarty  = new Smarty();


$smarty->assign('file', 'realisations.tpl');
$smarty->assign('titre', 'R&eacute;alisations');
$smarty->assign('realisations', 'select_menu');
$smarty->assign('menu', 'realisations');

$smarty->display('template.tpl');
?>

