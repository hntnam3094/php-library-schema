<?php

require_once '../vendor/autoload.php';

use Vinaweber\SEOSchema\BlogPostingSchema;

$lib = new BlogPostingSchema();

$author = (object)[
    'id' => "https://musk.vn/le-thai-hung.html#person",
    'image' => "https://dev.musk.vinaweber.com/images/avtar.jpg",
    'name' => "CEO Lê Thái Hưng",
    'description' => "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
    'url' => "https://musk.vn/le-thai-hung.html",
];

$image = (object)[
    'license' => "https://musk.vn/dieu-khoan-su-dung.html",
    'acquireLicensePage' => "https://musk.vn/tin-tuc/nha-cap-4-80m2.html",
    "creditText" => "Musk.vn",
    "copyrightNotice" => "Musk.vn",
    "alternativeHeadline" => "/34c402b52291fbcfa280.jpg",
    'caption' => "Mẫu nh&agrave; cấp 4 đẹp 80m2 với kiểu m&aacute;i lệch",
    'url' => "https://musk.vn/uploads/files/Blog/nha-cap-4/nha-cap-4-80m2/mau-nha-cap-4-dep-80m2-voi-kieu-mai-lech-thiet-ke-kinh-cuong-luc.jpg",
    'width' => 1200,
    'height' => 674,
    'creator' => $lib->buildAuthor($author)
];

$mentions = (object)[
    "@type" => "Thing",
    "url" => 'https://musk.vn/uploads/files/Blog/nha-cap-4/nha-cap-4-80m2/mau-nha-cap-4-dep-80m2',
    "mainEntityOfPage" => '123',
    "name" => '123456'
];

$dataImage = [$lib->buildObjectImage($image)];
$dataAuthor = $lib->buildAuthor($author);
$dataMentions = [$lib->buildMentions($mentions)];

$lib->setId("http://dev.musk.com/tin-tuc/nam-test-blog-postiing.html#blog");
$lib->setHeadline("Nam Test Blog Postiing 123");
$lib->setAlternativeHeadline("Nam Test Blog Postiing 123");
$lib->setKeywords(["cho", " meo", " ga", " vit", " voi", " ho", " ran", " su tu", " ha ma"]);
$lib->setDescription('Thanh Nam hehe');
$lib->setMainEntityOfPage("http://dev.musk.com/tin-tuc/nam-test-blog-postiing.html");
$lib->setArticleSection("Bàn ghế");
$lib->setName("Nam Test Blog Postiing 123");
$lib->setArticleBody("\r\n\r\nCaption\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n 123\r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n 123\r\n \r\n\t\t\t\t\r\n\t\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n 345654654645\r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n 345654654645\r\n \r\n\t\t\t\t\r\n\t\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\t\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\t\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\t\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\t\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\t\t\t\t\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\t\t\t\t\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\r\n\t\t\t\t\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\r\n \r\n \r\n\t\t\t\t\r\n\t\t\t\t\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nTest link 1\r\n\r\nTest link 2\r\n\r\nTest link 3\r\n\r\nTest link 4\r\n\r\nTest link 5\r\n\r\ntest link 6\r\n");
$lib->setMentions($dataMentions);
$lib->setImage($dataImage);
$lib->setCreator($dataAuthor);
$lib->setPublisher($dataAuthor);
$lib->setAuthor($dataAuthor);
$lib->setCopyrightHolder($dataAuthor);
$lib->setDatePublished("2023-02-07 23:05:15");
$lib->setDateModified("2023-02-26 21:38:50");
$lib->setWordCount(123);
$lib->setInLanguage("vi-VN");
$lib->setSchemaVersion("15.0");
$lib->setAccessMode(["textual", "visual"]);

echo $lib->buildSchema();