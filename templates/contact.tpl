	

	<h2>{$titre}</h2>
			<p style="float:right;padding: 10px 100px 0px 40px;color:#FF3333;">{$monmessage}<br/><img src="images/arobas.jpg" style="height:200px;border:0px;"></p>
			

	<p>
	
		<form action="contact.php" method="POST" name="form">
		    <table>
		        <tr>
		            <td>Nom / Pr&eacute;nom : </td>
		            <td><input type="text" name="nom" size="39"></td>
		        </tr>
		        <tr>
		            <td>Email : </td>
		            <td><input type="text" value="{$email}" name="email" size="39"></td>
		        </tr>
		        <tr>
		            <td>Soci&eacute;t&eacute; : </td>
		            <td><input type="text" value="{$societe}" name="societe" size="39"></td>
		        </tr>
		        <tr>
		            <td>Coordonn&eacute;es : </td>
		            <td><input type="text" value="{$coordonees}" name="coordonees" size="39"></td>
		        </tr>
		        <tr>
		            <td>Objet : </td>
		            <td><input type="text" value="{$objet}" name="objet" size="39"></td>
		        </tr>
		        <tr>
		            <td>Message : </td>
		            <td><textarea name="message" cols="34" rows="6">{$message}</textarea></td>
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

    
