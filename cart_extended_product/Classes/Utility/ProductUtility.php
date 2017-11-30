<?php

namespace Turn3\CartExtendedProduct\Utility;

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
 * Extend Product Utility
 *
 * @package cart_extended_product
 * @author Elena Kuprienko <elena@kuprienko.de>
 */
class ProductUtility
{
    /**
     * Change New Cart Product
     *
     * @param array $params
     *
     * @return array
     */
    public function changeNewCartProduct($params)
    {
        $productProduct = $params['productProduct'];
        $cartProduct = $params['cartProduct'];

        $cartProduct->setAdditional('abmessungen', $productProduct->getAbmessungen());

        $params['cartProduct'] = $cartProduct;

        return [$params];
    }
}
