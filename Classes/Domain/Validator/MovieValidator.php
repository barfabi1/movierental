<?php
namespace ACME\Movierental\Domain\Validator;

class MovieValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator
{
    /**
     * Validates the given value
     *
     * @param mixed $object
     * @return bool
     */
    protected function isValid($object){
        if(preg_match('/Joomla/i', $object->getTitle()) && preg_match('/is great/i', $object->getDescription())){
        //if($object->getTitle() == 'Joomla'){

            $this->result->forProperty('title')->addError(
                new \TYPO3\CMS\Extbase\Error\Error('Title should not contain Joomla', 1389545446)
            );

            $this->result->forProperty('description')->addError(
                new \TYPO3\CMS\Extbase\Error\Error('Description should not contain \'is great\'', 1389545440)
            );

            return false;
        } else {
            return true;
        }
    }
}
