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
        $html = '<div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb_schema pt-15 pb-15">';
        $html .= '<ul class="flexBox">';
        $html .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        $html .= '<a itemprop="item" href="' . $this->homeUrl .'">';
        $html .= '<span itemprop="name">'. $this->homeTitle ?? ' Trang chủ' .'</span>';
        $html .= '</a>';
        $html .= '<meta itemprop="position" content="1" />';
        $html .= '</li>';

        if (isset($this->breadcrumbData) && count($this->breadcrumbData) > 0) {
            foreach ($this->breadcrumbData as $key => $item) {
                $html .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
                if (!empty($item['url'])){
                    $html .= '<a itemprop="item" href="' . $item['url'] . '">';
                    $html .= '<span itemprop="name">' . $item['title'] . '</span>';
                    $html .= '<meta itemprop="position" content="'. ($key + 2) .'" />';
                    $html .= '</a>';
                }
                else{
                    $html .= '<a itemprop="item" style="cursor: text">';
                    $html .= '<span itemprop="name">' . $item['title'] . '</span>';
                    $html .= '<meta itemprop="position" content="'. ($key + 2) .'" />';
                    $html .= '</a>';
                }
                $html .= '</li>';
            }
        }

        $html .= '</ul>';
        $html .= '</div>';
        return $html;
    }

}
