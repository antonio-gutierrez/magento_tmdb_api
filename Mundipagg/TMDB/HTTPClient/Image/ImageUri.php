<?php

/**
 * This class returns a string with a image uri
 *
 * @package Mundipagg\TMDB\HTTPClient\ImageUri
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\TMDB\HTTPClient\Image;

class ImageUri implements ImageUriInterface
{
    private $imageUri = null;

    /**
     * Image Uri construct
     *
     * @param string $imageUri
     */
    public function __construct(string $imageUri = null)
    {
        $this->imageUri = $imageUri;
    }

    /**
     * @param  string $imageUri
     * @return Mundipagg\TMDB\HTTPClient\Token\ImageUriInterface
     * @since 1.0.0
     */
    public function setImageUri(string $imageUri): ImageUriInterface
    {
        $this->imageUri = $imageUri;
        return $this;
    }

    /**
     * @return string
     * @since 1.0.0
     */
    public function getImageUri(): string
    {
        return $this->imageUri;
    }

    /**
     * @return string
     * @since 1.0.0
     */
    public function __toString(): string
    {
        return $this->imageUri;
    }
}