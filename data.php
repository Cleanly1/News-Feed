<?php

declare(strict_types=1);



$authors = [
    1337 => ['name' => 'Mister author'],
    69 => ['name' => 'Miss author'],
    0110 =>['name' => 'Batman'],
    21 => ['name' => 'Bruh'],
    0404 => ['name' => 'Jultomten'],
];


$articles = [
    [
        'id' => 1,
        'title' => 'NMR-anhängare dömda',
        'image' => '/images/nrm.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article1.txt'),
        'author' => $authors[0404]['name'],
        'date' => 20191025,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 2,
        'title' => 'M/S Visborg fick tekniska problem',
        'image' => 'images/ms-visborg.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article2.txt'),
        'author' => $authors[21]['name'],
        'date' => 20191024,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 3,
        'title' => 'Timbuktus panik i ”Så mycket bättre”',
        'image' => 'images/timbuktu.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article3.txt'),
        'author' => $authors[1337]['name'],
        'date' => 20191028,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 4,
        'title' => 'Hackerman strikes again!',
        'image' => '/images/vinkla.png',
        'content' => file_get_contents(__DIR__ . '/articles/article4.txt'),
        'author' => $authors[0110]['name'],
        'date' => 20191030,
        'likes' => random_int(0,10000)
    ],
    [
        'id' => 5,
        'title' => 'Slog hål i vägg – döms för skadegörelse',
        'image' => 'images/gotlands-tingsratt.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article5.txt'),
        'author' => $authors[0110]['name'],
        'date' => 20191025,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 6,
        'title' => 'Stort polisbeslag av blöjor',
        'image' => 'images/blojor.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article6.txt'),
        'author' => $authors[69]['name'],
        'date' => 20191023,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 7,
        'title' => '"En filmkväll kan sluta i en urspårad fest"',
        'image' => 'images/dricka.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article7.txt'),
        'author' => $authors[1337]['name'],
        'date' => 20191023,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 8,
        'title' => 'Brand i Uppsala – riskerades sprida till bostadshus',
        'image' => 'images/brand.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article8.txt'),
        'author' => $authors[69]['name'],
        'date' => 20191023,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 9,
        'title' => 'Eric, 24, blev världens rikaste över en natt',
        'image' => 'images/ericTse.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article9.txt'),
        'author' => $authors[0110]['name'],
        'date' => 20191029,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 10,
        'title' => 'Då kommer dom om kalkbrytningen i Klintehamn',
        'image' => 'images/sma.jpeg',
        'content' => file_get_contents(__DIR__ . '/articles/article10.txt'),
        'author' => $authors[0404]['name'],
        'date' => 20190823,
        'likes' => random_int(0,1000)
    ],
    [
        'id' => 404,
        'title' => 'ERROR - 404',
        'image' => 'img src',
        'content' => file_get_contents(__DIR__ . '/articles/404.txt'),
        'author' => $authors[0404]['name'],
        'date' => 11111111,
        'likes' => 0
    ],
];
