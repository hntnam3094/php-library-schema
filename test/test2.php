<?php

require_once '../vendor/autoload.php';

use Vinaweber\SEOSchema\ServicePostSchema;
$lib = new ServicePostSchema();

$author = (object)[
    'id' => "https://musk.vn/le-thai-hung.html#person",
    'image' => "https://dev.musk.vinaweber.com/images/avtar.jpg",
    'name' => "CEO Lê Thái Hưng",
    'description' => "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
    'url' => "https://musk.vn/le-thai-hung.html",
];

$image = (object)[
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
    "creator" => $lib->buildAuthor($author)
];

$category = (object)[
    "name"=> "final test",
    "url"=> "http://localhost/final-test-huyen-an-phu-an-giang",
    "@id"=> "http://localhost/final-test-huyen-an-phu-an-giang#category",
    "mainEntityOfPage"=> "http://localhost/final-test-huyen-an-phu-an-giang"
];

$logo = (object)[
    "url"=> "http://localhost/img2.jpg",
    "representativeOfPage"=> "true",
    "name"=>  "final test",
    "caption"=> "final test",
    "width"=> 2560,
    "height"=> 1600
];

$aggre = (object)[
    "name" => "final test",
    "description" => "final test",
    "url" => "http://localhost/final-test-huyen-an-phu-an-giang",
    "mainEntityofPage" => "http://localhost/final-test-huyen-an-phu-an-giang",
    "ratingValue" => "88",
    "bestRating" => "100",
    "ratingCount" => "20"
];

$areaServed = (object)[
    "addressLocality" => 123,
    "addressRegion" => 345,
    "postalCode" => 678,
    "streetAddress" => 123132321
];

$realtedTo = (object)[
    "name" => 'RelatedTo',
    "description" => 'RelatedTo',
    "mainEntityOfPage" => "http://localhost./thu-mua-ban-ghe",
    "url" => "http://localhost/thu-mua-ban-ghe"
];

$similar = (object)[
    "name" => 'Similar',
    "description" => 'Similar',
    "mainEntityOfPage" => "http://localhost./thu-mua-ban-ghe",
    "url" => "http://localhost/thu-mua-ban-ghe"
];


$dataImage = [$lib->buildObjectImage($image)];
$dataAuthor = $lib->buildAuthor($author);
$dataCategory = $lib->buildCategory($category);
$dataTermsOfService = [
    "http://localhost/chinh-sach-bao-mat-thong-tin.html",
    "http://localhost/dieu-khoan-su-dung.html"
];
$dataLogo = $lib->buildLogo($logo);
$dataAggregateRating = $lib->buildAggregateRating($aggre);
$dataAreaServed = $lib->buildAreaServed($areaServed);
$dataRelatedTo = [$lib->buildIsRelatedTo($realtedTo)];
$dataSimilar = [$lib->buildIsSimilarTo($similar)];

$dataHoursAvailable = [
    (object)[
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => "http://schema.org/Monday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    (object)[
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => "http://schema.org/Tuesday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    (object)[
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => "http://schema.org/Wednesday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    (object)[
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => "http://schema.org/Thursday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    (object)[
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => "http://schema.org/Friday",
        "opens" => "8:00",
        "closes" => "18:00"
    ],
    (object)[
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => "http://schema.org/Saturday",
        "opens" => "8:00",
        "closes" => "18:00"
    ]
];

$dataPotentialAction = [
    (object)[
        "@type" => "SearchAction",
        "instrument" => ["laptop","pc","tablet","phone"]
    ],
    (object)[
        "@type" => "ViewAction",
        "instrument" => ["laptop","pc","tablet","phone"]
    ],
    (object)[
        "@type" => "BuyAction",
        "instrument" => ["laptop","pc","tablet","phone"]
    ],
    (object)[
        "@type" => "AskAction",
        "instrument" => ["laptop","pc","tablet","phone"]
    ],
    (object)[
        "@type" => "InteractAction",
        "instrument" => ["laptop","pc","tablet","phone"],
        "target" => (object)[
            "@type" => "EntryPoint",
            "actionPlatform" => "https://schema.org/DigitalPlatformEnumeration"
        ]
    ]
];


$lib->setUrl("http://localhost/final-test-huyen-an-phu-an-giang");
$lib->setId("http://localhost/final-test-huyen-an-phu-an-giang#service");
$lib->setName("final test");
$lib->setImage($dataImage);
$lib->setDescription("final test");
$lib->setCategory($dataCategory);
$lib->setServiceType("123 123 123 123 123");
$lib->setTermsOfService($dataTermsOfService);
$lib->setAlternateName(["cho", " meo", " ga", " vit", " voi", " ho", " ran", " su tu", " ha ma"]);
$lib->setLogo($dataLogo);
$lib->setBrand($dataAuthor);
$lib->setAggregateRating($dataAggregateRating);
$lib->setAreaServed($dataAreaServed);
$lib->setBroker($dataAuthor);
$lib->setProvider($dataAuthor);
$lib->setProviderMobility("dynamic");
$lib->setIsSimilarTo($dataRelatedTo);
$lib->setIsRelatedTo($dataSimilar);
$lib->sethoursAvailable();
$lib->setpotentialAction();

echo $lib->buildSchema();