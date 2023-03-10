<?php

require_once '../vendor/autoload.php';

use Vinaweber\SEOSchema\ServicePostSchema;
$lib = new ServicePostSchema();

$author = [
    'id' => "https://musk.vn/le-thai-hung.html#person",
    'image' => "https://dev.musk.vinaweber.com/images/avtar.jpg",
    'name' => "CEO Lê Thái Hưng",
    'description' => "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
    'url' => "https://musk.vn/le-thai-hung.html",
];

$image = [
    [
        'name' => "/img2.jpg",
        "license" => "http://localhost/dieu-khoan-su-dung.html",
        "acquireLicensePage" => "http://localhost/final-test-huyen-an-phu-an-giang",
        "creditText" => "Musk.vn",
        "copyrightNotice" => "Musk.vn",
        "alternativeHeadline" => "/img2.jpg",
        "thumbnailUrl" =>  "http://localhosthttp://localhost/uploads/files/img2.jpg",
        "caption" => "123",
        "url" => "http://localhosthttp://localhost/uploads/files/img2.jpg",
        "width" => 200,
        "height" => 500,
        "creator" => $author
    ]
];

$category = [
    "name"=> "final test",
    "url"=> "http://localhost/final-test-huyen-an-phu-an-giang",
    "id"=> "http://localhost/final-test-huyen-an-phu-an-giang#category",
    "mainEntityOfPage"=> "http://localhost/final-test-huyen-an-phu-an-giang"
];

$logo = [
    "url"=> "http://localhost/img2.jpg",
    "representativeOfPage"=> "true",
    "name"=>  "final test",
    "caption"=> "final test",
    "width"=> 2560,
    "height"=> 1600
];

$aggre = [
    "name" => "final test",
    "description" => "final test",
    "url" => "http://localhost/final-test-huyen-an-phu-an-giang",
    "mainEntityofPage" => "http://localhost/final-test-huyen-an-phu-an-giang",
    "ratingValue" => "88",
    "bestRating" => "100",
    "ratingCount" => "20"
];

$areaServed = [
    "addressLocality" => 123,
    "addressRegion" => 345,
    "postalCode" => 678,
    "streetAddress" => 123132321
];

$realted = [
    [
        "name" => 'RelatedTo12',
        "description" => 'RelatedTo343',
        "mainEntityOfPage" => "http://localhost./thu-mua-ban-ghe",
        "url" => "http://localhost/thu-mua-ban-ghe"
    ]
];

$similar = [
    [
        "name" => 'Similar5643',
        "description" => 'Similar32131',
        "mainEntityOfPage" => "http://localhost./thu-mua-ban-ghe",
        "url" => "http://localhost/thu-mua-ban-ghe"
    ]
];

$dataTermsOfService = [
    "http://localhost/chinh-sach-bao-mat-thong-tin.html",
    "http://localhost/dieu-khoan-su-dung.html"
];


$dataHoursAvailable = [
   [
        "dayOfWeek" => "http://schema.org/Monday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    [
        "dayOfWeek" => "http://schema.org/Tuesday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    [
        "dayOfWeek" => "http://schema.org/Wednesday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    [
        "dayOfWeek" => "http://schema.org/Thursday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    [
        "dayOfWeek" => "http://schema.org/Friday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    [
        "dayOfWeek" => "http://schema.org/Saturday",
        "opens" => "8:00",
        "closes" => "18:00"
    ]
];

$dataPotentialAction = [
    [
        "type" => "SearchAction",
        "instrument" => ["laptop","pc","tablet","phone"]
    ],
    [
        "type" => "ViewAction",
        "instrument" => ["laptop","pc","tablet","phone"]
    ],
    [
        "type" => "BuyAction",
        "instrument" => ["laptop","pc","tablet","phone"]
    ],
    [
        "type" => "AskAction",
        "instrument" => ["laptop","pc","tablet","phone"]
    ],
    [
        "type" => "InteractAction",
        "instrument" => ["laptop","pc","tablet","phone"],
        "target" => [
            "type" => "EntryPoint",
            "actionPlatform" => "https://schema.org/DigitalPlatformEnumeration"
        ]
    ]
];


$lib->setUrl("http://localhost/final-test-huyen-an-phu-an-giang");
$lib->setId("http://localhost/final-test-huyen-an-phu-an-giang#service");
$lib->setName("final test");
$lib->setImage($image);
$lib->setDescription("final test");
$lib->setCategory($category);
$lib->setServiceType("123 123 123 123 123");
$lib->setTermsOfService($dataTermsOfService);
$lib->setAlternateName(["cho", " meo", " ga", " vit", " voi", " ho", " ran", " su tu", " ha ma"]);
$lib->setLogo($logo);
$lib->setBrand($author);
$lib->setAggregateRating($aggre);
$lib->setAreaServed($areaServed);
$lib->setBroker($author);
$lib->setProvider($author);
$lib->setProviderMobility("dynamic");
$lib->setIsSimilarTo($similar);
$lib->setIsRelatedTo($realted);
$lib->sethoursAvailable($dataHoursAvailable);
$lib->setpotentialAction($dataPotentialAction);

echo $lib->buildSchema();