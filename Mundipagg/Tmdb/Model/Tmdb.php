<?php

/**
 * Model for Tmdb class
 *
 * @package Mundipagg\Tmdb\Model\Tmdb
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\Tmdb\Model;

use Mundipagg\Tmdb\Api\Data\TmdbInterface;

class Tmdb implements TmdbInterface
{
    private $vector;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->vector[TmdbInterface::TITLE];
    }

    /**
     * @param string $title
     * @return TmdbInterface
     */
    public function setTitle(string $title): TmdbInterface
    {
        $this->vector[TmdbInterface::TITLE] = $title;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->vector[TmdbInterface::PRICE];
    }

    /**
     * @param float $price
     * @return TmdbInterface
     */
    public function setPrice(float $price): TmdbInterface
    {
        $this->vector[TmdbInterface::PRICE] = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->vector[TmdbInterface::DESCRIPTION];
    }

    /**
     * @param string $description
     * @return TmdbInterface
     */
    public function setDescription(string $description): TmdbInterface
    {
        $this->vector[TmdbInterface::DESCRIPTION] = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getMovieId(): int
    {
        return $this->vector[TmdbInterface::MOVIE_ID];
    }

    /**
     * @param int $movie_id
     * @return TmdbInterface
     */
    public function setMovieId(int $movie_id): TmdbInterface
    {
        $this->vector[TmdbInterface::MOVIE_ID] = $movie_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->vector[TmdbInterface::IMAGE_URL];
    }

    /**
     * @param string $image_url
     * @return TmdbInterface
     */
    public function setImageUrl(string $image_url): TmdbInterface
    {
        $this->vector[TmdbInterface::IMAGE_URL] = $image_url;
        return $this;
    }

    /**
     * @return array
     */
    public function getVector(): array
    {
        return $this->vector;
    }

    /**
     * @param array $vector
     * @return TmdbInterface
     */
    public function setVector(array $vector): TmdbInterface
    {
        $this->vector = $vector;
        return $this;
    }
}