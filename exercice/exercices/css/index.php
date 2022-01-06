<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Mon site en local</title>
  <meta name="description" content="Mon site en local">
  <meta name="author" content="Laetitia Verriere">

  <meta property="og:title" content="Mon super site en local">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://urldemonsite.com">
  <meta property="og:description" content="Ce site est mon premier, soyez indulgent !">
  <!--meta property="og:image" content="image.png"-->

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <?php
//     echo '<pre>';
//     function ajouterDix($nombre)
//     {
//         $nombre += 10;
//         return $nombre;
//     }
//     var_dump(ajouterDix(25));

//     function somme($nombre1, $nombre2)
//     {
//         $somme = $nombre1 + $nombre2;
//         return $somme;
//     }

//     var_dump(somme(54,18));
// // concatener une phrase
//     function direBonjour($nom){
//         return "Bonjour $nom  comment vas tu? ";
//     }

// echo direBonjour("Maurice");

// function direHello($nom, $balise = div)
// {
//     return "<$balise>Bonjour $nom comment vas-tu? </$balise>";
// }
// echo direHello("Tom", "h1");

    function debugger($variable)
    {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';

    }
// $array = [1,2,4];
// // debugger($array);
// debugger(direHello("Joe", "H1"));

// $maListe = [1,2,3,5,8];
// print_r($maListe);
// debugger($maListe);

// function debugPlus($variable)
// {
//     echo '<pre>';
//     $typeVariable = gettype($variable);
//     if ( $typeVariable === "array")
//     {
//         print_r($variable);
//     }
//     else if( $typeVariable === "string")
//     {
//         print($variable);
//     }
//     else
//     {
//         var_dump($variable);
//     }
//     echo '</pre>';
// };

// debugPlus($array);
// debugPlus("joe");

// function debugPlusPlus($variable)
// {
   

//    switch(gettype($variable))
//    {
//        case "array":
//             echo '<pre>';
//             print_r($variable);
//             echo '</pre>';
//         case "string":
//             echo '<pre>';
//             print($variable);
//             echo '</pre>';
//         default :
//             echo '<pre>';
//             var_dump($variable);
//             echo '</pre>';
//         }
  
// };

// debugPlusPlus($maListe);
// debugPlusPlus("joe et paul");
    $liste_eleves = [
        'Alexandre',
        'Noe', 
        'David',
        'Lila',
        'Rudy',
        'Mike',
        'Celine',
        'Celine',
        'Laetitia',
        'Samia',
        'Mahjoub',
    ];

    // foreach ($liste_eleves as $key => $value) {
    //     echo direHello($value, 'h1');
    //     };


        // function direHello($nom, $message, $messageComplementaire, $balise = div)
        // {
        //     return "<$balise>$message  $nom  $messageComplementaire </$balise>";
        // }

        function dire($nom, $message,  $balise = div)
        {
            return "<$balise> $nom dit : $message  </$balise>";
        }
        function presenter($liste_eleves, $balise, $message)
        {
            foreach ($liste_eleves as $key => $value) {
                echo dire($value,$message, $balise);
                }
        };
        // function presenter($liste_eleves, $balise)
        // {
        //     $message1 = "Bienvenu dans notre classe  ! ";
        //     $message2 = " comment vas_tu?"; 
        //     foreach ($liste_eleves as $key => $value) {
        //         echo direHello($value,$message1, $message2, $balise);
        //         }
        // };
    $message1 = "Bienvenu dans notre classe  ! ";
    presenter($liste_eleves, "h1", $message1 );
    //code php qui s'execute
    ?> 
    <script src="js/scripts.js"></script>
</body>
</html>