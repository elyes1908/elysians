<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/comm.php";
include "../core/commC.php";
if (isset($_GET['ID'])){
	$commC=new CommC();
    $result=$commC->recupererComm($_GET['ID']);
	foreach($result as $row){
		$name=$row['name'];
		$ID=$row['ID'];
		$comment=$row['comment'];
		
?>
<form method="POST">
<table>
<caption>Modifier Commentaire</caption>
<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?PHP echo $name ?>"></td>
</tr>
<tr>
<td>ID</td>
<td><input type="text" name="ID" value="<?PHP echo $ID ?>"></td>
</tr>
<tr>
<td>Comment</td>
<td><input type="text" name="comment" value="<?PHP echo $comment ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ID_ini" value="<?PHP echo $_GET['ID'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$comm=new comm($_POST['name'],$_POST['ID'],$_POST['comment']);
	$commC->modifierComm($comm,$_POST['ID_ini']);
	echo $_POST['ID_ini'];
	header('Location: afficherComm.php');
}
?>
</body>
</HTMl>