<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
    $nome = "Cecilia";

    echo "Hello world, $nome<br>\nComo estás?";

    $idade = 34;
    // $idade = $idade + 5;
    // $idade += 5;
    // $idade++;
    var_dump(++$idade);
    var_dump($idade);

    $consultaMusicas = [
        ['autor' => 'Taylor', 'musica' => 'Love Story'],
        ['autor' => 'Imagine Dragons', 'musica' => 'Believe'],
        ['autor' => 'Zeca Pagodinho', 'musica' => 'Deixa a vida me levar'],
        ['autor' => 'Metallica', 'musica' => 'Turn the Page'],
        ['autor' => 'Xuxa', 'musica' => 'Ilarie'],
    ];

    echo "<table class='table table-striped table-hover'>";
    for ($i=0; $i < count($consultaMusicas); $i++) { 
        echo '<tr><td>';
        echo $consultaMusicas[$i]["autor"].": ".$consultaMusicas[$i]['musica'];
        echo '</tr></td>';
    }
    echo "</table>";

    foreach ($consultaMusicas as $key => $value) {
        echo print_r($key); echo "<br>";
        echo print_r($value); echo "<br>";
    }

    $i = 0;
    while ($i < count($consultaMusicas)) {
        echo $consultaMusicas[$i]["autor"].": ".$consultaMusicas[$i]['musica'];
        echo "<br>";
        $i++;
    }
?>
    
</body>
</html>