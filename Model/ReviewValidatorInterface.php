<?php
/**
 * Copyright EonInfosys Sp. z o.o.
 * See LICENSE_EonInfosys.txt for license details.
 */
declare(strict_types=1);

namespace EonInfosys\Review\Model;

use EonInfosys\Review\Api\Data\ReviewInterface;
use EonInfosys\Review\Validation\ValidationResult;

/**
 * Responsible for Review validation
 * Extension point for base validation
 *
 * @api
 */
interface ReviewValidatorInterface
{
    /**
     * Validate Review
     *
     * @param ReviewInterface $review
     *
     * @return ValidationResult
     */
    public function validate(ReviewInterface $review): ValidationResult;
}
