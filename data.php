<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.



$authors = [
	['name' => 'Mister author', 'id' => 1337],
	['name' => 'Miss author', 'id' => 69],
	['name' => 'Batman', 'id' => 0110],
	['name' => 'Bruh', 'id' => 21],
	['name' => 'Jultomten', 'id' => 0404],
];


$articles = [
	[
		'title' => 'Template',
		'image' => 'img src',
		'content' => 'Content for template',
		'author' => $authors[0]['name'],
		'date' => 20191028,
		'likes' => 80
	],
	[
		'title' => 'Hackerman strikes again!',
		'image' => '/images/avatar.png',
		'content' => 'The infamous hacker vinkla have done another IT-heist',
		'author' => $authors[2]['name'],
		'date' => 20191023,
		'likes' => 99999
	],
	[
		'title' => 'Template',
		'image' => 'img src',
		'content' => 'Content for template',
		'author' => $authors[3]['name'],
		'date' => 20191025,
		'likes' => 23
	],
	[
		'title' => 'Template',
		'image' => 'img src',
		'content' => 'Content for template',
		'author' => $authors[1]['name'],
		'date' => 20191023,
		'likes' => 1
	],
];
