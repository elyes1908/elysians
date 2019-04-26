<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/rendezvous.php";
include "../core/rendezvousC.php";
if (isset($_GET['IDrdv'])){
	$rendezvousC=new rendezvousC();
    $result=$rendezvousC->recupererrendezvous($_GET['IDrdv']);
	foreach($result as $row){
		$IDrdv=$row['IDrdv'];
		
		$prenomClient=$row['prenomClient'];
		$nomClient=$row['nomClient'];
		$date=$row['date'];
		$soin=$row['soin'];
	
?>
<form method="POST">
<table>
<caption>Modifier rendezvous</caption>
<tr>
<td>IDrdv</td>
<td><input type="number" name="IDrdv" value="<?PHP echo $IDrdv ?>"></td>
</tr>

<tr>
<td>PrenomClient</td>
<td><input type="text" name="prenomClient" value="<?PHP echo $prenomClient ?>"></td>
</tr>
<tr>
<td>nomClient</td>
<td><input type="text" name="nomClient" value="<?PHP echo $nomClient ?>"></td>
</tr>
<tr>
<td>soin</td>
<td><input type="text" name="soin" value="<?PHP echo $soin ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="IDrdv_ini" value="<?PHP echo $_GET['IDrdv'];?>"></td>
</tr>>
</table>
</form>

<?PHP
	}
}


if (isset($_POST['modifier'])){
	$rendezvous=new rendezvous($_POST['IDrdv'],$_POST['prenomClient'],$_POST['nomClient'],$_POST['soin'],$_POST['date']);
	$rendezvousC->modifierrendezvous($rendezvous,$_POST['IDrdv_ini']);
	echo $_POST['IDrdv_ini'];
	header('Location: afficherrendezvous.php');
}
?>
</body>
</HTMl>