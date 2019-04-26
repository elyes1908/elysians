<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php
											if(isset($_POST['submit'])){
											$to='siwarbarhoumi4@gmail.com';
											$sujet='test mail en local';
											$texte=$_POST['texte'];
											$header='From :  test@gmail.com';
											mail($to,$sujet,$texte,$header);
									     	}

									     	//header('Location: mailing.php');

												?>
	<form action="" method="_POST">
		<textarea name="texte" rows="5" cols="30" >		
		</textarea> <br>
		<input type="submit" name="submit" value="envoyer" >
		
	</form>												

</body>
</html>