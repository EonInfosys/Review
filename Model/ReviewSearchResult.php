<?php
/**
 * Copyright EonInfosys Sp. z o.o.
 * See LICENSE_EonInfosys.txt for license details.
 */
namespace EonInfosys\Review\Model;

use EonInfosys\Review\Api\Data\ReviewSearchResultInterface;
use Magento\Framework\Api\SearchResults;

/**
 * @inheritdoc
 */
class ReviewSearchResult extends SearchResults implements ReviewSearchResultInterface
{
}
