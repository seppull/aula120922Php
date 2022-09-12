<?php

    $salario = 1000.00;             
    $ir = 0;
    $inss= 0;
    $desc= 0;
    $insento = "Insento";
    $grupo;



    //$inss = $salario * 0.075;
    //$inss = $salario * 0.09;
    //$inss = $salario * 0.12;
   // $inss = $salario * 0.14;


   // $ir = $salario *  0.075;
    //$ir = $salario *  0.15;
   // $ir = $salario *  0.225;
   // $ir = $salario *  0.275;

   // 

    if ($salario < 1212) {
       $inss = $salario * 0.075;
       $grupo = "A";
    }
    else if ($salario > 1212.00 && $salario < 2427.35){
        $inss = $salario * 0.09;
        $grupo = "B";
    }
    else if ($salario > 2427.36 && $salario < 3641.03){
        $inss = $salario * 0.12;
        $grupo = "C";
    }
    else if($salario > 3641.04 && $salario < 7087.22){
        $inss = $salario * 0.14;
        $grupo = "D";
    }

    else if ($salario < 1903.98) {
       $ir = "insento";
    }
    else if ($salario > 1903.99 && $salario < 2826.65){
        $ir = $salario * 0.075;

    }   
    else if ($salario > 2826.66 && $salario < 3751.05){
        $ir = $salario * 0.15;

    }
    else if ($salario > 3751.06 && $salario < 4664.68){
        $ir = $salario * 0.225;

    }
    else {
        $ir = $salario * 0.275;
    }
    $desc = $ir + $inss;
    $liqui = $salario - $desc;

    echo "Salário bruto: R$ ".$salario;
    echo "<br><br>Desconto de INSS: R$ ".$inss;
    echo "<br><br>Desconto de IR: R$ ".$ir;
    echo "<br><br>Grupo ".$grupo;
    echo "<br><br>Desconto de: R$ ".$desc;
    echo "<br><br>Salário liquido: R$ ".$liqui;

?>