<?php
/**
 * Copyright EonInfosys Sp. z o.o.
 * See LICENSE_EonInfosys.txt for license details.
 */
declare(strict_types=1);

namespace EonInfosys\Review\Api;

use EonInfosys\Review\Api\Data\ReviewInterface;
use Magento\Framework\Api\SearchCriteria;

/**
 * In Magento 2 Repository considered as an implementation of Facade pattern which provides a simplified interface
 * to a larger body of code responsible for Domain Entity management
 *
 * The main intention is to make API more readable and reduce dependencies of business logic code on the inner workings
 * of a module, since most code uses the facade, thus allowing more flexibility in developing the system
 *
 * Along with this such approach helps to segregate two responsibilities:
 * 1. Repository now could be considered as an API - Interface for usage (calling) in the business logic
 * 2. Separate class-commands to which Repository proxies initial call (like, Get Save GetList Delete) could be
 *    considered as SPI - Interfaces that you should extend and implement to customize current behaviour
 *
 * Used fully qualified namespaces in annotations for proper work of WebApi request parser
 *
 * @api
 */
interface ReviewRepositoryInterface
{
    /**
     * Save review.
     *
     * @param \EonInfosys\Review\Api\Data\ReviewInterface $review
     *
     * @return \EonInfosys\Review\Api\Data\ReviewInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function save(ReviewInterface $review): \EonInfosys\Review\Api\Data\ReviewInterface;

    /**
     * Get review by id.
     *
     * @param int $reviewId
     *
     * @return \EonInfosys\Review\Api\Data\ReviewInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get(int $reviewId): \EonInfosys\Review\Api\Data\ReviewInterface;

    /**
     * Lists the review items that match specified search criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteria|null $searchCriteria
     * @return \EonInfosys\Review\Api\Data\ReviewSearchResultInterface
     */
    public function getList(
        SearchCriteria $searchCriteria = null
    ): \EonInfosys\Review\Api\Data\ReviewSearchResultInterface;

    /**
     * Delete Review by Id
     *
     * @param int $reviewId
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteById(int $reviewId): void;
}
