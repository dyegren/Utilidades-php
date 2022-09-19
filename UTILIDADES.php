<?php

/*$fechaInicio=strtotime("01-09-2022");
$fechaFin=strtotime("16-09-2022");
for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
    echo date("d-m-Y", $i)."<br>";
}

echo "<br>"."Proceso concluido"."<br>";

//RECORRER FECHAS SALTANDO DOMINGO
$starDate = new DateTime('2022-09-01');
$endDate = new DateTime('2022-09-16');
while( $starDate <= $endDate){
	
	echo $starDate->format('Y-m-d (D)')."<br/>";
     $starDate->modify("+1 days");
	
     if(/*$starDate->format('l')== 'Saturday' || */$starDate->format('l')== 'Sunday'){
                    //echo $starDate->format('Y-m-d (D)')."<br/>";
                   $starDate->modify("+1 days");
     }
     
}

echo "<br>"."Proceso concluido 2"."<br>";