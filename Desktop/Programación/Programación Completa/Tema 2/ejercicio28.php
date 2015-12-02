<?php
$num=17845600;//8 cifras,son las que tiene el número
$cifras=7;//son las cifras que queremos que tenga
$cont=0;
while ($num>0){
	$num=(int)($num/10);
	$num=(int)$num;
	$cont++;
}
if($cifras !=$cont){
	echo "El numero es incorrecto de acuerdo al numero de digitos deseados<br>";
}else{
	echo "El numero es correcto de acuerdo al numero de digitos deseados";
}
?>