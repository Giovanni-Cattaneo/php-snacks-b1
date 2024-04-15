<?php

$games = [
    [
        "Home" => "Caratese",
        "Visitors" => "Seregno BC",
        "Place" => "Carate",
        "Score_House" => "65",
        "Score_Visitor" => "50",
    ],
    [
        "Home" => "Caratese",
        "Visitors" => "Seregno BC",
        "Place" => "Carate",
        "Score_House" => "65",
        "Score_Visitor" => "50",
    ],
    [
        "Home" => "Caratese",
        "Visitors" => "Seregno BC",
        "Place" => "Carate",
        "Score_House" => "65",
        "Score_Visitor" => "50",
    ],
    [
        "Home" => "Caratese",
        "Visitors" => "Seregno BC",
        "Place" => "Carate",
        "Score_House" => "65",
        "Score_Visitor" => "50",
    ],
];


foreach ($games as $key => $game) {
    echo "<span>" . $game['Home'] . "</span>";
    echo "<span>" . $game['Visitors'] . "</span>";
    echo "<span>" . $game['Place'] . "</span>";
    echo "<span>" . $game['Score_House'] . "-</span>";
    echo "<span>" . $game['Score_Visitor'] . "</span>";
    echo "<br></br>";
}