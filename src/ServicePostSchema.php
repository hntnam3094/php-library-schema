<?php

namespace Vinaweber\SEOSchema;

class ServicePostSchema implements Schema
{
    public function generateSchema($data)
    {
        /*{
        "@context": "https://schema.org",
        "@type": "Service",
        "alternateName": [
         "cho",
         " meo",
         " ga",
         " vit",
         " voi",
         " ho",
         " ran",
         " su tu",
         " ha ma"
        ],
        "url": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh",
        "@id": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh#service",
        "mainEntityOfPage": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh",
        "name": "Dịch vụ sửa tivi tại nhà huyện Nhà Bè uy tín, đáng tin cậy",
        "image": [
         {
           "@type": "ImageObject",
           "name": "Mẫu biệt thự 5 tầng đẹp",
           "license": "https://dev.musk.vinaweber.com/dieu-khoan-su-dung.html",
           "acquireLicensePage": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh",
           "creditText": "Musk.vn",
           "copyrightNotice": "Musk.vn",
           "alternativeHeadline": "Mẫu biệt thự 5 tầng đẹp",
           "thumbnailUrl": "https://dev.musk.vinaweber.comhttps://dev.musk.vinaweber.com/images/no-image.jpg",
           "caption": "",
           "url": "https://dev.musk.vinaweber.comhttps://dev.musk.vinaweber.com/images/no-image.jpg",
           "width": "",
           "height": "",
           "creator": {
             "@type": "Person",
             "@id": "https://musk.vn/le-thai-hung.html#person",
             "image": "https://dev.musk.vinaweber.com/images/no-image.jpg",
             "name": "CEO Lê Thái Hưng",
             "description": "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
             "url": "https://musk.vn/le-thai-hung.html"
           }
         }
        ],
        "description": "Sửa tivi tại nhà huyện Nhà Bè ở các đơn vị tại Musk.vn được nhiều người lựa chọn. Dịch vụ sửa chữa tivi giá rẻ, nhanh chóng, xem ngay bài viết để hiểu rõ nhé",
        "category": {
         "@type": "Thing",
         "name": "Dịch vụ sửa tivi tại nhà huyện Nhà Bè | Thợ sửa chữa uy tín",
         "url": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh",
         "@id": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh#category",
         "mainEntityOfPage": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh"
        },
        "serviceType": "dsa dsad adsa dsa dsa dsadas",
        "termsOfService": [
         "https://dev.musk.vinaweber.com/chinh-sach-bao-mat-thong-tin.html",
         "https://dev.musk.vinaweber.com/dieu-khoan-su-dung.html"
        ],
        "logo": {
         "@type": "ImageObject",
         "url": "https://dev.musk.vinaweber.com/seo/sua-tivi-huyen-nha-be/sua-tivi-huyen-nha-be.jpg",
         "representativeOfPage": "true",
         "name": "Dịch vụ sửa tivi tại nhà huyện Nhà Bè | Thợ sửa chữa uy tín",
         "caption": "Sửa tivi tại nhà huyện Nhà Bè ở các đơn vị tại Musk.vn được nhiều người lựa chọn. Dịch vụ sửa chữa tivi giá rẻ, nhanh chóng, xem ngay bài viết để hiểu rõ nhé",
         "width": 768,
         "height": 567
        },
        "brand": {
         "@type": "Person",
         "@id": "https://musk.vn/le-thai-hung.html#person",
         "image": "https://dev.musk.vinaweber.com/images/no-image.jpg",
         "name": "CEO Lê Thái Hưng",
         "description": "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
         "url": "https://musk.vn/le-thai-hung.html"
        },
        "aggregateRating": {
         "@type": "AggregateRating",
         "itemReviewed": {
           "@type": "CreativeWorkSeries",
           "name": "Dịch vụ sửa tivi tại nhà huyện Nhà Bè uy tín, đáng tin cậy",
           "description": "Sửa tivi tại nhà huyện Nhà Bè ở các đơn vị tại Musk.vn được nhiều người lựa chọn. Dịch vụ sửa chữa tivi giá rẻ, nhanh chóng, xem ngay bài viết để hiểu rõ nhé",
           "url": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh",
           "mainEntityofPage": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh"
         },
         "ratingValue": "88",
         "bestRating": "100",
         "ratingCount": "20"
        },
        "areaServed": {
         "@type": "Place",
         "address": {
           "@type": "PostalAddress",
           "addressLocality": "123",
           "addressRegion": "3445",
           "postalCode": "567",
           "streetAddress": "789"
         }
        },
        "broker": {
         "@type": "Person",
         "@id": "https://musk.vn/le-thai-hung.html#person",
         "image": "https://dev.musk.vinaweber.com/images/no-image.jpg",
         "name": "CEO Lê Thái Hưng",
         "description": "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
         "url": "https://musk.vn/le-thai-hung.html"
        },
        "provider": {
         "@type": "Person",
         "@id": "https://musk.vn/le-thai-hung.html#person",
         "image": "https://dev.musk.vinaweber.com/images/no-image.jpg",
         "name": "CEO Lê Thái Hưng",
         "description": "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
         "url": "https://musk.vn/le-thai-hung.html"
        },
        "providerMobility": "dynamic",
        "hoursAvailable": [
         {
           "@type": "OpeningHoursSpecification",
           "dayOfWeek": "http://schema.org/Monday",
           "opens": "8:00",
           "closes": "18:00"
         },
         {
           "@type": "OpeningHoursSpecification",
           "dayOfWeek": "http://schema.org/Tuesday",
           "opens": "8:00",
           "closes": "18:00"
         },
         {
           "@type": "OpeningHoursSpecification",
           "dayOfWeek": "http://schema.org/Wednesday",
           "opens": "8:00",
           "closes": "18:00"
         },
         {
           "@type": "OpeningHoursSpecification",
           "dayOfWeek": "http://schema.org/Thursday",
           "opens": "8:00",
           "closes": "18:00"
         },
         {
           "@type": "OpeningHoursSpecification",
           "dayOfWeek": "http://schema.org/Friday",
           "opens": "8:00",
           "closes": "18:00"
         },
         {
           "@type": "OpeningHoursSpecification",
           "dayOfWeek": "http://schema.org/Saturday",
           "opens": "8:00",
           "closes": "18:00"
         }
        ],
        "potentialAction": [
         {
           "@type": "SearchAction",
           "instrument": [
             "laptop",
             "pc",
             "tablet",
             "phone"
           ]
         },
         {
           "@type": "ViewAction",
           "instrument": [
             "laptop",
             "pc",
             "tablet",
             "phone"
           ]
         },
         {
           "@type": "BuyAction",
           "instrument": [
             "laptop",
             "pc",
             "tablet",
             "phone"
           ]
         },
         {
           "@type": "AskAction",
           "instrument": [
             "laptop",
             "pc",
             "tablet",
             "phone"
           ]
         },
         {
           "@type": "InteractAction",
           "instrument": [
             "laptop",
             "pc",
             "tablet",
             "phone"
           ],
           "target": {
             "@type": "EntryPoint",
             "actionPlatform": "https://schema.org/DigitalPlatformEnumeration"
           }
         }
        ],
        "isSimilarTo": [ VD: khai báo tầng con, với https://musk.vn/cong-nhom-duc-tp-ho-chi-minh không có tầng con chỉ có tầng ngang. e ví dụ khác với https://musk.vn/thu-mua-xe-cu-tp-ho-chi-minh thì sẽ có tầng con là thu mua xe tải, xe nâng, xe đầu kéo, xe ô tô => khai báo isSimilarTo
         {
           "@type": "Thing",
           "name": null,
           "description": "Sửa máy tính",
           "mainEntityOfPage": "https://dev.musk.vinaweber.com./sua-may-tinh",
           "url": "https://dev.musk.vinaweber.com/sua-may-tinh"
         }
        ],
        "isRelatedTo": [ VD: khai báo link tầng ngang với cổng nhôm đúc thì tầng ngang của cổng nhôm đúc sẽ là ban công nhôm đúc, cầu thang nhôm đúc,..  e ví dụ khác với https://musk.vn/thu-mua-xe-cu-tp-ho-chi-minh thì sẽ có tầng ngang thì không cần khai báo
         {
           "@type": "Thing",
           "name": null,
           "description": "Sửa tivi",
           "mainEntityOfPage": "https://dev.musk.vinaweber.com./sua-tivi",
           "url": "https://dev.musk.vinaweber.com/sua-tivi"
         }
        ]
        }*/
        $schema = (object)[
            "@context" => "https://schema.org",
            '@type' => 'Service',
            "alternateName" => $data->keywords ?? [],
            'url' => $data->url ?? '',
            '@id' => $data->id ?? '',
            'mainEntityOfPage' => $data->url ?? '',
            'name' => $data->name ?? '',
            'image' => $data->images ?? [],
            'description' => $data->description ?? '',
            "category" => (object)[
                "@type"=>"Thing",
                "name"=> $data->name ?? '',
                "url"=> $data->url ?? '',
                "@id"=> $data->categoryId ?? '',
                "mainEntityOfPage"=> $data->url ?? '',
            ],
            "serviceType" => $data->serviceType ?? '',
            "termsOfService" => [
                $data->privacyPolicy ?? '',
                $data->termsOfUse ?? ''
            ],
            'alternateName' => $data->keywords ?? [],
            "logo" => (object)[
                "@type" => "ImageObject",
                "url"=> $data->logoUrl ?? '',
                "representativeOfPage"=>"true",
                "name"=> $data->logoName ?? '',
                "caption"=> $data->logoDescription ?? '',
                "width"=> $data->logoWidth ?? 0,
                "height"=> $data->logoHeight ?? 0
            ],
            "brand" => $data->author ?? '',
            "aggregateRating" => (object)[
                "@type" =>  "AggregateRating",
                "itemReviewed" => (object)[
                    "@type" => "CreativeWorkSeries",
                    "name" => $data->name ?? '',
                    "description" => $data->description ?? '',
                    "url" => $data->url ?? '',
                    "mainEntityofPage" => $data->url ?? ''
                ],
                "ratingValue" => "88",
                "bestRating" => "100",
                "ratingCount" => "20"
            ],
            "areaServed" =>  (object)[
                "@type" => "Place",
                "address" =>  (object)[
                    "@type" =>  "PostalAddress",
                    "addressLocality" => $data->addressLocality ?? '',
                    "addressRegion" => $data->addressRegion ?? '',
                    "postalCode" => $data->postalCode ?? '',
                    "streetAddress" => $data->streetAddress ?? ''
                ]
            ],

            "broker" => $data->author ?? '',
            "provider" => $data->author ?? '',
            "providerMobility" => "dynamic",
            "hoursAvailable" => [
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
            ],
            "potentialAction" => [
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
            ],
            "isSimilarTo" => $data->isSimilarTo ?? [],
            "isRelatedTo" => $data->isRelatedTo ?? []
        ];
        return json_encode($schema);
    }

    public function generateObjectImage($data)
    {
        /*
         {
           "@type": "ImageObject",
           "name": "Mẫu biệt thự 5 tầng đẹp",
           "license": "https://dev.musk.vinaweber.com/dieu-khoan-su-dung.html",
           "acquireLicensePage": "https://dev.musk.vinaweber.com/sua-tivi-huyen-nha-be-tp-ho-chi-minh",
           "creditText": "Musk.vn",
           "copyrightNotice": "Musk.vn",
           "alternativeHeadline": "Mẫu biệt thự 5 tầng đẹp",
           "thumbnailUrl": "https://dev.musk.vinaweber.comhttps://dev.musk.vinaweber.com/images/no-image.jpg",
           "caption": "",
           "url": "https://dev.musk.vinaweber.comhttps://dev.musk.vinaweber.com/images/no-image.jpg",
           "width": "",
           "height": "",
           "creator": {
             "@type": "Person",
             "@id": "https://musk.vn/le-thai-hung.html#person",
             "image": "https://dev.musk.vinaweber.com/images/avtar.jpg",
             "name": "CEO Lê Thái Hưng",
             "description": "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
             "url": "https://musk.vn/le-thai-hung.html"
         }
         }
         * */
        $objImage = (object)[
            "@type" => "ImageObject",
            'name' => $data->imageAlt,
            "license" => $data->termOfUse,
            "acquireLicensePage" => $data->url,
            "creditText" => "Musk.vn",
            "copyrightNotice" => "Musk.vn",
            "alternativeHeadline" => $data->imageAlt,
            "thumbnailUrl" =>  $data->imageSrc,
            "caption" => $data->imageCaption,
            "url" => $data->imageSrc,
            "width" => $data->imageWidth,
            "height" => $data->imageHeight,
            "creator" => $data->author
        ];
        return $objImage;
    }

    public function generateAuthor($data)
    {
        /*
         {
             "@type": "Person",
             "@id": "https://musk.vn/le-thai-hung.html#person",
             "image": "https://dev.musk.vinaweber.com/images/avatar.jpg",
             "name": "CEO Lê Thái Hưng",
             "description": "Giới thiệu nhà sáng lập của sàn TMĐT Musk.vn - Lê Thái Hưng",
             "url": "https://musk.vn/le-thai-hung.html"
         }
        */

        return [
            '@type' => 'Person',
            '@id' => $data->id,
            'image' => $data->authorImage,
            'name' => $data->authorName,
            'description' => $data->authorDescription,
            'url' => $data->authorUrl
        ];
    }
}
