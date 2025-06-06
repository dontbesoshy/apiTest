<?php

namespace App\Exceptions\General;

use App\Exceptions\BasicException;
use App\Exceptions\ErrorCodes;
use Symfony\Component\HttpFoundation\Response;

class ValidationFailedException extends BasicException
{
    /**
     * @inheritDoc
     */
    protected function init(): void
    {
        $this->errorCode = ErrorCodes::VALIDATION_FAILED;
        $this->errorHttpCode = Response::HTTP_UNPROCESSABLE_ENTITY;
        $this->errorMsg = $this->__('exception.validationFailed');

        $moreData = $this->getMoreData();

        if (isset($moreData['errors'])) {
            $this->errorData = $moreData['errors'];
        }
    }
}
