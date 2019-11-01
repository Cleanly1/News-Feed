# Plain News
This is a repository for the Plain News assignment

# Built with
* PHP
* HTML
* CSS
* Javascript

# How to install
1. Clone the repository 
```
$ git clone https://github.com/Cleanly1/Plain-News.git
```
2. Navigate to the folder where you cloned the repository via the terminal
3. Start a local server 
```
php -S localhost:8000
```
4. Open up your favorite browser and enter localhost:8000 in the url
5. Enjoy!

# Testers
* [Viktor Sjöblom](https://github.com/ViktorSjoblom)
* [Jesper Lundqvist](https://github.com/jesperlndqvst)

# Code Reviews

1. shortenContent function - Perhaps change the limits of this function as it would fail if there was an article between 40 and 100 characters in length. If you have some time today, perhaps you could change this function so that it cuts after a word and doesn't chop words in half. Perhaps also include a reason in the comment description for why you're using this function. Is it so that you only see a preview of the article? FYI I didn't know that I could click into the articles until sometime.
2. article.php indentation - your large if statement at the top should be indented backwards so that the if and else are in line.
3. html tags in head.php - in head.php one of your link html tags are not indented to the correct alignment with the others. In the same file, the end of the header tag should finish in line with the header's opening tag. You'll see they're not lining up because there is a </li> on the wrong line.
4. Footer indentation - make sure everything is indented correctly, especially the require footer php lines. Think about putting the article ending tag inside the artcle.php and index.php files instead of the footer for ease of reading. I understand, though, that it's more efficient as you've done it, so I'm not entirely sure.
5. In future I think we should begin with the mobile version and use media queries to work outwards rather than inwards ...but I could be wrong?


# License
This project is licensed under the MIT License - see the LICENSE file for details

YRGO 2019
