<?php

namespace Turn3\CartExtendedProduct\Domain\Model\Product;

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
 * Product
 *
 * @package cart_extended_product
 * @author Elena Kuprienko <elena@kuprienko.de>
 */
class Product extends \Extcode\Cart\Domain\Model\Product\Product
{
    /**
     * Abmessungen
     *
     * @var string
     */
    protected $abmessungen = '';

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
