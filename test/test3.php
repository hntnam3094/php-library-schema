<?php

require_once '../vendor/autoload.php';

use Vinaweber\SEOSchema\BreadcrumbNewsSchema;
$breadcrumb = new BreadcrumbNewsSchema();
$breadcrumb->setHomeUrl('https://example.com');
$breadcrumb->setHomeTitle('Home Page');
$breadcrumb->setBreadcrumbData(array(
    array(
        'url' => 'https://example.com/news',
        'title' => 'News'
    ),
    array(
        'url' => 'https://example.com/news/tech',
        'title' => 'Technology'
    ),
    array(
        'url' => 'https://example.com/news/tech/phone',
        'title' => 'Phone'
    )
));
echo $breadcrumb->buildSchema();