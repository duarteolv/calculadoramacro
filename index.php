<?php

$nome = $_REQUEST["nome"];
$idade = $_REQUEST["idade"];
$peso = $_REQUEST["peso"];
$altura = $_REQUEST["altura"];
$sexo = $_REQUEST["sexo"];
$objetivo = $_REQUEST["objetivo"];
$dias = $_REQUEST["dias"];


switch ($sexo){
    case 1:
        {
            $bmr = (10 * $peso) + (6.25 * $altura) - (5 * $idade) + 5;
            echo "$nome <br>";
            echo "Seu BMR é: " .number_format($bmr);
            echo "<br>";
            echo "<br>";

            if($objetivo == 1) {
                $cal = ($bmr * ($dias/10) + 500 + $bmr);
                echo "Calorias necessárias para serem ingeridas: APROX: " .number_format($cal). " cal";
                echo "<br>";

                $carb = ($cal * 0.50) / 4;
                $prot = ($cal * 0.25) / 4;
                $gord = ($cal * 0.25) / 4;


                echo "<br>";
                echo "<br>";
                echo "<br>";

                echo "Carboidratos: " .number_format($carb) ." g";
                echo "<br>";
                echo "Proteínas: ".number_format($prot). " g";
                echo "<br>";
                echo "Gordura: " .number_format($gord) ." g";
                echo "<br>";
           
            } else if ($objetivo == 2){
                
                $cal = ($bmr * ($dias/10) + 500 + $bmr);

                echo "Calorias necessárias para serem ingeridas: APROX: " .number_format($cal). " cal";
                echo "<br>";

                $carb = ($cal * 0.50) / 4;
                $prot = ($cal * 0.25) / 4;
                $gord = ($cal * 0.25) / 9;
                

                echo "<br>";
                echo "<br>";
                echo "<br>";


                echo "Carboidratos: " .number_format($carb) ." g";
                echo "<br>";
                echo "Proteínas: ".number_format($prot). " g";
                echo "<br>";
                echo "Gordura: " .number_format($gord) ." g";
                echo "<br>";
            }
            break;
        }
        
case 2: 
    {
        $bmr = (10 * $peso) + (6.25 * $altura) - (5 * $idade) - 161;
            echo "$nome <br>";
            echo "Seu BMR é: " .$bmr;
            echo "<br>";
            echo "<br>";

            if($objetivo == 1) {
                $cal = ($bmr * ($dias/10) + 500 + $bmr);
                echo "Calorias necessárias para serem ingeridas: APROX: " .number_format($cal). " cal";
                echo "<br>";

                $carb = ($cal * 0.50) / 4;
                $prot = ($cal * 0.25) / 4;
                $gord = ($cal * 0.25) / 9;


                echo "<br>";
                echo "<br>";
                echo "<br>";


                echo "Carboidratos: " .number_format($carb) ." g";
                echo "<br>";
                echo "Proteínas: ".number_format($prot). " g";
                echo "<br>";
                echo "Gordura: " .number_format($gord) ." g";
                echo "<br>";
           
            } else if ($objetivo == 2){
                
                $cal = ($bmr * ($dias/10) + 500 + $bmr);

                echo "Calorias necessárias para serem ingeridas: APROX: " .number_format($cal). " cal";
                echo "<br>";

                $carb = ($cal * 0.50) / 4;
                $prot = ($cal * 0.25) / 4;
                $gord = ($cal * 0.25) / 4;

                echo "<br>";
                echo "<br>";
                echo "<br>";

                echo "Carboidratos: " .number_format($carb) ." g";
                echo "<br>";
                echo "Proteínas: ".number_format($prot). " g";
                echo "<br>";
                echo "Gordura: " .number_format($gord) ." g";
                echo "<br>";
    }
    break;

}

default:
{
    echo "Opção Inválido!";
    break;
}
}

?>