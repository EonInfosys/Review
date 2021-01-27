<?php
/**
 * Copyright EonInfosys Sp. z o.o.
 * See LICENSE_EonInfosys.txt for license details.
 */
declare(strict_types=1);

namespace EonInfosys\Review\Model\Converter;

use EonInfosys\Review\Api\Data\RatingVoteInterface as RatingDataInterface;
use EonInfosys\Review\Api\Data\RatingVoteInterfaceFactory as RatingDataFactory;
use Magento\Framework\Api\DataObjectHelper;

/**
 * Class ToDataModel
 */
class RatingVote
{
    /**
     * @var RatingDataFactory
     */
    private $ratingDataFactory;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    /**
     * ToDataModel constructor.
     *
     * @param DataObjectHelper $dataObjectHelper
     * @param RatingDataFactory $ratingDataFactory
     */
    public function __construct(
        DataObjectHelper $dataObjectHelper,
        RatingDataFactory $ratingDataFactory
    ) {
        $this->dataObjectHelper = $dataObjectHelper;
        $this->ratingDataFactory = $ratingDataFactory;
    }

    /**
     * Retrieve Rating
     *
     * @param array $data
     *
     * @return RatingDataInterface
     */
    public function arrayToDataModel(array $data): RatingDataInterface
    {
        /** @var RatingDataInterface $rating */
        $rating = $this->ratingDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $rating,
            $data,
            RatingDataInterface::class
        );

        return $rating;
    }
}
