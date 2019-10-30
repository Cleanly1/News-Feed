<?php

declare(strict_types=1);


/**
* Sorts the articles array by date
* @param  array $array [description]
* @return array        [description]
*/
function sortsArrays(array $articles): array {
    usort($articles, function($arrayItem1, $arrayItem2) {
        return $arrayItem1['date'] <=> $arrayItem2['date'];
    });
    return array_reverse($articles);
}



/**
* Seperates the date int value to to seperate string values
* @param  string $date the date
* @return array
*/
function dateGet(int $date): string {
    return date('d-m-Y', $date);
}

/**
* Gets the individual article from its id
* @param  array $articles article array
* @param  int $id articles id
* @return array
*/
function articleGet(array $articles, int $id):array {
    foreach ($articles as $article) {
        if($article['id'] === $id){
            return $article;
        }
    }
}

/**
* Takes the first 100 characters from an article if the article is over 40 characters long
* @param  string $article article content
* @return string
*/
function shortenString(string $article): string {
    if (strlen($article) > 40){
        return substr($article,0,100).'...';
    } else {
        return $article;
    }
}
