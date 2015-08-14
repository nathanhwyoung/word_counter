<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $new_search = new RepeatCounter;
        $result = $new_search->countRepeats($_GET['search_word'], $_GET['search_text']);
        return $app['twig']->render('results.html.twig', array('result' => $result));
    });

    return $app;
?>
