<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

$articles = getArticles($link);

require __DIR__.'/_footer.php';
var_dump(getSession());
echo $twig->render('articles.html.twig', [
    'articles' => $articles,
    'currentPage' => $currentPage,
    'nbPage' => $nbPages,
    'connected' => isConnected(),

]);