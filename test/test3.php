<?php

require_once '../vendor/autoload.php';

use Vinaweber\SEOSchema\BreadcrumbNewsSchema;
$lib = new BreadcrumbNewsSchema();
$dataHome = [
    'url' => 'https://jsonformatter.org',
    'title' => 'Trang chủ'
];
$data = [
    [
        'url' => 'http://dev.musk.com/tin-tuc',
        'title' => 'Tin tức'
    ],
    [
        'url' => 'http://dev.musk.com/tin-tuc/cong-nghe',
        'title' => 'Công nghệ'
    ],
    [
        'url' => 'http://dev.musk.com/tin-tuc/dien-thoai',
        'title' => 'Điện thoại'
    ],
    [
        'url' => 'http://dev.musk.com/tin-tuc/review-dien-thoai',
        'title' => 'Review điện thoại'
    ]
];
echo $lib->generateBreadcrumbNews($dataHome, $data);