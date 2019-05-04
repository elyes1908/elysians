<?php



if(isset($_POST['mailform']))

$header="MIME-Version: 1.0\r\n";
$header.='From:"CoeurdeMarie.com"<abdessalem.smirani@esprit.tn>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src="https://lh3.googleusercontent.com/cYcUCVkSIVFYfKxBITdBnQyarJbigadimSlRVzxwEvpmVohITOwqftia_2DHg-7p88JMx-bS=w1080-h608-p-no-v0"/>
			<br />
			Chére client 
			Nous vous informe q\'un nouveau produit et disponible dans notre centre 
			Pour plus d\'info visiter notre site au contacter nous Par télèphone
			<br />
			
		</div>
	</body>
</html>
';


//$conn = new PDO('mysql:host=localhost;dbname=crudproduit', 'root', '');
//$maill = $conn->query("SELECT user_email From users");

//$maill=("SELECT user_email From users");
//$db=Database::connexion();
//for($i=0;$i++;$i<$users.length){
//$m=$users['user_email'];
//$m='abdessalem.smirani@esprit.tn';
//echo "test";
mysql_connect("localhost","root","") or die("Impossible de se connecter");;
mysql_select_db("crudproduit") or die("pas possible de trouver la base");

$result = mysql_query("SELECT user_email FROM users");
$nblignes = mysql_numrows($result);

for($i=0;$i<$nblignes;$i=$i+1){
 $m =  mysql_result($result,$i,"user_email");
//echo "bonjourr";
mail($m, "Salut tout le monde !", $message, $header);}
header('location:afficherProduit.php')
?>
