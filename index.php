<?php
require_once __DIR__.'/classes/Movie.php';

$cinema = [
    new Movie("Winnie the Pooh","un'emozionante storia piena di Miele!","Cartone animato,per bambini"),
    new Movie("1917","un'emozionante documentario colmo di eventi storici da non perdere!","Documentario,per adulti"),
    new Movie("i due Papi","In un momento di svolta per la Chiesa cattolica, Papa Benedetto XVI stringe una sorprendente amicizia con il futuro Papa Francesco. Ispirato a eventi reali.","Drammatico,per aldulti"),
    new Movie("After Party","un emozionante storia piena di Mojito!","Divertente,per adulti e bambini accompagnati"),
    new Movie("Mamma ho perso l'Aereo","un film visto e rivisto, un classico che non tradisce mai","Drammatico,comico,per aldulti e bambini"),
    new Movie("Titanic","un emozionante storia piena di colpi di scena, basato su una storia vera","Drammatico,per adulti e bambini accompagnati")
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <div class="row flex-wrap">
            <?php
                foreach($cinema as $movie){
                    echo $movie->getFilm(); 
                }
            ?>
        </div>
    </div>   
</body>
</html>