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
 * Class TitleValidator - validates review entityPkValue
 */
class EntityPkValueValidator implements ReviewValidatorInterface
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
     * Check if Review has entity pk value
     *
     * @param ReviewInterface $review
     *
     * @return ValidationResult
     */
    public function validate(ReviewInterface $review): ValidationResult
    {
        $value = (int)$review->getEntityPkValue();
        $errors = [];

        if (!$value) {
            $errors[] = __('"%field" can not be empty. Add Product ID.', ['field' => ReviewInterface::ENTITY_PK_VALUE]);
        }

        return $this->validationResultFactory->create(['errors' => $errors]);
    }
}
