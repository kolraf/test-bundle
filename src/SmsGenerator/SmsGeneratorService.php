<?php

namespace Kolraf\TestBundle\SmsGenerator;

class SmsGeneratorService
{
    public function generate(string $text): string
    {
        return strtouppe($text);
    }
}
