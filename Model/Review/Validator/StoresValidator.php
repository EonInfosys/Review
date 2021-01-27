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
 * Class TitleValidator - validates review stores
 */
class StoresValidator implements ReviewValidatorInterface
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
     * Check if review has stores set
     *
     * @param ReviewInterface $review
     *
     * @return ValidationResult
     */
    public function validate(ReviewInterface $review): ValidationResult
    {
        $value = (array)$review->getStores();
        $errors = [];

        if (empty($value)) {
            $errors[] = __('"%field" can not be empty.', ['field' => ReviewInterface::STORES]);
        }

        return $this->validationResultFactory->create(['errors' => $errors]);
    }
}
