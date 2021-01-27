<?php
namespace EonInfosys\Review\Model;

class Review extends \Magento\Review\Model\Review
{
    public function validate()
    {
        $errors = [];

        // if (!\Zend_Validate::is($this->getTitle(), 'NotEmpty')) {
        //     $errors[] = __('Please enter a review summary.');
        // }

        if (!\Zend_Validate::is($this->getNickname(), 'NotEmpty')) {
            $errors[] = __('Please enter a nickname.');
        }

        // if (!\Zend_Validate::is($this->getDetail(), 'NotEmpty')) {
        //     $errors[] = __('Please enter a review.');
        // }

        if (empty($errors)) {
            return true;
        }
        return $errors;
    }


    // public function validate()
    // {
    //     $errors = [];
    //
    //     if (!\Zend_Validate::is($this->getTitle(), 'NotEmpty')) {
    //         $errors[] = __('Please enter a review summary.');
    //     }
    //
    //     if (!\Zend_Validate::is($this->getNickname(), 'NotEmpty')) {
    //         $errors[] = __('Please enter a nickname.');
    //     }
    //
    //     if (!\Zend_Validate::is($this->getDetail(), 'NotEmpty')) {
    //         $errors[] = __('Please enter a review.');
    //     }
    //
    //     if (empty($errors)) {
    //         return true;
    //     }
    //     return $errors;
    // }
}
