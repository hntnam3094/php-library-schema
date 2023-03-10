<?php

namespace Vinaweber\SEOSchema;

class BlogPostingSchema implements Schema
{
    private $id;
    private $headline;
    private $alternativeHeadline;
    private $keywords;
    private $description;
    private $mainEntityOfPage;
    private $articleSection;
    private $name;
    private $articleBody;
    private $mentions;
    private $image;
    private $creator;
    private $publisher;
    private $author;
    private $copyrightHolder;
    private $datePublished;
    private $dateModified;
    private $wordCount;
    private $inLanguage;
    private $schemaVersion;
    private $accessMode;

    public function __construct($data = null)
    {
        $this->id = $data->id ?? '';
        $this->headline = $data->headline ?? '';
        $this->alternativeHeadline = $data->alternativeHeadline ?? '';
        $this->keywords = $data->keywords ?? [];
        $this->description = $data->description ?? '';
        $this->mainEntityOfPage = $data->mainEntityOfPage ?? '';
        $this->articleSection = $data->articleSection ?? '';
        $this->name = $data->name ?? '';
        $this->articleBody = $data->articleBody ?? '';
        $this->mentions = $data->mentions ?? [];
        $this->image = $data->image ?? [];
        $this->creator = $data->creator ?? (object)[];
        $this->publisher = $data->publisher ?? (object)[];
        $this->author = $data->author ?? (object)[];
        $this->copyrightHolder = $data->copyrightHolder ?? (object)[];
        $this->datePublished = $data->datePublished ?? '';
        $this->dateModified = $data->dateModified ?? '';
        $this->wordCount = $data->wordCount ?? 0;
        $this->inLanguage = $data->inLanguage ?? '';
        $this->schemaVersion = $data->schemaVersion ?? '';
        $this->accessMode = $data->accessMode ?? '';
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setHeadline($headline)
    {
        $this->headline = $headline;
    }

    public function setAlternativeHeadline($alternativeHeadline)
    {
        $this->alternativeHeadline = $alternativeHeadline;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setMainEntityOfPage($mainEntityOfPage)
    {
        $this->mainEntityOfPage = $mainEntityOfPage;
    }

    public function setArticleSection($articleSection)
    {
        $this->articleSection = $articleSection;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setArticleBody($articleBody)
    {
        $this->articleBody = $articleBody;
    }

    public function setMentions($mentions)
    {
        $this->mentions = $mentions;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setCopyrightHolder($copyrightHolder)
    {
        $this->copyrightHolder = $copyrightHolder;
    }

    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
    }

    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    }

    public function setWordCount($wordCount)
    {
        $this->wordCount = $wordCount;
    }

    public function setInLanguage($inLanguage)
    {
        $this->inLanguage = $inLanguage;
    }

    public function setSchemaVersion($schemaVersion)
    {
        $this->schemaVersion = $schemaVersion;
    }

    public function setAccessMode($accessMode)
    {
        $this->accessMode = $accessMode;
    }

    public function buildSchema ()
    {
        $schema = (object)[
            "@context" => "https://schema.org",
            '@type' => 'BlogPosting',
            '@id' => $this->id,
            'headline' => $this->headline,
            'alternativeHeadline' => $this->alternativeHeadline,
            'inLanguage' => $this->inLanguage,
            "schemaVersion" => $this->schemaVersion,
            'accessMode' => $this->accessMode,
            'keywords' => $this->keywords,
            'description' => $this->description,
            'mainEntityOfPage' => $this->mainEntityOfPage,
            'isFamilyFriendly' => 'true',
            'articleSection' => $this->articleSection,
            'name' => $this->name,
            'articleBody' => $this->articleBody,
            'mentions' => $this->buildDataMentions($this->mentions),
            'image' => $this->buildDataImage($this->image),
            'creator' => $this->buildAuthor($this->creator),
            'publisher' => $this->buildAuthor($this->publisher),
            'author' => $this->buildAuthor($this->author),
            'copyrightHolder' => $this->buildAuthor($this->copyrightHolder),
            'datePublished' => $this->datePublished,
            'dateModified' => $this->dateModified,
            'wordCount' => $this->wordCount,
        ];
        return json_encode($schema);
    }

    function buildDataImage ($array = []) {
        $listImage = [];
        if ($array) {
            foreach ($array as $item) {
                $listImage[] = $this->buildObjectImage((object)$item);
            }
        }
        return $listImage;
    }

    function buildDataMentions($array = []) {
        $listMentions = [];
        if ($array) {
            foreach ($array as $item) {
                $listMentions[] = $this->buildMentions((object)$item);
            }
        }
        return $listMentions;
    }
    function buildObjectImage($data = null)
    {
        return (object)[
            "@type" => "ImageObject",
            "license" => $data->license ?? '',
            "acquireLicensePage" => $data->acquireLicensePage ?? '',
            "creditText" => $data->creditText ?? '',
            "copyrightNotice" => $data->copyrightNotice ?? '',
            "caption" => $data->caption ?? '',
            "url" => $data->url ?? '',
            "width" => $data->width ?? 0,
            "height" => $data->height ?? 0,
            "creator" => $this->buildAuthor($data->creator) ?? ''
        ];
    }

    function buildAuthor($data = null)
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

    function buildMentions($data = null)
    {
        return (object)[
            "@type" => "Thing",
            "url" => $data->url ?? '',
            "mainEntityOfPage" => $data->mainEntityOfPage ?? '',
            "name" => $data->name ?? ''
        ];
    }
}
