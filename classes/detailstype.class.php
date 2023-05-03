<?php

interface productType
{
    public function getDetails($size, $weight, $height, $width, $length);
}

class DVD implements productType
{
    public function getDetails($size, $weight, $height, $width, $length)
    {
        return "Size : $size mb";
    }
}

class Book implements productType
{
    public function getDetails($size, $weight, $height, $width, $length)
    {
        return "Weight : $weight kg";
    }
}

class Furniture implements productType
{
    public function getDetails($size, $weight, $height, $width, $length)
    {
        return "Dimensions : $height x $width x $length";
    }
}
