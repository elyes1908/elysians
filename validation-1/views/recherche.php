<?php 

include "../config.php"

$resultat=mysql_query("select * from date where taux like "%" .$_post["taux"]. "%"  ORDER BY taux" ,$connexion)






?>