<?php

/**
 * Copyright © Icreative Technologies. All rights reserved.
 *
 * @author : Icreative Technologies
 * @package : Ict_Customerprice
 * @copyright : Copyright © Icreative Technologies (https://www.icreativetechnologies.com/)
 */

namespace Ict\Customerprice\Plugin\Catalog\Block\Product;

use Magento\Catalog\Block\Product\ListProduct as ListProductBlock;
use Magento\Catalog\Model\Product;

class ListProduct
{
    /**
     * Skip price rendering when the price render block has been removed from layout
     *
     * @param ListProductBlock $subject
     * @param callable $proceed
     * @param Product $product
     * @return string
     */
    public function aroundGetProductPrice(ListProductBlock $subject, callable $proceed, Product $product)
    {
        if (!$subject->getLayout()->getBlock('product.price.render.default')) {
            return '';
        }
        return $proceed($product);
    }
}
