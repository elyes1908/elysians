<?PHP
function compute()
{
	
	$num1=$_POST['nbH'];
	$num2=$_POST['tarifH'];
	$res=$num1*$num2;
	return $res;
	
}
echo "oui" . compute();

?>
