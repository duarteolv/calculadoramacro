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
            echo "Seu BMR é: " .$bmr;
            echo "<br>";
            echo "<br>";

            if($objetivo == 1) {
                $cal = ($bmr * ($dias/10) + 500 + $bmr);
                echo "Calorias necessárias para serem ingeridas: APROX: " .$cal;
                echo "<br>";

                $carb = ($cal * 0.50) / 4;
                $prot = ($cal * 0.25) / 4;
                $gord = ($cal * 0.25) / 4;


                echo "<br>";
                echo "<br>";
                echo "<br>";

                echo "Carboidratos: " .$carb;
                echo "<br>";
                echo "Proteínas: " .$prot;
                echo "<br>";
                echo "Gordura: " .$gord;
                echo "<br>";
           
            } else if ($objetivo == 2){
                
                $cal = ($bmr * ($dias/10) + 500 + $bmr);

                echo "Calorias necessárias para serem ingeridas: APROX: " .$cal;
                echo "<br>";

                $carb = ($cal * 0.50) / 4;
                $prot = ($cal * 0.25) / 4;
                $gord = ($cal * 0.25) / 9;
                

                echo "<br>";
                echo "<br>";
                echo "<br>";


                echo "Carboidratos: " .$carb;
                echo "<br>";
                echo "Proteínas: " .$prot;
                echo "<br>";
                echo "Gordura: " .$gord;
            }
            break;
        }
        
case 2: 
    {
        $bmr = (10 * $peso) + (6.25 * $altura) - (5 * $idade) - 161;
            echo "Seu BMR é: " .$bmr;
            echo "<br>";
            echo "<br>";

            if($objetivo == 1) {
                $cal = ($bmr * ($dias/10) + 500 + $bmr);
                echo "Calorias necessárias para serem ingeridas: APROX: " .$cal;
                echo "<br>";

                $carb = ($cal * 0.50) / 4;
                $prot = ($cal * 0.25) / 4;
                $gord = ($cal * 0.25) / 9;


                echo "<br>";
                echo "<br>";
                echo "<br>";


                echo "Carboidratos: " .$carb;
                echo "<br>";
                echo "Proteínas: " .$prot;
                echo "<br>";
                echo "Gordura: " .$gord;
                echo "<br>";
           
            } else if ($objetivo == 2){
                
                $cal = ($bmr * ($dias/10) + 500 + $bmr);

                echo "Calorias necessárias para serem ingeridas: APROX: " .$cal;
                echo "<br>";

                $carb = ($cal * 0.50) / 4;
                $prot = ($cal * 0.25) / 4;
                $gord = ($cal * 0.25) / 4;

                echo "<br>";
                echo "<br>";
                echo "<br>";

                echo "Carboidratos: " .$carb;
                echo "<br>";
                echo "Proteínas: " .$prot;
                echo "<br>";
                echo "Gordura: " .$gord;
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