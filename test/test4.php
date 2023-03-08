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
    ],
    [
        'url' => 'https://musk.vn/tin-tuc/mau-nha-cap-4-dep-5x10.html',
        'title' => 'Bài viết của tôi'
    ]
];
echo $lib->generateBreadcrumb($dataHome, $data);