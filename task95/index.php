<?php 
//#1 через  радиусы r1 r2
$r1 = 15;
print("r1 = ". $r1.'<br>');
$r2 = 20;
print("r2 = ". $r2.'<br>');
$R = ($r1*2+$r2*2)/2;
print("R большого круга. R = ". $R.'<br>');
$S = M_PI*pow($R,2);
print('Площадь большого круга. S = '.$S.'<br>');
$S_1 = $S - (M_PI*pow($r1,2)+M_PI*pow($r2,2)); //от площади большого круга отнимаем площадь двух меньших кружков
print('1. Площадь серой зоны через r1 и r2: S_1 = '.$S_1.'<br><br>');
//главная формула
$S_1_1 = 2*M_PI*$r1*$r2;
print('Площадь через основную формулу 2*pi*r1*r2: S_1_1 = '.$S_1_1.'<br><br>');

//#2
//
//главная формула t для проверки.
$t = sqrt(16*$r1*$r2);
print('Вычислим t = sqrt(16*r1*r2) = '.$t.'<br><br>');

//проверка
$S_1_2 = 2*M_PI*(pow($t,2)/16);  //или pi*(t^2)/8;
print('Площадь серой зоны через 2*pi*t^2/16: S_1_2 = '.$S_1_2.'<br>');
 ?>