<!DOCTYPE html>
<html class="has-navbar-fixed-top" lang="en-us">

<head>

    <title><?php echo $title = $title ?? 'Portfolio - '; ?>Thedro Neely</title>

    <meta name="description" content="Thedro's Portfolio Website">
    <meta name="keywords" content="Thedro,Neely,Portfolio,Website">
    <meta name="author" content="Thedro Neely">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">


    <?php require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/app/views/snippets/rss.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/app/views/snippets/favicons.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/app/views/snippets/stylesheets.php'; ?>

</head>
