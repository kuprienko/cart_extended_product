<?php

namespace Turn3\CartExtendedProduct\Domain\Model\Cart;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Cart Extended Product Model
 *
 * @package cart_extended_product
 * @author Elena Kuprienko <elena@kuprienko.de>
 */
class Product extends \Extcode\Cart\Domain\Model\Cart\Product
{
    /**
     * Abmessungen
     *
     * @var string
     */
    protected $abmessungen = '';
    

    /**
     * @return array
     */
    public function toArray()
    {
        $productArr = [
            'productId' => $this->productId,
            'tableId' => $this->tableId,
            'contentId' => $this->contentId,
            'id' => $this->getId(),
            'sku' => $this->sku,
            'title' => $this->title,
            'price' => $this->price,
            'specialPrice' => $this->specialPrice,
            'quantityDiscounts' => $this->quantityDiscounts,
            'taxClass' => $this->taxClass,
            'quantity' => $this->quantity,
            'price_total' => $this->gross,
            'price_total_gross' => $this->gross,
            'price_total_net' => $this->net,
            'tax' => $this->tax,
            'additional' => $this->additional,
            'service_attribute1' => $this->serviceAttribute1,
            'service_attribute2' => $this->serviceAttribute2,
            'service_attribute3' => $this->serviceAttribute3,
            'abmessungen' => $this->abmessungen
        ];

        if ($this->beVariants) {
            $variantArr = [];

            foreach ($this->beVariants as $variant) {
                /** @var $variant \Extcode\Cart\Domain\Model\Cart\BeVariant */
                array_push($variantArr, [$variant->getId() => $variant->toArray()]);
            }

            array_push($productArr, ['variants' => $variantArr]);
        }

        return $productArr;
    }

    /**
     * Returns the Abmessungen
     *
     * @return string
     */
    public function getAbmessungen()
    {
        return $this->abmessungen;
    }

    /**
     * Sets the Abmessungen
     *
     * @param string $abmessungen
     *
     * @return void
     */
    public function setAbmessungen($abmessungen)
    {
        $this->abmessungen = $abmessungen;
    }
}
