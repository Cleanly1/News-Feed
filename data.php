<?php

declare(strict_types=1);



$authors = [
	['name' => 'Mister author', 'id' => 1337],
	['name' => 'Miss author', 'id' => 69],
	['name' => 'Batman', 'id' => 0110],
	['name' => 'Bruh', 'id' => 21],
	['name' => 'Jultomten', 'id' => 0404],
];


$articles = [
	[
		'id' => 1,
		'title' => 'NMR-anhängare dömda',
		'image' => '/images/nrm.jpeg',
		'content' => file_get_contents(__DIR__ . '/articles/article1.txt'),
		'author' => $authors[4]['name'],
		'date' => 20191025,
		'likes' => 1
	],
	[
		'id' => 2,
		'title' => 'Template',
		'image' => 'img src',
		'content' => file_get_contents(__DIR__ . '/articles/article2.txt'),
		'author' => $authors[3]['name'],
		'date' => 20191024,
		'likes' => 1
	],
	[
		'id' => 3,
		'title' => 'Template',
		'image' => 'img src',
		'content' => file_get_contents(__DIR__ . '/articles/article3.txt'),
		'author' => $authors[0]['name'],
		'date' => 20191028,
		'likes' => 80
	],
	[
		'id' => 4,
		'title' => 'Hackerman strikes again!',
		'image' => '/images/vinkla.png',
		'content' => file_get_contents(__DIR__ . '/articles/article4.txt'),
		'author' => $authors[2]['name'],
		'date' => 20191030,
		'likes' => 99999
	],
	[
		'id' => 5,
		'title' => 'Template',
		'image' => 'img src',
		'content' => file_get_contents(__DIR__ . '/articles/article5.txt'),
		'author' => $authors[3]['name'],
		'date' => 20191025,
		'likes' => 23
	],
	[
		'id' => 6,
		'title' => 'Template',
		'image' => 'img src',
		'content' => file_get_contents(__DIR__ . '/articles/article6.txt'),
		'author' => $authors[1]['name'],
		'date' => 20191023,
		'likes' => 56
	],
	[
		'id' => 7,
		'title' => 'Template',
		'image' => 'img src',
		'content' => file_get_contents(__DIR__ . '/articles/article7.txt'),
		'author' => $authors[0]['name'],
		'date' => 20191023,
		'likes' => 69
	],
	[
		'id' => 8,
		'title' => 'Template',
		'image' => 'img src',
		'content' => file_get_contents(__DIR__ . '/articles/article8.txt'),
		'author' => $authors[1]['name'],
		'date' => 20191023,
		'likes' => 1
	],
	[
		'id' => 9,
		'title' => 'Template',
		'image' => 'img src',
		'content' => file_get_contents(__DIR__ . '/articles/article9.txt'),
		'author' => $authors[2]['name'],
		'date' => 20191029,
		'likes' => 21
	],
	[
		'id' => 10,
		'title' => 'Template',
		'image' => 'img src',
		'content' => file_get_contents(__DIR__ . '/articles/article10.txt'),
		'author' => $authors[4]['name'],
		'date' => 20190823,
		'likes' => 0
	],
];
