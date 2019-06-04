<?php

/**
 * Interface for repository class
 *
 * @package Mundipagg\Tmdb\Service\ImportImageService
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\Tmdb\Api;


use Magento\Catalog\Api\Data\ProductInterface;
use Mundipagg\Tmdb\Api\Data\TmdbInterface;
use Mundipagg\Tmdb\Api\Data\BoxInterface;

interface TmdbRepositoryInterface
{
    /**
     * Save content.
     *
     * @param \Mundipagg\Tmdb\Api\Data\TmdbInterface $movie
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(TmdbInterface $tmdb): bool;

    /**
     * Get product by sku
     *
     * @param string $sku
     * @return \Magento\Catalog\Api\Data\ProductInterface
     */
    public function getProductBySku($sku): ProductInterface;
}