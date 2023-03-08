<?php
namespace Vinaweber\SEOSchema;

interface Schema
{
    public function generateSchema($data);

    public function generateObjectImage($data);

    public function generateAuthor($data);
}