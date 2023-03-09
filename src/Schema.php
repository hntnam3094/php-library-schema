<?php
namespace Vinaweber\SEOSchema;

interface Schema
{
    public function buildSchema();

    public function buildObjectImage($data);

    public function buildAuthor($data);
}