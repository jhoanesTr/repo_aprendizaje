<?php
# ? Si 9>7 es verdadero (10*7), si es falso (10*5)
## (9>7) ? 10*7 : 10*5;

(9>7) ? $total=10*7 : $total=10*5;
echo $total;

$total2 = (9>7) ? 10*7 : 10*5;
echo $total2;

#####

$camisas= 7;
$precio_camisa= 10;

$total3 = $camisas*$precio_camisa;

$calcular = ($camisas>3) ? $total3-($total3*0.20) : $total3-($total3*0.10);
echo "Total: $total3";
