<?php
namespace Vinaweber\SEOSchema;

interface Schema
{
    public function buildSchema();

    function buildObjectImage($data);

    function buildAuthor($data);
}