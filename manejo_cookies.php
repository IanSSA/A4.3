<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo cookies</title>
    <?php
        $periodicos = [
        "elpais" => "https://elpais.com",
        "elmundo" => "https://elmundo.es",
        "abc" => "https://abc.es",
        "lavanguardia" => "https://lavanguardia.com",
        "elperiodico" => "https://elperiodico.com"
        ];
        echo "<div><h1>Enlace a Periódicos</h1>";

        function calcular_clicks($key){
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
                $num_veces = htmlspecialchars($_COOKIE[$key]);
                setcookie($key, $num_veces + 1, time()+180, '/');
        }
        function no(){
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        }

        foreach ($periodicos as $key => $periodico){
            if (!isset($_COOKIE[$key])) {
                setcookie($key, 0, time()+180);
            } 
            $num_veces = htmlspecialchars($_COOKIE[$key]);
            echo "<a href='" . $periodico . "?periodico=" . $num_veces . "')'>" . $key . "</a> -Accesos: ". $num_veces . " <br>";
        }
        echo "</div>";
    ?>
</head>
<body>
    <a href="" ></a>
    <a href='' onclick='no()'>siii</a><br>
    <label for="" onclick='no()'>aaaa</label>
</body>
</html>