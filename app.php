<?php

include "vendor/autoload.php";

$view = new \View\View();

$view->setView("hi everyone! \n Bye everyone!");

$htmlViewAdapter = new \ViewAdapter\HtmlViewAdapter($view);

echo $htmlViewAdapter->getView();