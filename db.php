<?php
require_once 'Models/Movie.php';
require_once 'Models/TvSerie.php';

$productions = [
    new Movie(
        'La dolce vita',
        'Un classico del cinema italiano del 1960...',
        'https://pad.mymovies.it/filmclub/2002/08/069/locandina.jpg',
        ['Marcello Mastroianni', 'Anita Ekberg'],
        ['satirico', 'dramma'],
        1960,
        174
    ),
    new TvSerie(
        'Friends',
        'Una serie televisiva comica che segue...',
        'https://www.friends-tv.org/graphics/season3.jpg',
        ['Jennifer Aniston', 'Courteney Cox'],
        ['commedia', 'romantico'],
        1994,
        2004,
        236,
        10
    ),
];
