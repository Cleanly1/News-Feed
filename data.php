<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.



$authors = [
	['name' => 'Mister author', 'id' => 1337],
	['name' => 'Miss author', 'id' => 69],
	['name' => 'Batman', 'id' => 0110],
	['name' => 'Bruh', 'id' => 21],
	['name' => 'Jag själv', 'id' => 1999],
];


$posts = [
	[
		'title' => 'Template',
		'content' => 'Content for template',
		'author' => $authors[0]['name'],
		'date' => '2019.10.23',
		'likes' => 12],
	];
