<?php

require_once '../vendor/autoload.php';

use Vinaweber\SEOSchema\ServicePostSchema;
$lib = new ServicePostSchema();

$dataAuthor = (object)[
    'id' => "https://musk.vn/le-thai-hung.html#person",
    'authorImage' => "https://dev.musk.vinaweber.com/images/avtar.jpg",
    'authorName' => "CEO Lê Thái Hưng",
    'authorDescription' => "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
    'authorUrl' => "https://musk.vn/le-thai-hung.html",
];

$dataImage = (object)[
    'termOfUse' => "https://musk.vn/dieu-khoan-su-dung.html",
    'url' => "https://musk.vn/tin-tuc/nha-cap-4-80m2.html",
    'imageAlt' => "Mẫu nhà cấp 4 đẹp 80m2 với kiểu mái lệch, thiết kế kính cường lực",
    'imageCaption' => "Mẫu nh&agrave; cấp 4 đẹp 80m2 với kiểu m&aacute;i lệch",
    'imageSrc' => "https://musk.vn/uploads/files/Blog/nha-cap-4/nha-cap-4-80m2/mau-nha-cap-4-dep-80m2-voi-kieu-mai-lech-thiet-ke-kinh-cuong-luc.jpg",
    'imageWidth' => 1200,
    'imageHeight' => 674,
    'author' => $lib->generateAuthor($dataAuthor)
];

$data = (object)[
    'id' => "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh#service",
    'keywords' => ['nha dep', 'nha xinh'],
    'url' =>   "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh",
    'name' => "Dịch vụ sửa tivi tại nhà huyện Nhà Bè uy tín, đáng tin cậy",
    'images' =>  [
        $lib->generateObjectImage($dataImage)
    ],
    'description' => "Sửa tivi tại nhà huyện Nhà Bè ở các đơn vị tại Musk.vn được nhiều người lựa chọn. Dịch vụ sửa chữa tivi giá rẻ, nhanh chóng, xem ngay bài viết để hiểu rõ nhé",
    'categoryId' => "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh#category",
    'categoryName' => "Nhà cấp 4",
    'serviceType' => "dsa dsad adsa dsa dsa dsadas",
    'privacyPolicy' => "https://dev.musk.vinaweber.com/chinh-sach-bao-mat-thong-tin.html",
    'termsOfUse' => "https://dev.musk.vinaweber.com/dieu-khoan-su-dung.html",
    'logoUrl' => "https://dev.musk.vinaweber.com/seo/sua-tivi-huyen-nha-be/sua-tivi-huyen-nha-be.jpg",
    'logoName' => "Dịch vụ sửa tivi tại nhà huyện Nhà Bè | Thợ sửa chữa uy tín",
    'logoDescription' => "Sửa tivi tại nhà huyện Nhà Bè ở các đơn vị tại Musk.vn được nhiều người lựa chọn. Dịch vụ sửa chữa tivi giá rẻ, nhanh chóng, xem ngay bài viết để hiểu rõ nhé",
    'logoWidth' => 768,
    'logoHeight' => 567,
    'addressLocality' => "123",
    'addressRegion' => "3445",
    'postalCode' => "567",
    'streetAddress' => "789",
    'content' => '"\r\n\r\nNh&agrave; cấp 4 80m2\r\n\r\n\r\n
        \r\nKh&ocirc;ng phải ngẫu nhi&ecirc;n, nh&agrave; cấp 4 trở th&agrave;nh
         xu hướng lựa chọn của nhiều gia chủ. Nh&agrave; cấp 4&nbsp;mang đến kh&ocirc;ng gian sống t
         iện nghi m&agrave; vẫn đảm bảo yếu tố thẩm mỹ. C&ugrave;ng Musk.vn kh&aacute;m ph&aacute; những mẫu nh&agrave; cấp 4 
         80m2 đẹp, đơn giản th&ocirc;ng qua b&agrave;i viết dưới đ&acirc;y nh&eacute;!\r\n\r\nĐặc điểm của nh&agrave; cấp 4 diện t&iacute;ch 80m2\r\n\r\nXu h
         ướng x&acirc;y nh&agrave; cấp 4 với 80m2 đang được nhiều người lựa chọn. Kh&ocirc;ng qu&aacute; cầu kỳ trong phong c&aacute;ch, thiết kế nh&agrave; cấp 4 diện 
         t&iacute;ch 80m2 vẫn to&aacute;t l&ecirc;n vẻ đẹp, hiện đại thể hiện gu thẩm mỹ của gia chủ.\r\n\r\n\r\n\r\nNh&agrave; cấp 4 vừa thẩm mỹ m&agrave; vẫn đ&aacute;p ứng đủ c&ocirc;ng
          năng\r\n\r\n\r\n\r\nT&ugrave;y theo phong c&aacute;ch, sở th&iacute;ch, gia chủ c&oacute; thể lựa chọn kiểu đơn giản hay hiện đại, m&aacute;i bằng hoặc m&aacute;i dốc. Thiết kế nh&agrave;
           chữ I hay chữ L, kết hợp s&acirc;n vườn hay tăng diện t&iacute;ch với g&aacute;c lửng. Mỗi phong c&aacute;ch sẽ tạo ấn tượng kh&aacute;c biệt.\r\n\r\nVới c&aacute;c',
    'mentions' => [
        (object)[
            "@type" => "Thing",
            "url" => "https://musk.vn/tin-tuc/nha-cap-4-80m2.html",
            "mainEntityOfPage" => "https://musk.vn/tin-tuc/nha-cap-4-80m2.html",
            "name" => "Tổng hợp 20+ mẫu nhà cấp 4 80m2 hiện đại được xây dựng nhiều nhất hiện nay"
        ]
    ],
    'isSimilarTo' => [
        (object)[
            "@type" => "Thing",
           "name" => null,
           "description" => "Sửa máy tính",
           "mainEntityOfPage" => "https://dev.musk.vinaweber.com./sua-may-tinh",
           "url" => "https://dev.musk.vinaweber.com/sua-may-tinh"
        ]
    ],
    'isRelatedTo' => [
        (object)[
            "@type" => "Thing",
            "name" => null,
            "description" => "Sửa máy tính",
            "mainEntityOfPage" => "https://dev.musk.vinaweber.com./sua-may-tinh",
            "url" => "https://dev.musk.vinaweber.com/sua-may-tinh"
        ]
    ],
    'author' => $lib->generateAuthor($dataAuthor),
];
echo $lib->generateSchema($data);