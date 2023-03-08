<?php
namespace Vinaweber\SEOSchema;

class  BreadcumbNewsDetailSchema {

    public function generateBreadcrumbDetailNews($home, $dataBreadCrumb)
    {
        /*
         * Lấy tất cả các cấp cha con của breadcrumb đó
         * Ví dụ:
         * [
         *   'title' => 'Trang chủ',
         *   'url' => 'trangchu.com'
         * ]
         [
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
            ]
         ]
         * */
        $html = '<div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb_musk pt-15 pb-15">';
        $html .= '<ul class="flexBox">';
        $html .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        $html .= '<a itemprop="item" href="' . $home['url'] .'">';
        $html .= '<span itemprop="name">'. $home['title'] ?? ' Trang chủ' .'</span>';
        $html .= '</a>';
        $html .= '<meta itemprop="position" content="1" />';
        $html .= '</li>';

        if (isset($dataBreadCrumb) && count($dataBreadCrumb) > 0) {
            foreach ($dataBreadCrumb as $key => $item) {
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