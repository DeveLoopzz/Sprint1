<?php

require 'resource.php';

$resource1 = new Resource("PHP avanzado", Theme::PHP , "https://stitcher.io/blog/php-enums", Content::WEB);

var_dump($resource1->getTheme()->value);
var_dump($resource1->getContent()->value);
var_dump($resource1->getTheme());