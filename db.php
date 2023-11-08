<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TvSerie.php';

$productions = [
    $La_dolce_vita = new Movie(
        'La dolce vita',
        'Un classico del cinema italiano del 1960, esplora la vita mondana e vuota  di un giornalista romano in mezzo alla celebrità, al lusso e alla disillusione.',
        'https://pad.mymovies.it/filmclub/2002/08/069/locandina.jpg',
        ['Marcello Mastroianni', 'Anita Ekberg'],
        ['satirico', 'dramma'],
        1960,
        174
    ),
    new TvSerie(
        'Friends',
        'Una serie televisiva comica che segue le vite intrecciate di sei amici mentre navigano attraverso la vita e amore a New York.',
        'https://static.posters.cz/image/1300/poster/friends-characters-i86753.jpg',
        ['Jennifer Aniston', 'Courteney Cox'],
        ['commedia', 'romantico'],
        1994,
        2004,
        236,
        10
    ),

    new Movie(
        'Django_Unchained',
        'Un avvincente western che segue la vendetta di uno schiavo liberato e di un cacciatore di taglie nel profondo sud degli Stati Uniti.',
        'https://m.media-amazon.com/images/I/61tTz-WhbdL._AC_UF1000,1000_QL80_.jpg',
        ['Jamie Foxx', 'Christoph Waltz'],
        ['western', 'dramma'],
        2012 ,
        148 
    ),
    new TvSerie(
        'Fear the Walking Dead',
        'Una serie televisiva che racconta gli eventi iniziali del apocalisse zombie a Los Angeles, seguendo una famiglia mentre lotta per sopravvivere in un mondo dove il pericolo è ovunque.',
        'https://m.media-amazon.com/images/I/71LexM71Q+S._AC_UF894,1000_QL80_.jpg',
        ['Alycia Debnam-Carey', 'Cliff Curtis'],
        ['commedia', 'romantico'],
        2015,
        2023,
        110,
        8
    ),

    new Movie(
        'Papillon',
        'Un coinvolgente film drammatico che narra la storia di un uomo ingiustamente condannato per omicidio e del suo tentativo di fuga da un penitenziario di massima sicurezza.',
        'https://www.themoviedb.org/t/p/original/uL2pxNvY0cHhriEw3Hl3iuhCrtG.jpg',
        ['Steve McQueen', 'Dustin Hoffman'],
        ['avventura', 'dramma'],
        1973,
        148 
    ),
    new TvSerie(
        'Lost',
        'Una serie televisiva comica che segue le vite di un gruppo di sopravvissuti a un disastro aereo su un isola misteriosa attraverso un intreccio avvincente e personaggi complessi.',
        'https://i.ebayimg.com/images/g/EXUAAOSwhhpiG4P2/s-l1600.jpg',
        ['Naveen Andrews', 'Emilie de Ravin'],
        ['avventura', 'dramma'],
        2004,
        2010,
        114,
        6
    ),
];
