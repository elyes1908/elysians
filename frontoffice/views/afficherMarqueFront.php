<HTML>

<head>
</head>

<body>
    <meta charset="utf-8">
    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="../css/icon-font.min.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">

   
<?PHP
include "../core/marqueC.php";
$marque1C=new MarqueC();
$listeMarques=$marque1C->afficherMarques();
?>

<div class="crud"  style="padding-left:250px;margin-top:200px">
<table class="table">
<tr>
<td>ID</td>
<td>Nom</td>
</tr>

<?PHP
foreach($listeMarques as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	</tr>
	<?PHP
}
?>
</table>
</div>
</body>
</html>