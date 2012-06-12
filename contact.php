<?php
/**
 *	@author adelavea
 *	@version 1
 * 	17 dec. 08
 */
require('setup.php');

	/*
		********************************************************************************************
		CONFIGURATION
		********************************************************************************************
	*/
	// destinataire est votre adresse mail. Pour envoyer √† plusieurs √† la fois, s√©parez-les par une virgule
	$destinataire = 'menuiserie.bourachot@orange.fr';

	// copie ? (envoie une copie au visiteur)
	$copie = 'non';

	// Action du formulaire (si votre page a des param√®tres dans l'URL)
	// si cette page est index.php?page=contact alors mettez index.php?page=contact
	// sinon, laissez vide

	// Messages de confirmation du mail
	$message_envoye = "Votre message nous est bien parvenu !";
	$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

	// Message d'erreur du formulaire
	$message_formulaire_invalide = "Vérifiez que tous les champs sont bien remplis et que l'adresse mail ne comporte aucune erreur.";

	/*
		********************************************************************************************
		FIN DE LA CONFIGURATION
		********************************************************************************************
	*/

	/*
	 * cette fonction sert √† nettoyer et enregistrer un texte
	 */
	function Rec($text)
	{
		$text = trim($text); // delete white spaces after & before text
		if (1 === get_magic_quotes_gpc())
		{
			$stripslashes = create_function('$txt', 'return stripslashes($txt);');
		}
		else
		{
			$stripslashes = create_function('$txt', 'return $txt;');
		}

		// magic quotes ?
		$text = $stripslashes($text);
		$text = htmlspecialchars($text, ENT_QUOTES); // converts to string with " and ' as well
		$text = nl2br($text);
		return $text;
	};

	/*
	 * Cette fonction sert √† v√©rifier la syntaxe d'un email
	 */
	function IsEmail($email)
	{
		$pattern = "^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,7}$";
		return (eregi($pattern,$email)) ? true : false;
	};

	$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

	// si formulaire envoy√©, on r√©cup√®re tous les champs. Sinon, on initialise les variables.
	$nom     = (isset($_POST['nom']))         ? Rec($_POST['nom'])     : '';
	$email   = (isset($_POST['email']))       ? Rec($_POST['email'])   : '';
    $soc     = (isset($_POST['societe']))     ? Rec($_POST['societe'])     : '';
    $coordonee     = (isset($_POST['coordonees']))  ? Rec($_POST['coordonees'])     : '';
	$objet   = (isset($_POST['objet']))       ? Rec($_POST['objet'])   : '';
	$message = (isset($_POST['message']))     ? Rec($_POST['message']) : '';

	if (isset($_POST['email']))
	{
		// On va v√©rifier les variables et l'email ...
		$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erron√©, soit il vaut l'email entr√©
		$err_formulaire = (IsEmail($email)) ? false : true;

		if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
		{
			// les 4 variables sont remplies, on g√©n√®re puis envoie le mail
			$headers = 'From: '.$nom.' <'.$email.'>' . "\r\n";
			$message .= "\n\nInformation du visiteur: \n Nom : $nom \n Email : $email \n Societe : $soc \n Coordonnees : $coordonee";
			
			// envoyer une copie au visiteur ?
			if ($copie == 'oui')
			{
				$cible = $destinataire.','.$email;
			}
			else
			{
				$cible = $destinataire;
			};

			// Remplacement de certains caract√®res sp√©ciaux
			$message = html_entity_decode($message);
			$message = str_replace('&#039;',"'",$message);
			$message = str_replace('&#8217;',"'",$message);
			$message = str_replace('<br>','',$message);
			$message = str_replace('<br />','',$message);

			// Envoi du mail
			if (mail($cible, $objet, $message, $headers))
			{
				$monmessg =  '<p>'.$message_envoye.'</p>'."\n";
			}
			else
			{
				$monmessg =  '<p>'.$message_non_envoye.'</p>'."\n";
			};
		}
		else
		{
			// une des 3 variables (ou plus) est vide ...
			$monmessg =  '<p>'.$message_formulaire_invalide.' <a href="contact.php">Retour au formulaire</a></p>'."\n";
			$err_formulaire = true;
		};
	}; // fin du if (!isset($_POST['envoi']))

	if (($err_formulaire) || (!isset($_POST['email'])))
	{
		// afficher le formulaire
/*		echo '<form id="contact" method="post" action="'.$form_action.'">'."\n";
		echo '	<fieldset><legend>Vos coordonn√©es</legend>'."\n";
		echo '		<p>'."\n";
		echo '			<label for="nom">Nom :</label>'."\n";
		echo '			<input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" />'."\n";
		echo '		</p>'."\n";
		echo '		<p>'."\n";
		echo '			<label for="email">Email :</label>'."\n";
		echo '			<input type="text" id="email" name="email" value="'.stripslashes($email).'" tabindex="2" />'."\n";
		echo '		</p>'."\n";
		echo '	</fieldset>'."\n";

		echo '	<fieldset><legend>Votre message :</legend>'."\n";
		echo '		<p>'."\n";
		echo '			<label for="objet">Objet :</label>'."\n";
		echo '			<input type="text" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" />'."\n";
		echo '		</p>'."\n";
		echo '		<p>'."\n";
		echo '			<label for="message">Message :</label>'."\n";
		echo '			<textarea id="message" name="message" tabindex="4" cols="30" rows="8">'.stripslashes($message).'</textarea>'."\n";
		echo '		</p>'."\n";
		echo '	</fieldset>'."\n";

		echo '	<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>'."\n";
		echo '</form>'."\n";
*/	};
$smarty  = new Smarty();

$smarty->assign('monmessage', $monmessg);

$smarty->assign('file', 'contact.tpl');
$smarty->assign('titre', 'Contact');
$smarty->assign('contact', 'select_menu');
$smarty->assign('menu', 'contact');

$smarty->display('template.tpl');

?>
