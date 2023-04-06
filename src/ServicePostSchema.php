<?php

namespace Vinaweber\SEOSchema;

class ServicePostSchema implements Schema
{
    private $url;
    private $id;
    private $name;
    private $image = [];
    private $description;
    private $category;
    private $serviceType;
    private $termsOfService;
    private $alternateName = [];
    private $logo;
    private $aggregateRating;
    private $areaServed;
    private $broker;
    private $brand;
    private $provider;
    private $providerMobility;
    private $isSimilarTo = [];
    private $isRelatedTo = [];
    private $hoursAvailable = [];
    private $potentialAction = [];

    public function __construct($data = null) {
        $this->url = $data->url ?? '';
        $this->id = $data->id ?? '';
        $this->name = $data->name ?? '';
        $this->image = $data->image ?? [];
        $this->description = $data->description ?? '';
        $this->category = $data->category ?? null;
        $this->serviceType = $data->serviceType ?? '';
        $this->termsOfService = $data->termsOfService ?? null;
        $this->alternateName = $data->alternateName ?? [];
        $this->logo = $data->logo ?? null;
        $this->aggregateRating = $data->aggregateRating ?? null;
        $this->areaServed = $data->areaServed ?? null;
        $this->broker = $data->broker ?? null;
        $this->brand = $data->brand ?? null;
        $this->provider = $data->provider ?? null;
        $this->providerMobility = $data->providerMobility ?? null;
        $this->isSimilarTo = $data->isSimilarTo ?? [];
        $this->isRelatedTo = $data->isRelatedTo ?? [];
        $this->hoursAvailable = $data->hoursAvailable ?? [];
        $this->potentialAction = $data->potentialAction ?? [];
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

    public function setImage($image) {
        $this->image = $image;
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

    public function setAlternateName($alternateName) {
        $this->alternateName = $alternateName;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
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

    public function setBrand($brand) {
        $this->brand = $brand;
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

    public function sethoursAvailable($hoursAvailable = null) {
        $this->hoursAvailable = $hoursAvailable ?? [];
    }

    public function setpotentialAction($potentialAction = null) {
        $this->potentialAction = $potentialAction ?? [];
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
            'image' => $this->buildDataImage($this->image ?? []),
            'description' => $this->description ?? '',
            "category" => $this->buildCategory($this->category ?? null),
            "serviceType" => $this->serviceType ?? '',
            "termsOfService" => $this->termsOfService,
            'alternateName' => $this->alternateName ?? '',
            "logo" => $this->buildLogo($this->logo ?? null),
            "brand" => $this->buildAuthor($this->brand ?? null),
            "aggregateRating" => $this->buildAggregateRating($this->aggregateRating ?? null),
            "areaServed" => $this->buildAreaServed($this->areaServed ?? null),
            "broker" => $this->buildAuthor($this->broker ?? null),
            "provider" => $this->buildAuthor($this->provider ?? null),
            "providerMobility" => $this->providerMobility ?? '',
            "hoursAvailable" => $this->hoursAvailable ?? [],
            "potentialAction" => $this->potentialAction ?? [],
            "isSimilarTo" => $this->buildDataSimilar($this->isSimilarTo ?? []),
            "isRelatedTo" => $this->buildDataRelated($this->isRelatedTo ?? [])
        ];
        return json_encode($schema);
    }

    private function buildDataSimilar ($array = []) {
        $listImage = [];
        if ($array) {
            foreach ($array as $item) {
                $listImage[] = $this->buildIsSimilarTo($item ?? null);
            }
        }
        return $listImage;
    }

    private function buildDataRelated ($array = []) {
        $listImage = [];
        if ($array) {
            foreach ($array as $item) {
                $listImage[] = $this->buildIsRelatedTo($item ?? null);
            }
        }
        return $listImage;
    }

    private function buildDataImage ($array = []) {
        $listImage = [];
        if ($array) {
            foreach ($array as $item) {
                $listImage[] = $this->buildObjectImage($item ?? null);
            }
        }
        return $listImage;
    }

    private function buildObjectImage($data = null)
    {
        return (object)[
            "@type" => "ImageObject",
            'name' => $data['name'] ?? '',
            "license" => $data['license'],
            "acquireLicensePage" => $data['acquireLicensePage'] ?? '',
            "creditText" => $data['creditText'] ?? '',
            "copyrightNotice" => $data['copyrightNotice'] ?? '',
            "alternativeHeadline" => $data['alternativeHeadline'] ?? '',
            "caption" => $data['caption'] ?? '',
            "contentUrl" => $data['url'] ?? '',
            "width" => $data['width'] ?? '',
            "height" => $data['height'] ?? '',
            "creator" => $this->buildAuthor($data['creator'] ?? null)
        ];
    }

    private function buildAuthor($data = null)
    {
        return [
            '@type' => 'Person',
            '@id' => $data['id'] ?? '',
            'image' => $data['image'] ?? '',
            'name' => $data['name'] ?? '',
            'description' => $data['description'] ?? '',
            'url' => $data['url'] ?? ''
        ];
    }

    private function buildCategory ($data = null) {
        return (object)[
            "@type"=>"Thing",
            "name"=> $data['name'] ?? '',
            "url"=> $data['url'] ?? '',
            "@id"=> $data['id'] ?? '',
            "mainEntityOfPage"=> $data['mainEntityOfPage'] ?? '',
        ];
    }

    private function buildLogo ($data = null) {
        return (object)[
            "@type" => "ImageObject",
            "url"=> $data['url'] ?? '',
            "representativeOfPage"=> $data['representativeOfPage'] ?? '',
            "name"=> $data['name'] ?? '',
            "caption"=> $data['caption'] ?? '',
            "width"=> $data['width'] ?? 0,
            "height"=> $data['height'] ?? 0
        ];
    }

    private function buildAggregateRating ($data = null) {
        return (object)[
            "@type" =>  "AggregateRating",
            "itemReviewed" => (object)[
                "@type" => "CreativeWorkSeries",
                "name" => $data['name'] ?? '',
                "description" => $data['description'] ?? '',
                "url" => $data['url'] ?? '',
                "mainEntityofPage" => $data['mainEntityofPage'] ?? ''
            ],
            "ratingValue" => $data['ratingValue'] ?? '',
            "bestRating" => $data['bestRating'] ?? '',
            "ratingCount" => $data['ratingCount'] ?? ''
        ];
    }

    private function buildAreaServed ($data = null) {
        return (object)[
            "@type" => "Place",
            "address" =>  (object)[
                "@type" =>  "PostalAddress",
                "addressCountry" => $data['addressCountry'] ?? '',
                "addressLocality" => $data['addressLocality'] ?? '',
                "addressRegion" => $data['addressRegion'] ?? '',
                "postalCode" => $data['postalCode'] ?? '',
                "streetAddress" => $data['streetAddress'] ?? ''
            ]
        ];
    }

    private function buildIsSimilarTo ($data = null) {
        return (object)[
            "@type" => "Thing",
            "name" => $data['name'] ?? '',
            "description" => $data['description'] ?? '',
            "mainEntityOfPage" => $data['mainEntityOfPage'] ?? '',
            "url" => $data['url'] ?? ''
        ];
    }

    private function buildIsRelatedTo ($data = null) {
        return (object)[
            "@type" => "Thing",
            "name" => $data['name'] ?? '',
            "description" => $data['description'] ?? '',
            "mainEntityOfPage" => $data['mainEntityOfPage'] ?? '',
            "url" => $data['url'] ?? ''
        ];
    }
}
