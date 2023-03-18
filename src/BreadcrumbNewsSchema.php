<?php
namespace Vinaweber\SEOSchema;

class  BreadcrumbNewsSchema {
    private $homeUrl;
    private $homeTitle;
    private $breadcrumbData;

    public function __construct()
    {
        $this->homeUrl = $this->homeUrl ?? '';
        $this->homeTitle = $this->homeTitle ?? '';
        $this->breadcrumbData = $this->breadcrumbData ?? [];
    }

    public function setHomeUrl($url) {
        $this->homeUrl = $url;
    }

    public function setHomeTitle($title) {
        $this->homeTitle = $title;
    }

    public function setBreadcrumbData($data) {
        $this->breadcrumbData = $data;
    }

    public function buildSchema(): string
    {

        $listElement = [
        (object)[
            "@type" => "ListItem",
            "position" => 1,
            "name" => $this->homeTitle,
            "item" => $this->homeUrl
        ]];


        if (isset($this->breadcrumbData) && count($this->breadcrumbData) > 0) {
            foreach ($this->breadcrumbData as $key => $item) {
                $listElement[] = (object)[
                    "@type" => "ListItem",
                    "position" => $key + 2,
                    "name" => $item['title'] ?? '',
                    "item" => $item['url'] ?? ''
                ];
            }
        }


        $finalJson = (object)[
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => $listElement
        ];

        return json_encode($finalJson);
    }

}
