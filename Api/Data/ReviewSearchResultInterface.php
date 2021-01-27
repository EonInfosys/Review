<?php
/**
 * Copyright EonInfosys Sp. z o.o.
 * See LICENSE_EonInfosys.txt for license details.
 */
declare(strict_types=1);

namespace EonInfosys\Review\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Search results of Repository::getList method
 *
 * Used fully qualified namespaces in annotations for proper work of WebApi request parser
 *
 * @api
 */
interface ReviewSearchResultInterface extends SearchResultsInterface
{
    /**
     * Get attributes list.
     *
     * @return \EonInfosys\Review\Api\Data\ReviewInterface[]
     */
    public function getItems();

    /**
     * Set attributes list.
     *
     * @param \EonInfosys\Review\Api\Data\ReviewInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
