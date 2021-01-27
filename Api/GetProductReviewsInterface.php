<?php
/**
 * Copyright EonInfosys Sp. z o.o.
 * See LICENSE_EonInfosys.txt for license details.
 */
declare(strict_types=1);

namespace EonInfosys\Review\Api;

/**
 * Retrieve product reviews by sku
 *
 * Used fully qualified namespaces in annotations for proper work of WebApi request parser
 *
 * @api
 */
interface GetProductReviewsInterface
{
    /**
     * Get product reviews.
     *
     * @param string $sku
     * @return \EonInfosys\Review\Api\Data\ReviewInterface[]
     */
    public function execute(string $sku);
}
