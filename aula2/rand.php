<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste com números aleatórios</title>
</head>
<body>
    <?php 
        $num = rand(0, 100);
        $par = ($num % 7 == 0);

        setlocale(LC_ALL, "portuguese");
        $dia_da_semana = strftime('%A');
        $dia_da_semana_num = strftime('%u');
        // numero de dias que vamos "pular" no futuro
        $pulao = 100;
        $que_dia_da_semana_cai = $dia_da_semana_num + ($pulao % 7);
        $que_dia_da_semana_cai_str = "";

        switch ($que_dia_da_semana_cai) {
            case 1:
                $que_dia_da_semana_cai_str = 'Segunda-feira';
                break;
            case 2:
                $que_dia_da_semana_cai_str = 'Terça-feira';
                break;
            case 3:
                $que_dia_da_semana_cai_str = 'Quarta-feira';
                break;
            case 4:
                $que_dia_da_semana_cai_str = 'Quinta-feira';
                break;
            case 5:
                $que_dia_da_semana_cai_str = 'Sexta-feira <3';
                break;
            case 6:
                $que_dia_da_semana_cai_str = 'Sábado';
                break;
            case 7:
                $que_dia_da_semana_cai_str = 'Domingo';
                break;
            default:
                $que_dia_da_semana_cai_str = 'ERRO!!';
        }
    ?>
    <h1>Hoje é <?= $dia_da_semana ?></h1>
    <h1>Daqui a <?= $pulao ?> dias, será o dia <?= $que_dia_da_semana_cai_str ?></h1>

    <h1>Número aleatório = <?= $num ?></h1>

    <?php if($par) { ?>
        <h2>Esse número é múltiplo de 7</h2>
    <?php } else { ?>
        <h2>Esse número não é múltiplo de 7</h2>
        <h2>O resto da divisão por 7 é <?= $num % 7 ?></h2>
    <?php } ?>


</body>
</html>