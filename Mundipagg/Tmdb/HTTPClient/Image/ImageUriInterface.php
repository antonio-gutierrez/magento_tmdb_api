<?php

/**
 * Interface for classes that returns a string image uri
 *
 * @package Mundipagg\Tmdb\HTTPClient\Token
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\Tmdb\HTTPClient\Image;


interface ImageUriInterface
{
    /**
     * @param  string $imageUri
     * @return Mundipagg\Tmdb\HTTPClient\Image\ImageUriInterface
     * @since 1.0.0
     */
    public function setImageUri(string $imageUri): ImageUriInterface;

    /**
     * @return string
     * @since 1.0.0
     */
    public function getImageUri(): string;
}