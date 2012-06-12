<?php /* Smarty version 2.6.21, created on 2012-06-12 11:33:19
         compiled from contact.tpl */ ?>
	

	<h2><?php echo $this->_tpl_vars['titre']; ?>
</h2>
			<p style="float:right;padding: 10px 100px 0px 40px;color:#FF3333;"><?php echo $this->_tpl_vars['monmessage']; ?>
<br/><img src="images/arobas.jpg" style="height:200px;border:0px;"></p>
			

	<p>
	
		<form action="contact.php" method="POST" name="form">
		    <table>
		        <tr>
		            <td>Nom / Pr&eacute;nom : </td>
		            <td><input type="text" name="nom" size="39"></td>
		        </tr>
		        <tr>
		            <td>Email : </td>
		            <td><input type="text" value="<?php echo $this->_tpl_vars['email']; ?>
" name="email" size="39"></td>
		        </tr>
		        <tr>
		            <td>Soci&eacute;t&eacute; : </td>
		            <td><input type="text" value="<?php echo $this->_tpl_vars['societe']; ?>
" name="societe" size="39"></td>
		        </tr>
		        <tr>
		            <td>Coordonn&eacute;es : </td>
		            <td><input type="text" value="<?php echo $this->_tpl_vars['coordonees']; ?>
" name="coordonees" size="39"></td>
		        </tr>
		        <tr>
		            <td>Objet : </td>
		            <td><input type="text" value="<?php echo $this->_tpl_vars['objet']; ?>
" name="objet" size="39"></td>
		        </tr>
		        <tr>
		            <td>Message : </td>
		            <td><textarea name="message" cols="34" rows="6"><?php echo $this->_tpl_vars['message']; ?>
</textarea></td>
		        </tr>
		        <tr>
		            <td></td>
		            <td></td>
		        </tr>
		        <tr>
		            <td></td>
		            <td><input type="submit" value="Envoyer"></td>
		        </tr>

		    </table>
		</form>
	</p>

    