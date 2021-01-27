<?php
/**
 * Copyright EonInfosys Sp. z o.o.
 * See LICENSE_EonInfosys.txt for license details.
 */
declare(strict_types=1);

namespace EonInfosys\Review\Model\Review\Validator;

use EonInfosys\Review\Api\Data\ReviewInterface;
use EonInfosys\Review\Validation\ValidationResult;
use EonInfosys\Review\Validation\ValidationResultFactory;
use EonInfosys\Review\Model\ReviewValidatorInterface;

/**
 * Class TitleValidator - validates review details
 */
class DetailValidator implements ReviewValidatorInterface
{
    /**
     * @var ValidationResultFactory
     */
    private $validationResultFactory;

    /**
     * @param ValidationResultFactory $validationResultFactory
     */
    public function __construct(ValidationResultFactory $validationResultFactory)
    {
        $this->validationResultFactory = $validationResultFactory;
    }

    /**
     * Check If review details is not empty
     *
     * @param ReviewInterface $review
     *
     * @return ValidationResult
     */
    public function validate(ReviewInterface $review): ValidationResult
    {
        $value = (string)$review->getDetail();
        $errors = [];

        if (trim($value) === '') {
            $errors[] = __('"%field" can not be empty.', ['field' => ReviewInterface::DETAIL]);
        }

        return $this->validationResultFactory->create(['errors' => $errors]);
    }
}
