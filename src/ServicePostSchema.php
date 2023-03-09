<?php

namespace Vinaweber\SEOSchema;

class ServicePostSchema implements Schema
{
    private $url;
    private $id;
    private $name;
    private $images = [];
    private $description;
    private $category;
    private $serviceType;
    private $termsOfService;
    private $keywords = [];
    private $logo;
    private $author;
    private $aggregateRating;
    private $areaServed;
    private $broker;
    private $provider;
    private $providerMobility;
    private $isSimilarTo = [];
    private $isRelatedTo = [];
    private $hoursAvailable = [];
    private $potentialAction = [];

    public function __construct($data) {
        $this->url = $data->url ?? '';
        $this->id = $data->id ?? '';
        $this->name = $data->name ?? '';
        $this->images = $data->images ?? [];
        $this->description = $data->description ?? '';
        $this->category = $data->category ?? null;
        $this->serviceType = $data->serviceType ?? '';
        $this->termsOfService = $data->termsOfService ?? null;
        $this->keywords = $data->keywords ?? [];
        $this->logo = $data->logo ?? null;
        $this->author = $data->author ?? null;
        $this->aggregateRating = $data->aggregateRating ?? null;
        $this->areaServed = $data->areaServed ?? null;
        $this->broker = $data->broker ?? null;
        $this->provider = $data->provider ?? null;
        $this->providerMobility = $data->providerMobility ?? null;
        $this->isSimilarTo = $data->isSimilarTo ?? [];
        $this->isRelatedTo = $data->isRelatedTo ?? [];
        $this->hoursAvailable = $data->hoursAvailable ?? [
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

        $this->potentialAction = $data->potentialAction ?? [
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
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setImages($images) {
        $this->images = $images;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setServiceType($serviceType) {
        $this->serviceType = $serviceType;
    }

    public function setTermsOfService($termsOfService) {
        $this->termsOfService = $termsOfService;
    }

    public function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setAggregateRating($aggregateRating) {
        $this->aggregateRating = $aggregateRating;
    }

    public function setAreaServed($areaServed) {
        $this->areaServed = $areaServed;
    }

    public function setBroker($broker) {
        $this->broker = $broker;
    }

    public function setProvider($provider) {
        $this->provider = $provider;
    }

    public function setProviderMobility($providerMobility) {
        $this->providerMobility = $providerMobility;
    }

    public function setIsSimilarTo($isSimilarTo) {
        $this->isSimilarTo = $isSimilarTo;
    }

    public function setIsRelatedTo($isRelatedTo) {
        $this->isRelatedTo = $isRelatedTo;
    }
    
    public function buildSchema()
    {
        $schema = (object)[
            "@context" => "https://schema.org",
            '@type' => 'Service',
            'url' => $this->url ?? '',
            '@id' => $this->id ?? '',
            'mainEntityOfPage' => $this->url ?? '',
            'name' => $this->name ?? '',
            'image' => $this->images ?? [],
            'description' => $this->description ?? '',
            "category" => $this->category,
            "serviceType" => $this->serviceType ?? '',
            "termsOfService" => $this->termsOfService,
            'alternateName' => $this->keywords ?? [],
            "logo" => $this->logo,
            "brand" => $this->author ?? '',
            "aggregateRating" => $this->aggregateRating,
            "areaServed" => $this->areaServed,
            "broker" => $this->broker ?? '',
            "provider" => $this->provider ?? '',
            "providerMobility" => $this->providerMobility,
            "hoursAvailable" => $this->hoursAvailable,
            "potentialAction" => $this->potentialAction,
            "isSimilarTo" => $this->isSimilarTo ?? [],
            "isRelatedTo" => $this->isRelatedTo ?? []
        ];
        return json_encode($schema);
    }

    public function buildObjectImage($data)
    {
        return (object)[
            "@type" => "ImageObject",
            'name' => $data->name,
            "license" => $data->license,
            "acquireLicensePage" => $data->acquireLicensePage,
            "creditText" => $data->creditText,
            "copyrightNotice" => $data->copyrightNotice,
            "alternativeHeadline" => $data->alternativeHeadline,
            "thumbnailUrl" =>  $data->thumbnailUrl,
            "caption" => $data->caption,
            "url" => $data->url,
            "width" => $data->width,
            "height" => $data->height,
            "creator" => $data->creator
        ];
    }

    public function buildAuthor($data)
    {
        return [
            '@type' => 'Person',
            '@id' => $data->id,
            'image' => $data->image,
            'name' => $data->name,
            'description' => $data->description,
            'url' => $data->url
        ];
    }

    public function buildCategory ($data) {
        return (object)[
            "@type"=>"Thing",
            "name"=> $data->name ?? '',
            "url"=> $data->url ?? '',
            "@id"=> $data->id ?? '',
            "mainEntityOfPage"=> $data->mainEntityOfPage ?? '',
        ];
    }

    public function buildLogo ($data) {
        return (object)[
            "@type" => "ImageObject",
            "url"=> $data->url ?? '',
            "representativeOfPage"=> $data->representativeOfPage,
            "name"=> $data->name ?? '',
            "caption"=> $data->caption ?? '',
            "width"=> $data->width ?? 0,
            "height"=> $data->height ?? 0
        ];
    }

    public function buildAggregateRating ($data) {
        return (object)[
            "@type" =>  "AggregateRating",
            "itemReviewed" => (object)[
                "@type" => "CreativeWorkSeries",
                "name" => $data->name ?? '',
                "description" => $data->description ?? '',
                "url" => $data->url ?? '',
                "mainEntityofPage" => $data->mainEntityofPage ?? ''
            ],
            "ratingValue" => $data->ratingValue ?? '',
            "bestRating" => $data->bestRating ?? '',
            "ratingCount" => $data->ratingCount ?? ''
        ];
    }

    public function buildAreaServed ($data) {
        return (object)[
            "@type" => "Place",
            "address" =>  (object)[
                "@type" =>  "PostalAddress",
                "addressLocality" => $data->addressLocality ?? '',
                "addressRegion" => $data->addressRegion ?? '',
                "postalCode" => $data->postalCode ?? '',
                "streetAddress" => $data->streetAddress ?? ''
            ]
        ];
    }

    public function buildIsSimilarTo ($data) {
        return (object)[
            "@type" => "Thing",
            "name" => $data->name,
            "description" => $data->description,
            "mainEntityOfPage" => $data->mainEntityOfPage,
            "url" => $data->url
        ];
    }

    public function buildIsRelatedTo ($data) {
        return (object)[
            "@type" => "Thing",
            "name" => $data->name,
            "description" => $data->description,
            "mainEntityOfPage" => $data->mainEntityOfPage,
            "url" => $data->url
        ];
    }
}
