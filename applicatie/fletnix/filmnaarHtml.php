<?php


$films =
[
  [
    'title' => 'A Wrinkle In Time',
    'year' => 2018,
    'director' => 'Ava DuVernay',
    'stars' => ['Storm Reid', 'Oprah Winfrey'],
    'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMjMxNjQ5MTI3MV5BMl5BanBnXkFtZTgwMjQ2MTAyNDM@._V1_UX182_CR0,0,182,268_AL_.jpg'
  ],
  [
    'title' => 'Black Panther',
    'year' => 2018,
    'director' => 'Ryan Coogler',
    'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
    'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
  ],
  [
    'title' => 'Tenet',
    'year' => 2020,
    'director' => 'Christopher Nolan',
    'stars' => ['John David Washington', 'Elizabeth Decki'],
    'imageURL' => 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_UX182_CR0,0,182,268_AL_.jpg'
  ],
  [
    'title' => 'Us',
    'year' => 2018,
    'director' => 'Jordan Peele',
    'stars' => ['Lupita Nyong\'o', 'Winston Duke'],
    'imageURL' => 'https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg'
  ]
];


function enkeleFilmNaarHTML($films) {
    $html = "<table>";
    
    $html .= "<tr>";
    $html .= "<td><img src='${films['imageURL']}'></td>";
    $html .= "</tr>";

    $html .= "<tr>";
    $html .= "<td>${films['title']}</td>";
    $html .= "<td>${films['year']}</td>";
    $html .= "<td>${films['director']}</td>";

    $html .= "<td>";
    for ($i = 0; $i < sizeof($films['stars']); $i++) {
        $html .= $films['stars'][$i] . " ";
    }
    $html .= "</td>";
    $html .= "</tr></table>";
    return $html;
}


function filmsNaarHtml($films){
    $html = "";
    foreach($films as $film){
        
        $html .= enkeleFilmNaarHTML($film);
    }
    return $html;
}

    echo filmsNaarHtml($films);

  
  

    $title = "Back to the Future";
    $jaar = 1985;
    $regiseur = "Robert Zemeckis";
    $sterren = ["Michael J Fox", "Christopher Loyd"];
    $urlplaatje ="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pathe-thuis.nl%2Ffilm%2F12231%2Fback-to-the-future&psig=AOvVaw3UyhT7Zyt4rejVE2yONeZg&ust=1639235171024000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJj50YLB2fQCFQAAAAAdAAAAABAD";

    function maakFilm($title,  $jaar, $regiseur, $sterren, $urlplaatje){
        $film ['titel']= $title;
        $film['jaar'] = $jaar;
        $film['regiseur'] = $regiseur;
        $film['sterren'] =$sterren;
        $film['urlplaatje']=$urlplaatje;
        return $film;
    }

    $films[] = maakFilm($titel, $jaar, $regiseur, $sterren, $urlplaatje);

    echo filmsNaarHtml($films);

    var_dump($films);

?>
