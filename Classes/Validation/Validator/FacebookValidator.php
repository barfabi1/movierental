<?php
namespace ACME\Movierental\Validation\Validator;

class FacebookValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator
{

    /**
     * API Service
     *
     * @var \ACME\Movierental\Service\ExternalApiService
     * @inject
     */
    protected $apiSerive;

    /**
     * Object manager
     *
     * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface
     * @inject
     */
    protected $objectManager;

    /**
     * Validates the given value
     *
     * @param mixed $value
     * @return bool
     */
    protected function isValid($value)
    {
        $apiValidationResult = $this->apiSerive->validateData($value);
        $success = true;
        if($apiValidationResult['title']) {
            $error = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Validation\\Error', $apiValidationResult['title'], 1389545453);
            $this->result->forProperty('title')->addError($error);
            $success = false;
        }

        return $success;
    }

}
