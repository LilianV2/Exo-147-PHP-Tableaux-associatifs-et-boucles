<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici

foreach ($videotheque as $movies) {
    foreach ($movies as $keys => $info){
        if (is_array($info)){
            echo "acteurs : ";
            foreach ($info as $actors){
                echo $actors . " ";
            }
            echo "<br><br>";
        }else{
            echo $keys . " : " . $info . "<br>";
        }
    }
}


//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
$videotheque = array(
    array(
        'nom' => 'Interstellar',
        'date' => 2014,
        'realisateur' => 'Christopher Nolan',
        'acteurs' => array(
            'Matthew McConaughey', 'John Lithgow', 'Anne Hathaway', 'Jessica Chastain',
        ),
    ),
    array(
        'nom' => 'Shutter Island',
        'date' => 2010,
        'realisateur' => 'Martin Scorsese',
        'acteurs' => array(
            'Leonardo DiCaprio', 'Mark Ruffalo', 'Ben Kingsley',
        ),
    ),
    array(
        'nom' => 'Mommy',
        'date' => 2014,
        'realisateur' => 'Xavier Dolan',
        'acteurs' => array(
            'Anne Dorval', 'Antoine Olivier Pilon', 'Suzanne Clément',
        ),
    ),
);

foreach ($videotheque as $movies) {
    foreach ($movies as $keys => $info){
        if (is_array($info)){
            echo "acteurs : ";
            foreach ($info as $actors){
                echo $actors . " ";
            }
            echo "<br><br>";
        }else{
            echo $keys . " : " . $info . "<br>";
        }
    }
}
