<?php
require_once __DIR__.'/classes/Movie.php';

$cinema = [
    new Movie("Winnie the Pooh","un'emozionante storia piena di Miele!","Cartone animato,per bambini"),
    new Movie("1917","un'emozionante documentario colmo di eventi storici da non perdere!","Documentario,per adulti"),
    new Movie("i due Papi","In un momento di svolta per la Chiesa cattolica, Papa Benedetto XVI stringe una sorprendente amicizia con il futuro Papa Francesco. Ispirato a eventi reali.","Drammatico,per aldulti"),
    new Movie("After Party","un emozionante storia piena di Mojito!","Divertente,per adulti e bambini accompagnati")
];

$cinema[1]-> setAttori("George MacKay: caporale William Schofield, Dean-Charles Chapman: caporale Tom Blake, Mark Strong: capitano Smith, Andrew Scott: tenente Leslie, Richard Madden: tenente Joseph Blake, Claire Duburcq: Lauri, Colin Firth: generale Erinmore, Benedict Cumberbatch : colonnello Mackenzie");
$cinema[0]-> anno=1926;
$cinema[2]-> anno=2019;
$cinema[3]-> anno=2020;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        foreach($cinema as $movie){
            echo $movie->getFilm();
        }
        ?>
    </ul>
    
</body>
</html>