<?php
/**
 * Copyright EonInfosys Sp. z o.o.
 * See LICENSE_EonInfosys.txt for license details.
 */
namespace EonInfosys\Review\Model\Review;

/**
 * Interface ReviewTypeResolverInterface
 */
interface ReviewTypeResolverInterface
{
    /**
     * Resolver Review Type
     *
     * @param \Magento\Review\Model\Review $productReview
     *
     * @return int
     */
    public function getReviewType($productReview): int;
}
