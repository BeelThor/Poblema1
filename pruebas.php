<?php
$fecha = strtotime("2002-3-07");

// echo strtotime('10 september 2000');
// echo "<br>";
// echo strtotime($fecha);
// echo "<br>";
// echo (int) 7.3;
// echo "<br>";
// $nacimiento = strtotime($fecha);
// $hoy = strtotime(now);
// echo (($nacimiento - $hoy)*-1);
// echo "<br>";
// $minutos=(($nacimiento - $hoy)*-1)*(1/60);
// $dias = ();

$fecha_nacimiento = "2002-9-7";
$dia_actual = date("Y-m-d");
$edad_diff = date_diff(date_create($fecha_nacimiento), date_create($dia_actual));
echo 'Mi edad es: '.$edad_diff->format('%y');